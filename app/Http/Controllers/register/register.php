<?php

namespace App\Http\Controllers\register;


use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Nette\Schema\ValidationException;

class register extends Controller
{
    private Products $products;

    public function __construct(Products $products)
    {
        $this->products = $products;
    }

    public function index()
    {
        return view('content.register.registerMoto');
    }

    public function newMotorcycle(Request $request)
    {
        try{
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'price' => 'required|numeric',
            'cylinder_capacity' => 'required',
            'power' => 'required',
            'transmission' => 'required',
            'cycle' => 'required',
            'cooling' => 'required',
            'cylinders' => 'required',
            'start' => 'required',
            'secondary_transmission' => 'required',
            'wheelbase' => 'required',
            'front_brake' => 'required',
            'rear_brake' => 'required',
            'seat_height' => 'required',
            'weight' => 'required',
            'tank_capacity' => 'required',
            'image_url' => 'required',
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        }catch (ValidationException $e){
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        $product = new Products();
        $product->fill($request->all());

        $imageurl = $request->image_url;
        $uploadedImage = $request->file('upload');

        if ($uploadedImage instanceof UploadedFile && $imageurl !== $uploadedImage->getClientOriginalName()) {
            Session::flash('error', 'Failed registration. URL field and Image field do not match.');
            return redirect()->back()->withInput();
        }

        if ($uploadedImage) {
            $imageName = $uploadedImage->getClientOriginalName();
            $uploadedImage->move('assets/images/moto', $imageName);
        }

        try {
            $product->save();
            Session::flash('success', 'Motorcycle registered successfully.');
        } catch (QueryException $exception) {
            Session::flash('error', 'Failed registration. The field URL: '.$product->image_url.' already exists in the database.');
            return redirect()->back()->withInput();
        }

        return view('content.register.registerMoto');
    }

    public function edit()
    {
        $products = $this->products->all();
        return view('content.register.edit', compact('products'));
    }


    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand1' => 'required',
            'model1' => 'required',
        ], [
            'required' => 'All fields are required.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $brand1 = $request->input('brand1');
        $model1 = $request->input('model1');

        $motorcycles = $this->products->whereIn('brand', [$brand1])
            ->whereIn('model', [$model1])
            ->get();

        $id = $request->input('id');
        return view('content.register.show', compact('motorcycles', 'id'));
    }


    public function update(Request $request, $id)
    {
        $productData = $request->except('_method', '_token', 'upload');

        if ($request->hasFile('upload')) {

            $file = $request->file('upload');

            $newFilePath = $file->move('assets/images/moto', $file->getClientOriginalName());
            $productData['image_url'] = $newFilePath;
        }

        $this->products->where('id', $id)->update($productData);

        Session::flash('success', 'Motorcycle successfully updated.');

        return redirect()->route('motorcycle.edit', $id);
    }

    public function delete($id)
    {
        $motorcycle = Products::findOrFail($id);
        $motorcycle->delete();

        Session::flash('error', 'Motorcycle successfully deleted.');

        $products = Products::all();

        return view('content.register.edit', compact('products'));
    }


}
