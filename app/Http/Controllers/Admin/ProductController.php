<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	public function index()
	{
		$product = Product::get();

		return view('admin.product.index', compact('product'));
	}

    public function create(Request $request)
	{
		$product = new Product($request->all());
		$product->save();

		return response()->json([
			'product' => $product,
			'saved' => true
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
			'saved' => true,
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


