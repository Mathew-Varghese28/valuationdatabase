<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productmodel;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=productmodel::all();
        return view('viewallproduct',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getpcode=request('pcode');
        $getpname=request('pname');
        $getpdes=request('pdes');
        $getpprice=request('pprice');
        $getpdist=request('pdist');
        $getpmanu=request('pmanu');
        $getpexp=request('pexp');
        


        echo  $getpcode;
        echo "<br>";
        echo $getpname;
        echo "<br>";
        echo $getpdes;
        echo "<br>";
        echo $getpprice;
        echo "<br>";
        echo $getpdist;
        echo "<br>";
        echo $getpmanu;
        echo "<br>";
        echo $getpexp;

        $product=new productmodel();

        $product->pcode=$getpcode;
        $product->pname=$getpname;
        $product->pdes=$getpdes;
        $product->pprice=$getpprice;
        $product->pdist=$getpdist;
        $product->pmanu=$getpmanu;
        $product->pexp=$getpexp;


        $product->save();


    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function search(Request $request)
    {
        $getpcode=request('pcode');
        $products=productmodel::query()
        ->where('pcode','LIKE',"%{$getpcode}%")
        ->get();
        return view('viewallproduct',compact('products'));
    }
}

