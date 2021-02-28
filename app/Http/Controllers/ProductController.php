<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreFormRequest;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'title' => 'Testig mail',
            'content' => 'This is the testing of mailgun.'
        ];

        Mail::send('email.mail', $data, function ($message){
            $subject = 'JUST TESTING';
            $email = 'kyawlinntun100@gmail.com';
            $username = 'kyawlinntun';
            $message->to($email, $username)->subject($subject);
        });

        ///* -------- Start of Multiple File Upload -------- */
        //$files = $request->file('img');
        //$filenames = [];
        //
        //foreach ($files as $file)
        //{
        //    $filename = uniqid() . '_' . $file->getClientOriginalName();
        //    array_push($filenames, $filename);
        //    $path = public_path() . '/uploads/';
        //    $file->move($path, $filename);
        //}
        //
        //Product::create([
        //    'title' => $request->get('title'),
        //    'price' => $request->get('price'),
        //    'description' => $request->get('description'),
        //    'imgs' => serialize($filenames),
        //]);
        //
        return redirect('/products/create')->with('status', 'Successfully inserted data!');

        /* -------- End of Multiple File Upload -------- */

        ///* -------- Start of File Upload -------- */
        //$file = $request->file('img');
        //$filename = uniqid() . '_' . $file->getClientOriginalName();
        //$path = public_path(). '/uploads/';
        //$file->move($path, $filename);
        ///* -------- End of File Upload -------- */
        //
        //Product::create([
        //    'title' => $request->get('title'),
        //    'price' => $request->get('price'),
        //    'description' => $request->get('description'),
        //    'imgs' => $filename,
        //]);
        //
        //return redirect('/products/create')->with('status', 'Successfully inserted data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
