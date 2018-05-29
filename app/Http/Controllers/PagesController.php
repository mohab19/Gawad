<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function home()
  {
      $slides = Slide::all();
      $sliders = Slide::where('flag',1)->get();
      $SlidersCount = Slide::where('flag',1)->count();
      $categoryCount = Slide::where('flag',2)->count();
      $productOneCount = Slide::where('flag',3)->count();
      $productTwoCount = Slide::where('flag',5)->count();
      $productThreeCount = Slide::where('flag',6)->count();
      return view('main',compact( 'SlidersCount','sliders' ,'categoryCount','productOneCount','productTwoCount','productThreeCount'))->withSlides($slides);
  }


  public function about()
  {
      $slides = Slide::all();
      $downslider1 = Slide::where('flag',12)->take(8)->get();
      $downslider2 = Slide::where('flag',12)->skip(8)->take(8)->get();
      $ceoCount = Slide::where('flag',7)->count();
      $productionCount = Slide::where('flag',8)->count();
      $designOneCount = Slide::where('flag',9)->count();
      $designTwoCount = Slide::where('flag',10)->count();
      $manfactureCount = Slide::where('flag',11)->count();
      $downSliderCount = Slide::where('flag',12)->count();
      return view('gabout', compact( 'downSliderCount', 'downslider1' ,'downslider2','ceoCount','productionCount','designOneCount' ,'designTwoCount' , 'manfactureCount'))->withSlides($slides);
  }

}
