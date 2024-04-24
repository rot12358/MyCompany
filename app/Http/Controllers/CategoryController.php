<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategory(){
        $categories = Category::all();
        return view('categories.ListCategory', compact('categories'));
    }
    public function show($id)
    {
        $categories = Category::find($id);
        return view('categories.show',['categories' => $categories,'title'=>$categories->title]);
    }
}
