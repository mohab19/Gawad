<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\URL;
use Image;
use Session;

use App\Slide;

class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();
        return view('home')->withSlides($slides);
    }


    public function addslide(){




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
    public function store(HomeRequest $request)
    {  try
        {
            if($request->hasFile('imgPath'))
            {

                $image = $request->file('imgPath');
                $fileName = $request->name;
                $fullName = $fileName . ".jpg";
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
                session()->flash('message' ,'Your slide has been added successfully.');
            }
        }
        catch(\Exception $e) {
            dd($e);
        }

        $slides = Slide::all();
        return view('home')->withSlides($slides);
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
    public function update(UpdateRequest $request, $id)
    {
          try {
                Slide::where('id' , $id )->update([
                  'name'    => $request->name,
                  'caption' => $request->caption
                ]);
                session()->flash('message' ,'Your slides has been updated successfully.');
            } catch (\Exception $e) {
                dd($e);
            }

            return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $slide = Slide::find($id);
      unlink(public_path() . "/" . $slide->imgpath);
      $slide->delete();
      session()->flash('message' ,'Your slides has been deleted successfully.');

      return redirect()->route('home.index');
    }
}
