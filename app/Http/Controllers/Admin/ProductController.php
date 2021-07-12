<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	public function index()
	{
		$product = Product::all();
        $new_product = new Product();

		return view('admin.product.index', compact('product', 'new_product'));
	}

    public function create(Request $request)
	{
        // $name='';
		$product = new Product($request->all());
        if ($request->hasFile('image_path')){
            $name = $request->image_path->getClientOriginalName();
            $product->image_path = $name;
            $request->image_path('image_path')->storeAs('img', $name);
        }
        $product->save();

		return response()->json([
			'product' => $product,
			// 'saved' => true
		]);
	}

	public function edit(Product $Product)
	{
		$new_product = $Product;

		return view('admin.product.edit', [
			'product' => $Product,
			'new_product' => $new_product,
		]);
	}

	public function update(Request $request, Product $Product)
	{
		$Product->update($request->all());

		return response()->json([
			'product' => $Product,
			// 'saved' => true,
		]);
	}

	public function delete(Product $Product)
	{
		$Product->delete();
		return response()->json([
			'deleted' => true
		]);
	}
}


