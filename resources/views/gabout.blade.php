@extends('layouts.about-page')
@section('content')

<div class="container">
 <br /><br /><br /><br /><br /><br />
   <div class="row">
    <div class="col-md-12"><img src="images/new.png" width="100%" height="400px"></div>
    </div>
    <br />

    <div class="row bg_sty">
      @if ($ceoCount == 1 )
      @foreach ($slides as $slide)
      @if( $slide->flag == 7 )
       <div class="col-md-8">
         <br>
           <h2>{{$slide->name}}</h2>
           <p>{{$slide->disc}}</p>
        </div>
        <div class="col-md-4"><br><img src="{{$slide->imgpath}}" width="90%" height="300px"><p>AHMED ADB ELGAWAD</p></div>
        @endif
        @endforeach
        @else
        <div class="row bg_sty">
       <div class="col-md-8">
         <br>
           <h2>68 YEARS OF EXPERIENCE<br>THE HIGHEST QUALITY SINCE 1950</h2>
           <p>our company was started 1950 in asmall production workshop in cairo from the begining ,our mission was to make households more innovative,and to improve the quality of life of the people in our community.our family company grew quickly as we deveopled aseries of pratctical ideas and innovative solutions for kitchen and bathrooms having prcticed and re ned our craft over many years,<br>we now combine these trditions<br>with modern materials and tecnology  </p>
        </div>
        <div class="col-md-4"><br>
            <img src="aboutimg/Screen%20Shot%202018-04-11%20at%204.29.17%20PM.png" width="90%" height="300px">
        <p>AHMED ADB ELGAWAD</p>
        </div>
    </div>
        @endif
    </div>

    <!----------------->
    <br><br>
    <div class="row">
      @if($productionCount == 1 )
      @foreach($slides as $slide)
      @if ($slide-> flag == 8 )
          <div class="col-md-6"><img src="{{$slide->imgpath}}" style="height:423px; width:496px;"></div>
          <div class="col-md-6">
             <h4>{{$slide->name}}</h4>
             <p>{{$slide->disc}}</p>
          </div>
      @endif
      @endforeach
      @else
      <div class="col-md-6"><img src="aboutimg/Rectangle%2010.png"></div>
        <div class="col-md-6">
            <h4>SUSTAINABILITY ENSURING WATER EN-<br>JOYMENT FOR GENERATIONS TO COME</h4>
            <p>GAWAD professional production represents the strength of egypt sanitary!<br>GAWAD standing at the top of manufacturing tecnology.it shows the charm of creation. <br>production forms asurmounted core advantages by leadingthe most advanced au-<br>tomatic equipment and accumulating technical storge all the way.</p>
          </div>
      @endif
    </div>
     <!----------------->

    <div class="row">
      @if($designOneCount == 1)
      @foreach($slides as $slide)
      @if ($slide-> flag == 9 )
      <div class="col-md-12 bero">
          <h1 id="one"><u>OUR DESIGNS</u></h1>
          <a  href="#" class="active"><h2 id="h-p">{{$slide->name}}</h2></a>
          <img src="{{$slide->imgpath}}" style="height:356px; width:1085px;">
      </div>
      @endif
      @endforeach
      @else
      <div class="col-md-12 bero">
      <h1 id="one"><u>OUR DESIGNS</u></h1>
      <a  href="#" class="active"><h2 id="h-p">AGURE</h2></a>
      <img src="aboutimg/Rectangle%2027.png">
    </div>
      @endif
    </div>

    <br>
    <!----------------->
    <div class="row">
      @if ($designTwoCount == 1)
      @foreach($slides as $slide)
      @if ($slide-> flag == 10 )
          <div class="col-md-12 bero">
          <a  href="#" class="active">
          <h2 id="h-p1">{{$slide->name}}</h2></a>
          <img src="{{$slide->imgpath}}" style="height:356px; width:1085px;"></div>
      @endif
      @endforeach
      @else
      <div class="col-md-12 bero"><a href="#" class="active"><h2 id="h-p1">TOPAZ</h2></a>
         <img src="aboutimg/Rectangle%2027-1.png">
      </div>
      @endif
    </div>
    <!----------------->
    <br><br>

    <div class="row">
        <div class="col-md-3">
            <br>
            <img src="images/logo%20blue.png">
        <p>MANUFACTURING PROCESS</p>
        </div>
          @if ( $manfactureCount == 0)
              <div class="col-md-3"><img src="aboutimg/Rectangle%2012.png" width="100%">
                  <br>
                  <br>
                <img src="aboutimg/Rectangle%2012-3.png" width="100%">
              </div>
              <div class="col-md-3">
                <img src="aboutimg/Rectangle%2012-1.png" width="100%">
                <br>
                <br>
                <img src="aboutimg/Screen%201%20at%204.45.59%20PM%20copy.png" width="100%">
              </div>
              <div class="col-md-3"><img src="aboutimg/Rectangle 12-2.png" width="100%">
                <br>
                <br>
                <img src="aboutimg/Rectangle%2012-5.png" width="100%">
            </div>
          @else
          <div class="col-md-9">
           @foreach($slides as $slide)
           @if ($slide-> flag == 11 )
           <div class="col-md-4">
           <img src="{{$slide->imgpath}}" width="100%">
         <br>
         <br>
          </div>
            @endif
            @endforeach
          </div>
            @endif
  </div>
     <!----------------->
    <br /><br />

    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>

  <!-- The slideshow -->


  <div class="carousel-inner">
    @if($downSliderCount ==0)
    <div class="carousel-item active">
        <div class="row">
            <div class="col-md-3"><img src="aboutimg/client1.png" alt="Los Angeles"  ></div>
            <div class="col-md-3"><img src="aboutimg/client2.png" alt="Los Angeles" ></div>
            <div class="col-md-3"><img src="aboutimg/client3.png" alt="Los Angeles" ></div>
            <div class="col-md-3"><img src="aboutimg/client4.png" alt="Los Angeles" ></div>
            <br />
            <div class="col-md-3"><img src="aboutimg/client1.png" alt="Los Angeles"  ></div>
            <div class="col-md-3"><img src="aboutimg/client2.png" alt="Los Angeles" ></div>
            <div class="col-md-3"><img src="aboutimg/client3.png" alt="Los Angeles" ></div>
            <div class="col-md-3"><img src="aboutimg/client4.png" alt="Los Angeles" ></div>
        </div>

    </div>
    <div class="carousel-item">
              <div class="row">
        <div class="col-md-3"><img src="aboutimg/client1.png" alt="Los Angeles"  ></div>
            <div class="col-md-3"><img src="aboutimg/client2.png" alt="Los Angeles" ></div>
            <div class="col-md-3"><img src="aboutimg/client3.png" alt="Los Angeles" ></div>
            <div class="col-md-3"><img src="aboutimg/client4.png" alt="Los Angeles" ></div>
            <br />
            <div class="col-md-3"><img src="aboutimg/client1.png" alt="Los Angeles"  ></div>
            <div class="col-md-3"><img src="aboutimg/client2.png" alt="Los Angeles" ></div>
            <div class="col-md-3"><img src="aboutimg/client3.png" alt="Los Angeles" ></div>
            <div class="col-md-3"><img src="aboutimg/client4.png" alt="Los Angeles" ></div>
        </div>
    </div>

          @else
            @foreach( $downslider1 as $slide)
            <div class="col-md-3"><img src="{{$slide->imgpath}}" alt="{{$slide->name}}" style="padding:5px;"></div>
            @endforeach
        </div>
    </div>
    <div class="carousel-item">
              <div class="row">
              @foreach( $downslider2 as $slide)
            <div class="col-md-3"><img src="{{$slide->imgpath}}" alt="{{$slide->name}}" style="padding:5px;" ></div>
            @endforeach
            @endif
    </div>
  </div>


  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


    </div>



@endsection
