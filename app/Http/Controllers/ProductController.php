<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use DB;

class ProductController extends Controller
{
	/**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $p = DB::select("SELECT * FROM survey");

        return view('products.index',compact('p'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $p = $request->session()->get('p');

        return view('products.create-step-one',compact('p'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'company' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        if(empty($request->session()->get('p'))){
            $p = new Pelanggan();
            $p->fill($validatedData);
            $request->session()->put('p', $p);
        }else{
            $p = $request->session()->get('p');
            $p->fill($validatedData);
            $request->session()->put('p', $p);
        }

        return redirect()->route('products.create.step.two');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $p = $request->session()->get('p');

        return view('products.create-step-two',compact('p'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
    	$validatedData = $request->validate([
            'partner' => 'required',
            'why' => 'required',
        ]);

        $p = $request->session()->get('p');
        $p->fill($validatedData);
        $p->save();

        $request->session()->forget('p');

        return redirect()->route('products.index');
    }
}
