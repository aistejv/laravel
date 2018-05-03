<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreProductRequest;
use App\Product;
use App\Manufacturer;
use App\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function main(){
    $products = Product::all()->take(3);
    return view('welcome', compact('products'));
  }

  public function index(){
    $products = Product::all();
    return view('products.products', compact('products'));
  }

  public function show($id){
    $product = Product::find($id);
    return view('products.product', compact('product'));
  }

  public function create(){
    $manufacturers = Manufacturer::all();
    $categories = Category::all();
    return view('products.create', compact('manufacturers', 'categories'));
  }

  public function store(StoreProductRequest $request){
    // dd($request);
    //budas 1
    // $product = new Product();
    // $product->title = $request->title;
    // $product->description = $request->description;
    // $product->price = $request->price;
    // $product->manufacturer_id = $request->manufacturer_id;
    // $product->category_id = $request->category_id;
    // $product->quantity = $request->quantity;
    // $product->image_url = $request->image_url;
    // $product->save();
    //
    // return redirect()->route('all.products');

    //Validacija
    //1
    // $this->validate($request,[
    //   'title' => 'required'
    // ])
    //2
    // $request->validate([
    //   'title' => 'required',
    //   'description' => 'required',
    //   'price' => 'required|numeric',
    //   'quantity' => 'required|numeric',
    //   'image_url' => 'required',
    // ]);
    //budas 2
    // dd($request);
    Product::create([
      'title' => $request->input('title'),
      'description' => $request->input('description'),
      'price' => $request->input('price'),
      'manufacturer_id' => $request->input('manufacturer_id'),
      'category_id' => $request->input('category_id'),
      'quantity' => $request->input('quantity'),
      'image_url' => $request->input('image_url'),
    ]);
  return redirect()->route('all.products')->with('success','Product added successfully!');
  //arba
  //$request->session()->flash('status', 'Task was successful!');
    }

    public function delete(Product $product){
      Product::findorfail($product->id)->delete();
      return redirect()->route('all.products')->with('success', 'Product deleted successfully!');

    }

    public function edit(Product $product){
      $manufacturers = Manufacturer::all();
      $categories = Category::all();
      return view('products.edit', compact('product','manufacturers','categories'));
    }

    public function update(StoreProductRequest $request, Product $product){
      $product->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'price' => $request->input('price'),
        'manufacturer_id' => $request->input('manufacturer_id'),
        'category_id' => $request->input('category_id'),
        'quantity' => $request->input('quantity'),
        'image_url' => $request->input('image_url'),
      ]);
      return redirect()->route('all.products')->with('success','Product updated successfully!');
    }
}
