<?php

namespace App\Http\Controllers\articles;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class articles extends Controller
{
    private $articleModel;

    public function __construct(Article $articleModel)
    {
        $this->articleModel = $articleModel;
    }

    public function index(): \Illuminate\View\View
    {
        $articles = $this->articleModel->orderBy('published_at', 'desc')->get();

        return view('content.articles.index', compact('articles'));
    }

    public function dashboard(): \Illuminate\View\View
    {
        $articles = $this->getRandomArticles();

        return view('content.dashboard.dashboards-analytics', compact('articles'));
    }

    private function getRandomArticles(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->articleModel->inRandomOrder()->get();
    }

    public function create(): \Illuminate\View\View
    {
        return view('content.articles.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|unique:articles|max:80',
                'subtitle' => 'required|max:50',
                'author' => 'required|max:40',
                'content' => 'required',
                'published_at' => 'required|date',
                'upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        $article = new Article();
        $article->fill($request->all());

        $imageurl = $request->url_images;
        $uploadedImage = $request->file('upload');

        if ($uploadedImage instanceof UploadedFile && $imageurl !== $uploadedImage->getClientOriginalName()) {
            Session::flash('error', 'Failed registration. URL field and Image field do not match.');
            return redirect()->back()->withInput();
        }

        if ($uploadedImage) {
            $imageName = $uploadedImage->getClientOriginalName();
            $uploadedImage->move('assets/images/articles', $imageName);
        }

        if ($this->articleModel->where('url_images', $imageurl)->orWhere('url_images', 'assets/images/articles/' . $imageName)->exists()) {
            Session::flash('error', 'Failed registration. The URL or image name already exists in the database.');
            return redirect()->back()->withInput();
        }

        try {
            $article->save();
            Session::flash('success', 'Article successfully created.');
        } catch (QueryException $exception) {
            Session::flash('error', 'Failed registration. The field URL: ' . $article->url_images . ' already exists in the database.');
            return redirect()->back()->withInput();
        }

        return redirect()->route('content.articles.show', $article->id);
    }

    public function show($id): \Illuminate\View\View
    {
        $article = $this->articleModel->findOrFail($id);

        return view('content.articles.show', compact('article'));
    }

    public function edit($id): \Illuminate\View\View
    {
        $article = $this->articleModel->findOrFail($id);
        return view('content.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = $this->articleModel->findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|max:80',
            'subtitle' => 'required|max:50',
            'author' => 'required|max:40',
            'content' => 'required',
            'published_at' => 'required|date',
            'upload' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('upload')) {
            $uploadedImage = $request->file('upload');
            $imageName = $uploadedImage->getClientOriginalName();

            $uploadedImage->move('assets/images/articles', $imageName);
            $article->url_images = $imageName;
        }

        $article->update($validatedData);

        Session::flash('success', 'Article successfully updated.');

        return redirect()->route('content.articles.show', $article->id);
    }

    public function admin(){
        $articles = $this->articleModel->all();
        return view('content.articles.admin', compact('articles'));
    }

    public function delete($id)
    {
        $article = $this->articleModel->findOrFail($id);
        $article->delete();

        return redirect()->back()->with('success', 'Article successfully deleted.');
    }

}
