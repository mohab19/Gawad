
@extends('layouts.mainsty')
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @if (!empty($SlidersCount))
      @foreach ($sliders as $index => $slide)
      @if($slide->flag == 1)
      <li data-target="#myCarousel" data-slide-to="{{$index}}" class="@if($index == 0 ) ? 'active' : '' @endif"></li>
      @endif
      @endforeach
      @endif
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

     <?php   //$SliderCount = DB::table('slides')->where('flag',1)->count(); ?>
     @if (!empty($SlidersCount))
     @foreach ($sliders as $index => $slide)
     @if( $index == 0 )
        <div class="item active">
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-4 col-xs-6" style="padding-left:0px;padding-right:0px; ">
                    <div class="hero">
                       <h2>{{$slide->name}}</h2>
                        <h3>to series</h3>
                        <p>{{$slide->caption}}</p>
                    </div>
                </div>
                <div class="col-md-8 col-xs-6"  style="padding-left:0px;padding-right:0px; ">
                    <img src="{{$slide->imgpath}}" alt="{{$slide->name}}" style="width:100%;height:670px;">
                </div>
              </div>
            </div>
        </div>
        @else
        <div class="item">
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-4 col-xs-6" style="padding-left:0px;padding-right:0px; ">
                    <div class="hero">
                       <h2>{{$slide->name}}</h2>
                        <h3>to series</h3>
                        <p>{{$slide->caption}}</p>
                    </div>
                </div>
                <div class="col-md-8 col-xs-6"  style="padding-left:0px;padding-right:0px; ">
                    <img src="{{$slide->imgpath}}" alt="{{$slide->name}}" style="width:100%;height:670px;">
                </div>
              </div>
            </div>
        </div>
      @endif
      @endforeach
      @else <!-- as default slide   -->
      <div class="item active">
         <div class="row">
             <div class="col-md-12">
         <div class="col-md-4 col-xs-6" style="padding-left:0px;padding-right:0px; ">
             <div class="hero">
                <h2 id="ga">gawad pure fuction</h2>
                 <h3>to series</h3>
                 <p>the art of water</p>
             </div>
            </div>
         <div class="col-md-8 col-xs-6"  style="padding-left:0px;padding-right:0px; ">
             <img src="images\Rectangle2.png" alt="Los Angeles" style="width:100%;height:670px;">
             </div>
         </div>
             </div>
       <div class="carousel-caption">

       </div>
     </div>
      @endif
</div>

    <!-- Left and right controls -->

    <a class="left carousel-control"  href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

    </div>

    <!----------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------->
    <br />


    <center>
