<?php

namespace App\Http\Controllers;
use App\Manufacturer;

use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
  public function index(){
    $manufacturers = Manufacturer::all();
    return view('manufacturers.index', compact('manufacturers'));
  }

  public function show($id){
    $manufacturer = Manufacturer::find($id);
    return view('manufacturers.manufacturer', compact('manufacturer'));
  }
  public function delete($id){
    $manufacturer = Manufacturer::findorfail($manufacturer->id)->delete();
    return redirect()->route('all.manufacturers')->with('success', 'Manufacturer deleted successfully!');
  }

  public function edit($id){
    $manufacturer = Manufacturer::find($id);
    return view('manufacturers.edit', compact('manufacturer'));
  }

  public function update($id, Request $request){

     $manufacturer = Manufacturer::find($id);
    // dd($request);
    $manufacturer->update([
    'name' => $request->input('name'),
    'country' => $request->input('country'),
  ]);
  return redirect()->route('all.manufacturers')->with('success','Manufacturer updated successfully!');
}
}
