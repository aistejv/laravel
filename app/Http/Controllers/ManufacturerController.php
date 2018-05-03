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
}
