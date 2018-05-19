<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function home()
  {
      $slides = Slide::all();
      return view('main')->withSlides($slides);
  }
}
