<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', [
            'products' => $products
        ]);
    }

    public function addCart(Request $request, $cart)
    {
        /* -------- Start of Cart -------- */
        $items = [];

        if($request->session()->has('items'))
        {
            $items = $request->session()->get('items');

            if(!in_array($cart, $items))
            {
                array_push($items, $cart);
            }
        } else {
            array_push($items, $cart);
        }

        $request->session()->put('items', $items);
        //$request->session()->flush();
        /* -------- End of Cart -------- */

        $products = Product::all();
        return view('home', [
            'products' => $products
        ]);
    }

    public function showCart(Request $request)
    {
        $carts = $request->session()->get('items');

        $products = [];

        for($i = 0; $i < count($carts); $i++)
        {
            $product = Product::findOrFail($carts[$i]);

            array_push($products, $product);
        }

        return view('cart', [
            'products' => $products
        ]);
    }
}


























