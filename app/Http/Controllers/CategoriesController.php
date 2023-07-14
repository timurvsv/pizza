<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

public function admin_data_category()
{
    $categories =  Category::all();
        return view('admin.categories.index', compact('categories'));
}

}
