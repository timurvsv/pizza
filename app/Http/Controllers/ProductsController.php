<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Kind;
use App\Models\Size;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{


    private $builder;

    public function index(Request $request)
    {
        $value = $request->has('searchTitle') ? $request->get('searchTitle') : '';
        $order = $request->has('order') ? $request->get('order') :"ASC";
        $activeCategory = $request->has('category') && $request->get('category') != 'all'
            ? Category::find($request->get('category')) : null;

        $kinds = Kind::all();
        $categories = Category::all();
        $products = Product::query();

        if($activeCategory) {
            $products = $products->where('category_id', $activeCategory->id);
        }
        if ($value) {
            $products = $products->where('name', 'LIKE', "%" . $value . "%");
        }

        $products = $products->orderBy('price', $order)->get();

        return view('index', compact('products', 'kinds', 'categories', 'activeCategory', 'order', 'value'));
    }
    public function show_data_product(Request $request)
    {
        $products = Product::query()->where(['id' => $request->id])->get();
        $kinds = Kind::all();
        $categories = Category::all();

        return view('show', compact('products', 'kinds', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $sizes = Size::all();
        return view('admin.products.create', compact('categories', 'sizes'));
    }
    public function store (Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->text = $request->text;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
//        $product->size_id = $request->size_id;
        $product->image = $request->image->store('/image');
        $product->save();

        return redirect()->route('admin_product');
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);

        return view('admin.products.edit', compact('categories', 'product'));
    }
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->text = $request->text;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = $request->image->store('/image');
        $product->save();

        return redirect()->route('admin_product');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin_product', compact('product'));
    }



}



