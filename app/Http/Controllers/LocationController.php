<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;


class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $locations = Location::latest()->paginate(10);
         return view('locations.index', compact('locations'))->with('i',(request()->input('page',1) -1) *10);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('locations.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       request() -> validate([
         'name' => 'required',

         'location' => 'required',
         'town' => 'required',
         ]);
         Location::create($request->all());
         return redirect() ->route('locations.index')->with('success'.'Created');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $location = Location::find($id);
         return view('locations.show',compact('location'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $location = Location::find($id);
       return view('locations.edit', compact('location'));
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
       request() -> validate([
         'name' => 'required',

         'location' => 'required',
         'town' => 'required',
         ]);
         Location::find($id)->update($request->all());
         return redirect() ->route('locations.index')->with('success'.'Info Updated');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         Location::find($id)->delete();
         return redirect()->route('locations.index')->with('success','deleted');
     }
 }
