<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutRequest;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\subCategory;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutRequest $request)
    {
      try {    
        if ($request->hasFile('path')) {
              $subCategory = subCategory::where('id', $request->subCat_id)->first();
              $image = $request->file('path');
              $fileName = $request->name;
              $fullName = $fileName . ".jpg";
              $image_resize = Image::make($image->getRealPath());
              $image_resize->resize(300, 300);
              $image_resize->save(storage_path() . '/app/public/Category/' . $subCategory->cat_id . '/' . $request->subCat_id . '/' . $fullName);
              $path = 'storage/Category/' . $subCategory->cat_id . '/' . $request->subCat_id . '/' . $fullName;
              $message = 'Image Added Successfuly!';
          }
          Product::create([
              'subCat_id' => $request->subCat_id,
              'family_id'=> $request->family_id,
              'path' => $path,
              'name' => $fileName,
              'caption' => $request->caption
          ]);
      } catch (\Exception $e) {
        dd($e);
        $message = 'Something went Wrong, Please try again later!';
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
    public function destroy(Request $request, $Pid) {
      try {
        $product = Product::where('id', $Pid)->first();
        $subCategory = subCategory::where('id', $product->subCat_id)->first();
        $dir = '\public\Category\\' . $subCategory->cat_id . '\\' . $subCategory->id . '\\' . $product->name . '.jpg';
        $file = Storage::delete($dir);
        $product->delete();
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
