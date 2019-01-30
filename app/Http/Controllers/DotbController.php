<?php

namespace App\Http\Controllers;

use App\Dotb;
use Illuminate\Http\Request;

class DotbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          $dotbs = Dotb::all();
        return view('dotb');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
    'home' => 'required|max:255',
    'street' => 'required|max:255',
    'city' => 'required|max:255',
    'country' => 'required|max:255',
  ]);
$request->user()->dotb()->create([
    'home' => $request->home,
    'street' => $request->street,
    'city' => $request->city,
    'country' => $request->country,
  ]);
$request->session()->put('homeb', $request->home);
$request->session()->put('streetb', $request->street);
$request->session()->put('cityb', $request->city);
$request->session()->put('countryb', $request->country);
 return redirect()->route('googlemap.direction') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dotb  $dotb
     * @return \Illuminate\Http\Response
     */
    public function show(Dotb $dotb)
    {
        $dotbs = Dotb::all();
        return view('dao',[
           'dotbs' =>$dotbs  
                     
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dotb  $dotb
     * @return \Illuminate\Http\Response
     */
    public function edit(Dotb $dotb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dotb  $dotb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dotb $dotb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dotb  $dotb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dotb $dotb)
    {
        //
    }
    public function daob()
    {
        $dotbs = Dotb::all();
        return ['dotbs' =>$dotbs];
    }
}
