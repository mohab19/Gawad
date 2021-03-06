<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Illuminate\Support\Facades\Storage;
use App\subCategory;

class CategoryController extends Controller
{

    public function show(Request $request) {
      $categories = Category::all();
      if($request->ajax()){
         return response()->json($categories, 200);
      }
      return view('/Categories', ['categories' => $categories]);
    }

    public function create($cat_id) {
      $category = Category::where('id', $cat_id)->first();
      $subCategories = subCategory::where('cat_id', $cat_id)->get();
      return view('Category', ['category' => $category, 'subCategories' => $subCategories]);
    }

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

    public function update(Request  $request, $id) {
      try {
        Category::where('id', $id)->update(['name' => $request->name, 'caption' => $request->caption]);
        $message = 'Successfully Updated!';
      } catch (\Exception $e) {
        $message = 'something went wrong, Please try again later!';
      }

      return back()->with(['message' => $message]);
    }

    public function destroy(Request $request, $cat_id) {
      try {
        $category = Category::where('id', $cat_id)->first();
        $dir = '\public\Category\\' . $category->id;
        $file = Storage::deleteDirectory($dir);
        $category->delete();
        $message = 'Successfully Deleted!';
      } catch (\Exception $e) {
        dd($e);
        $message = 'something went wrong, Please try again later!';
      }
      if($request->ajax()) {
         return response()->json($category, 200);
      }

      return back()->with(['message' => $message]);
    }

}
