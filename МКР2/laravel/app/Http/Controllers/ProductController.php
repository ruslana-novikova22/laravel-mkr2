<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\ManufacturerModel;


class ProductController extends Controller
{

    public function index()
    {
        $manufacturers = ManufacturerModel::all();
        return view('indexManufac', compact('manufacturers'));

    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        ProductModel::create($request -> all());
        return redirect() -> route('products.index');
    }

    public function show(ManufacturerModel $manufacturers)
    {
        return view('manufacturers.showManufac', compact('manufacturers'));
    }

    public function update(Request $request, ProductModel $products)
    {
        $request -> validate([
            'id' => 'required',
            'name' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
            'manufacturing_date' => 'required',
        ]);

        $products -> update([
            'id' => $request-> input('id'),
            'name' => $request-> input('name'),
            'manufacturer' => $request-> input('manufacturer'),
            'price' => $request-> input('price'),
            'manufacturing_date' => $request-> input('manufacturing_date'),
        ]);

        return redirect()->route('manufacturers.indexManufac');
    }
}
