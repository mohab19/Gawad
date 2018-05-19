
@extends('layouts.header')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Edit Home Page</li>
      </ol>

      <div class="row">
        <div class="col-lg-12">
          @if ($flash= session('message') )
          <div id="flashmsg" class="alert alert-success" role="alert">
              {{ $flash }}
          </div>
          @endif
          <!-- ////////////////////////////for slider part only  //////////////////////////////////////////-->
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Slider <input type="button" value="Add New Slide" style="float:right;margin-top: -10px;width: 13%;" class="btn btn-primary" data-toggle="modal" data-target="#myModal_99">
          </div>
            <!-- The Modal -->
              <div class="modal fade" id="myModal_99">
              <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Add New Slide</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <form method="POST" id="modal_99" name="modal_8" action="{{ route('home.store') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}?" >
                  <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" >
                  </div>
                  <div class="form-group">
                    <label>Caption:</label>
                    <input type="text" class="form-control" id="caption" placeholder="Enter Caption" name="caption">
                  </div>
                  <div class="form-group">
                    <label>Upload Image:</label>
                    <input type="file" class="form-control" id="path" placeholder="Enter Caption" name="imgPath">
                  </div>
                  <div class="form-group">
                    <input type="text" name="flag" value="1" style="display:none">
                  <!--  <input type="text" name="disc" value="..." style="display:none"> -->
                  </div>
                  <input type="submit" value="Save" class="btn btn-success " >
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                  <br>
                  @include('layouts.errors')
                </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </div>
              </div>
              </div><!--end model-->

          <hr class="mt-2">

          <div class="row">
            @foreach( $slides as $index => $slide)
            @if(($slide->flag) == 1)

          <div class="col-lg-3">
          <div class="panel panel-primary" style="border: 3px solid #337ab7;">
          <div class="panel-heading">{{$slide->name}}</div>
          <div class="panel-body"><img src="{{$slide->imgpath}}"></div>
          <div class="panel-footer">{{$slide->caption}}</div>
          <div class="panel-footer">

         <div class="form-group" >
               <input type="button" value="edit"  class="btn btn-success" data-toggle="modal" data-target="#myModal_{{$index}}">
               <form method="post" action="{{  route('home.destroy' , $slide->id ) }}">
      					<input type="hidden" name="_method" value="Delete">
      					<input type="submit" value="Delete" class="btn btn-danger">
      					<input type="hidden" name="_token" value="{{ csrf_token() }}">
      				</form>

               <!-- The Modal -->
                 <div class="modal fade" id="myModal_{{$index}}">
                 <div class="modal-dialog">
                   <div class="modal-content">
                   <!-- Modal Header -->
                   <div class="modal-header">
                     <h4 class="modal-title">Edit Slide</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <!-- Modal body -->
                   <div class="modal-body">
                     <form method="POST" action="{{ route('home.update' , $slide->id ) }}" >
                       <input type="hidden" name="_method" value="PATCH">
                     <div class="form-group">
                       <label>Title:</label>
                       <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" value="{{$slide->name}}" >
                     </div>
                     <div class="form-group">
                       <label>Caption:</label>
                       <input type="text" class="form-control" id="caption" placeholder="Enter Caption" name="caption" value="{{$slide->caption}}" >
                     </div>

                     <input type="submit" value="Save" class="btn btn-success " >
                     <input type="hidden" name="_token" value="{{ Session::token() }}">
                     <br>
                     @include('layouts.errors')
                   </form>
                   </div>
                   <!-- Modal footer -->
                   <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                   </div>

                   </div>
                 </div>
                 </div><!--end model-->
             </div>
           </div>
         </div>
      </div>
         @endif
         @endforeach
 </div>


	  <!--//////////////////// end of slider part  //////////////////////////////////////////////////////->
    </div>
    <!- // /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>


@endsection
