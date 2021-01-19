<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function create(Request $request)
    {
        $product = new Product;
        $product->name = 'God of War';
        $product->price = 40;

        $product->save();

        $category = Category::find([3, 4]);
        $product->categories()->attach($category);

        return 'Success';
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function removeCategory(Product $product)
    {
        $category = Category::find(3);

        $product->categories()->detach($category);

        return 'Success';
    }
}
