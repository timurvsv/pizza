<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
//         $product = Product::find('image', 'name', 'sixe', 'rind', 'price' );
//         $product = $info;
//         if ( $product = $info)
//         {
//             $product = $info->where('image', 'name', 'sixe', 'rind', 'price' );
//         }
//

        return view('cart');
    }


//    public function delete()
//    {
//        $products = Product::all();
//        $products->delete;
//        redirect()->back('cart', compact('products'));
//    }
}
