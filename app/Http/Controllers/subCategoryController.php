<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subCategoryController extends Controller
{
    public function create($cat_id)
    {
      return view('subCategory');
    }
}
