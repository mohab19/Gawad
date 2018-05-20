<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\subCategoryRequest;
use App\subCategory;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Product;
use App\Family;

class subCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($subCat_id)
    {
      $subCategory = subCategory::where('id', $subCat_id)->first();
      $category = Category::where('id', $subCategory->cat_id)->first();
      $products = Product::where('subCat_id', $subCat_id)->get();
      $families = Family::all();
      return view('subCategory', ['category' => $category, 'subCategory' => $subCategory, 'products' => $products, 'families' => $families]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {
        subCategory::create($request->all());
        $lastRec = subCategory::latest()->first();
        $dir = '\public\Category' . '\\' . $lastRec->cat_id . '\\' . $lastRec->id;
        $file = Storage::makeDirectory($dir, 0775, true);
        $message = 'Category Added Successfuly!';
      } catch (\Exception $e) {
        $message = 'Something went Wrong, Please try again later!';
      }
      if($request->ajax()){
         return response()->json($lastRec, 200);
      }
      return back()->with(['message' => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $subCat_id) {
      try {
        $subCategory = subCategory::where('id', $subCat_id)->first();
        $dir = '\public\Category\\' . $subCategory->cat_id . '\\' . $subCategory->id;
        $file = Storage::deleteDirectory($dir);
        $subCategory->delete();
        $message = 'Successfully Deleted!';
      } catch (\Exception $e) {
        dd($e);
        $message = 'something went wrong, Please try again later!';
      }
      if($request->ajax()) {
         return response()->json($subCategory, 200);
      }

      return back()->with(['message' => $message]);
    }
  }
