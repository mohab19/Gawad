<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function store(CategoryRequest $request) {

      try {
        Category::create($request->all());
        $lastRec = Category::latest()->first();
        $dir = '\public\Category' . '\\' . $lastRec->id;
        $file = Storage::makeDirectory($dir, 0775, true);
        $message = 'Category Added Successfuly!';
      } catch (\Exception $e) {
        $message = 'Something went Wrong, Please try again later!';
      }
      if($request->ajax()){
         return response()->json($lastRec, 200);
      }
      return view('/Categories');
    }
}
