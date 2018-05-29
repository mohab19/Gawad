<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\URL;
use Image;
use App\Slide;


class AboutPanelController extends Controller
{
      public function __construct()
      {
          $this->middleware('auth');
      }

      public function index()
      {
          $slides = Slide::all();
          return view('about')->withSlides($slides);
      }

      public function create()
      {
          //
      }

      public function store(HomeRequest $request)
      {  try
          {
              if($request->hasFile('imgPath'))
              {
                  $image = $request->file('imgPath');
                  $fileName = $request->name;
                  $fullName = time() . $fileName . ".jpg";
                  $imgFinal = Image::make($image->getRealPath())->resize(200,200);
                  $imgFinal->save('img/' . $fullName);
                  $path = 'img/' . $fullName;

                  Slide::create([
                    'flag' => $request->flag,
                    'name' => $fileName,
                    'caption' => $request->caption,
                    'disc' => $request->disc,
                    'imgPath' => $path
                    ]);
                session()->flash('flash_message' ,'Your slides has been added successfully.');
              }
          }
          catch(\Exception $e) {
              dd($e);
          }
          return redirect()->route('about.index');
      }
      public function storeOne(HomeRequest $request , $flag)
      {  try
          {
            $flagCount = Slide::where('flag', $flag)->count();
            if( $flagCount == 0 )
            {
              if($request->hasFile('imgPath'))
              {
                  $image = $request->file('imgPath');
                  $fileName = $request->name;
                  $fullName = time() . $fileName . ".jpg";
                  $imgFinal = Image::make($image->getRealPath())->resize(200,200);
                  $imgFinal->save('img/' . $fullName);
                  $path = 'img/' . $fullName;

                  Slide::create([
                    'flag' => $request->flag,
                    'name' => $fileName,
                    'caption' => $request->caption,
                    'disc' => $request->disc,
                    'imgPath' => $path
                    ]);
                session()->flash('flash_message' ,'Your slide has been added successfully.');
              }
            }else{
              session()->flash('flash_message' ,'You already have an image ,Delete it to add new one');
            }
          }
          catch(\Exception $e) {
              dd($e);
          }
          return redirect()->route('about.index');
      }

      public function show($id)
      {
          //
      }

      public function edit($id)
      {
          //
      }

      public function update(UpdateRequest $request, $id)
      {
            try {
                  Slide::where('id' , $id )->update([
                    'name'    => $request->name,
                    'caption' => $request->caption,
                    'disc'    => $request->disc
                  ]);
                  session()->flash('flash_message' ,'Your slides has been updated successfully.');
              } catch (\Exception $e) {
                  dd($e);
              }
              return redirect()->route('about.index');
      }


      public function destroy($id)
      {
        $slide = Slide::find($id);
        unlink(public_path() . "/" . $slide->imgpath);
        $slide->delete();
        session()->flash('flash_message' ,'Your slides has been deleted successfully.');
        return redirect()->route('about.index');
    }

}
