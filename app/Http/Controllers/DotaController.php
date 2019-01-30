<?php

namespace App\Http\Controllers;

use App\Dota;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
class DotaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dotas = Dota::all();
        return view('dota',[
            'homea' => Dota::orderBy('user_id'==1, 'home')            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
  //return view('dota.create');
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
 $request->user()->dota()->create([
    'home' => $request->home,
    'street' => $request->street,
    'city' => $request->city,
    'country' => $request->country,
  ]);
$request->session()->put('homea', $request->home);
$request->session()->put('streeta', $request->street);
$request->session()->put('citya', $request->city);
$request->session()->put('countrya', $request->country);

 return redirect()->route('dotb') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dota  $dota
     * @return \Illuminate\Http\Response
     */
    public function show(Dota $dota)
    {
         $dotas = Dota::all();
        return view('dao',[
           'dotas' =>$dotas  

        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dota  $dota
     * @return \Illuminate\Http\Response
     */
    public function edit(Dota $dota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dota  $dota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dota $dota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dota  $dota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dota $dota)
    {
        //
    }
    public function daoa()
    {
        $dotas = Dota::all();
        return ['dotas' =>$dotas];
    }
}
