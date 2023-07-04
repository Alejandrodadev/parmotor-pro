<?php

namespace App\Http\Controllers\comparator;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class comparator extends Controller
{
    private Products $products;

    public function __construct(Products $products)
    {
        $this->products = $products;
    }

    public function index()
    {
        $products = $this->products->all();
        return view('content.comparator.comparator', compact('products'));
    }

    public function getModelsByBrand(Request $request, $brand)
    {
        $models = $this->products->where('brand', $brand)->pluck('model');
        return response()->json($models);
    }

    public function showMotorcycles(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand1' => 'required',
            'model1' => 'required',
            'brand2' => 'required',
            'model2' => 'required',
        ], [
            'required' => 'All fields are required.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $brand1 = $request->input('brand1');
        $model1 = $request->input('model1');
        $brand2 = $request->input('brand2');
        $model2 = $request->input('model2');

        $motorcycles = $this->products->whereIn('brand', [$brand1, $brand2])
            ->whereIn('model', [$model1, $model2])
            ->get();
        return view('content.comparator.showMotorcycles', compact('motorcycles'));
    }

}