<div class="row imge">
    <!--<div class="container">-->

    <div class=" col-lg-3 col-md-6">
        <div class="container_img1">
        <img src="images/p1.png"  class="image">
        <div class="overlay">

            <a href="#" class="active">KITCHEN</a>



  </div>
        </div>
    </div>

           <div class="col-lg-3 col-md-6">
        <div class="container_img1">
        <img src="images/p1.png"  class="image">
        <div class="overlay">
   <a href="#" class="active">BATH</a>
  </div>
        </div>
    </div>

           <div class="col-lg-3 col-md-6">
        <div class="container_img1">
        <img src="images/p1.png"  class="image">
        <div class="overlay">
   <a href="#" class="active">SHOWER</a>
  </div>
        </div>
    </div>

           <div class="col-lg-3 col-md-6">
        <div class="container_img1">
        <img src="images/p1.png"  class="image">
        <div class="overlay">
   <a href="#" class="active">MIXER</a>
  </div>
        </div>
    </div>


     <!-- </div> -->
    </div>
 </center>
    <br /><br />
    <!----------------------------------------------------------------------------------->
        <!----------------------------------------------------------------------------------->

    <div class="row">
      @if( $categoryCount == 1 )
      @foreach($slides as $slide)
      @if ($slide -> flag == 2)
         <div class="col-md-6"><div class="herox">
             <h2>{{$slide->name}}</h2>
             <p>{{$slide->disc}}</p>
             </div>

        </div>
        <div class="col-md-6"><img src="{{$slide->imgpath}}" width="100%" height="500px"></div>
      @endif
      @endforeach
      @else
      <div class="col-md-6"><div class="herox">
             <h2>GAWAD is specialist for bathroom and <br>kitchengawad is specialist for bathroom <br>ana kitchen fitings,shower head,<br>bathroom accessories</h2>
             <p>GAWAD is specialist for bathroom and <br>kitchengawad is specialist for bathroom <br>ana kitchen fitings,shower head,<br>bathroom </p>
             </div>
        </div>
        <div class="col-md-6"><img src="images/Layer%206.png" width="100%" height="500px"></div>
      @endif
    </div>

        <!----------------------------------------------------------------------------------->
    <div class="row">
    <div class="col-md-12">
        <br >
        <center class=ourpro_sty>
        <h4 >Our<br >Product</h4>
        <img src="images/logo%20blue.png">
        </center>
        <br /><br />
        </div>

    </div>
    <!----------------------------------------------------------------------------------->
    <div class="row" >
        <div class="col-md-12">
          @if($productOneCount == 1 )
          @foreach($slides as $slide)
          @if ($slide->flag == 3)
            <img src="{{$slide->imgpath}}" style="height:361; width:674.5px;">
            @endif
            @endforeach
            @else
            <div class="col-md-12"><img src="images/Rectangle%2010.png" width="50%"></div>
            @endif
        </div>
    </div>

    <div class="row" >
        <div class="col-md-12 rec">
          @if($productTwoCount == 1)
            @foreach($slides as $slide)
            @if ($slide->flag == 5)
            <img src="{{$slide->imgpath}}" style="height:516px; width:809.39px;" >
            @endif
            @endforeach
            @else
            <img src="images/Rectangle%2010-1.png" style="height:516px; width:809.39px;" >
            @endif


            @if($productOneCount == 1 )
            @foreach($slides as $slide)
            @if ($slide->flag == 3)
             <a href="#" class="active1">{{$slide->name}}
             <p>{{$slide->caption}}</p></a>
             @endif
             @endforeach
             @else
             <a href="#" class="active1">Gawad Mixer<p>news letter</p></a>
             @endif



             @if($productTwoCount == 1)
             @foreach($slides as $slide)
             @if ($slide->flag == 5)
             <a href="#" class="active3">{{$slide->name}}<p>{{$slide->caption}}</p></a>
             @endif
             @endforeach
             @else
             <a href="#" class="active3">Shower<p>news letter<br />news letter</p></a>
             @endif
         </div>
    </div>

    <div class="row" >
        <div class="col-md-12 rec1">
            @if( $productThreeCount == 1)
            @foreach($slides as $slide)
            @if ($slide->flag == 6)
            <img src="{{$slide->imgpath}}" style="height:313px; width:674px;">
            <a href="#" class="active2">{{$slide->name}}<p>{{$slide->caption}}</p></a>
            @endif
            @endforeach
            @else
            <img src="images/Rectangle%2010-2.png" width="50%">
            <a href="#" class="active2">Purified water<p>news letter</p></a>
            @endif
        </div>
    </div>
    <!----------------------------------------------------------------------------------->
    <div class="container2">
        <div class="row">
        <div class="col-md-12"><h1  id="app">Contemporary.<br> Refreshing.<br> Innovative</h1>
            <h2 id="texta">Revolutionary bath fittings</h2>
            <img src="images/lavador05.png">
            </div>
            </div>

        <div style="overflow:hidden; padding:70px 0 30px;">


  <div class="row1">

    <div class="col1 lrg-12">

        <div class="slider-wrap">
          <div class="slider">
            <div class="outer">
              <div class="tray">

                <section id="all-articles" style="left:-100%;padding-right:10%; "><img src="images/p1.png">
                    <p style=" position: absolute;margin-top: 126px;">Mixer</p></section>

                <section id="featured-articles" style="left:0%;padding-right:10%;" class="current"><img src="images/Rectangle%206-2.png"><p style=" position: absolute;margin-top: 126px;">Mixer</p></section>
                <section id="popular-articles" style="left:100%;padding-right:10%;"><img src="images/Rectangle%206-3.png">
                  <p style=" position: absolute;margin-top: 126px;">Mixer</p></section>
                <!--<section id="new-articles" style="left:200%;"><img src="images/p1.png"></section>-->
              </div>
            </div>
            <div class="mask left">
              <a href="#" class="arrow left"><span></span></a>
            </div>
            <div class="mask right">
              <a href="#" class="arrow right"><span></span></a>
            </div>
          </div>
          <nav class="slider-nav">
            <ul>
              <li class="current"><a href="#featured-articles">.</a></li>
              <li><a href="#popular-articles">.</a></li>
              <!--<li><a href="#new-articles">ppppppppppp</a></li>-->
              <li><a href="#all-articles">.</a></li>

            </ul>
            <span class="highlight"></span>
          </nav>
        </div>

      </div>

  </div>
</div>



</div>
@endsection
