<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function admin_data_product()
    {
        $products = Product::all();
        $category = Category::all();

        return view('admin.products.index', compact('products', 'category'));
    }




}
