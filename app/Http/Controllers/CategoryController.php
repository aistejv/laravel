<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(){
    $categories = Category::all();
    return view('categories.index', compact('categories'));
  }

  public function show($id){
    $category = Category::find($id);
    return view('categories.category', compact('category'));
  }

  public function delete($id){
    $category = Category::findorfail($id)->delete();
    return redirect()->route('all.categories')->with('success', 'Category deleted successfully!');
  }

  public function edit($id){
    $category = Category::find($id);
    return view('categories.edit', compact('category'));
  }

  public function update($id, Request $request){
    $category = Category::find($id);
    $category->update([
      'name' => $request->input('name'),
    ]);
    return redirect()->route('all.categories')->with('success', 'Category updated successfully!');
  }
}
