<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FamilyRequest;
use App\Family;
use App\Product;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $families = Family::all();
        return view('families', ['families' => $families]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $family = Family::where('id', $id)->first();
      $products = Product::where('family_id', $id)->get();
      return view('family', ['family' => $family, 'products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamilyRequest $request)
    {
      try {
        Family::create($request->all());
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
      try {
        Family::where('id', $id)->update(['name' => $request->name, 'caption' => $request->caption]);
        $message = 'Successfully Updated!';
      } catch (\Exception $e) {
        $message = 'something went wrong, Please try again later!';
      }

      return back()->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
