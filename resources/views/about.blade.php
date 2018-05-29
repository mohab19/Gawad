@extends('layouts.header')
@section('content')



 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/home">Home</a>
        </li>
        <li class="breadcrumb-item active">Edit About Page</li>
      </ol>
      <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
      <div class="row">
        <div class="col-lg-12">
          @if ($flash_message= session('flash_message') )
          <div id="flashmsg" class="alert alert-success" role="alert">
              {{ $flash_message }}
          </div>
          @endif
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> CEO Word <input type="button" value="Add Experience" style="float:right;margin-top: -10px;width: 13%;" class="btn btn-primary" data-toggle="modal" data-target="#myModal_200">
          </div>
            <!-- The Modal -->
              <div class="modal fade" id="myModal_200">
              <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Add Experience</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <form method="POST" id="modal_200" name="modal_8" action="{{ route('about.storeOne' , 7 ) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}?" >
                  <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" >
                  </div>
                  <div class="form-group">
                    <label>Description:</label>
                    <input type="text" class="form-control" id="caption" placeholder="Enter Caption" name="disc">
                  </div>
                  <div class="form-group">
                    <label>Upload Image:</label>
                    <input type="file" class="form-control" id="path" placeholder="Enter Caption" name="imgPath">
                  </div>
                  <div class="form-group">
                    <input type="text" name="flag" value="7" style="display:none">
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
            @if(($slide->flag) == 7)
          <div class="col-lg-3">
          <div class="panel panel-primary" style="border: 3px solid #337ab7;">
          <div class="panel-heading">{{$slide->name}}</div>
          <div class="panel-body"><img src="{{$slide->imgpath}}"></div>
          <div class="panel-footer">{{$slide->disc}}</div>
          <div class="panel-footer">

         <div class="form-group" style="display:inline-flex;" >
               <input type="button" value="edit"  class="btn btn-success" data-toggle="modal" data-target="#myModal_{{$index}}">
               <form method="post" action="{{  route('about.destroy' , $slide->id) }}">
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
                     <h4 class="modal-title">Edit Experience</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <!-- Modal body -->
                   <div class="modal-body">
                     <form method="POST" action="{{ route('about.update' , $slide->id ) }}" >
                       <input type="hidden" name="_method" value="PATCH">
                     <div class="form-group">
                       <label>Title:</label>
                       <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" value="{{$slide->name}}" >
                     </div>
                     <div class="form-group">
                       <label>Description:</label>
                       <input type="text" class="form-control" id="caption" placeholder="Enter Caption" name="disc" value="{{$slide->disc}}" >
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
        </div>
        </div>
        <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div class="row">
          <div class="col-lg-12">
            <!-- Card Columns Example Social Feed-->
            <div class="mb-0 mt-4">
              <i class="fa fa-newspaper-o"></i> Production <input type="button" value="Add Production" style="float:right;margin-top: -10px;width: 13%;" class="btn btn-primary" data-toggle="modal" data-target="#myModal_201">
            </div>
              <!-- The Modal -->
                <div class="modal fade" id="myModal_201">
                <div class="modal-dialog">
                  <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Add Production</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form method="POST" id="modal_201" name="modal_8" action="{{ route('about.storeOne' , 8) }}" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}?" >
                    <div class="form-group">
                      <label>Title:</label>
                      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" >
                    </div>
                    <div class="form-group">
                      <label>Description:</label>
                      <input type="text" class="form-control" id="caption" placeholder="Enter Caption" name="disc">
                    </div>
                    <div class="form-group">
                      <label>Upload Image:</label>
                      <input type="file" class="form-control" id="path" placeholder="Enter Caption" name="imgPath">
                    </div>
                    <div class="form-group">
                      <input type="text" name="flag" value="8" style="display:none">
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
              @if(($slide->flag) == 8)
            <div class="col-lg-3">
            <div class="panel panel-primary" style="border: 3px solid #337ab7;">
            <div class="panel-heading">{{$slide->name}}</div>
            <div class="panel-body"><img src="{{$slide->imgpath}}"></div>
            <div class="panel-footer">{{$slide->disc}}</div>
            <div class="panel-footer">

           <div class="form-group" style="display:inline-flex;" >
                 <input type="button" value="edit"  class="btn btn-success" data-toggle="modal" data-target="#myModal_{{$index}}">
                 <form method="post" action="{{  route('about.destroy' , $slide->id) }}">
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
                       <h4 class="modal-title">Edit Production</h4>
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <!-- Modal body -->
                     <div class="modal-body">
                       <form method="POST" action="{{ route('about.update' , $slide->id ) }}" >
                         <input type="hidden" name="_method" value="PATCH">
                       <div class="form-group">
                         <label>Title:</label>
                         <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" value="{{$slide->name}}" >
                       </div>
                       <div class="form-group">
                         <label>Description:</label>
                         <input type="text" class="form-control" id="caption" placeholder="Enter Caption" name="disc" value="{{$slide->disc}}" >
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
          </div>
          </div>
          <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
          <div class="row">
            <div class="col-lg-12">
              <!-- Card Columns Example Social Feed-->
              <div class="mb-0 mt-4">
                <i class="fa fa-newspaper-o"></i> Design One <input type="button" value="Add Design" style="float:right;margin-top: -10px;width: 13%;" class="btn btn-primary" data-toggle="modal" data-target="#myModal_202">
              </div>
                <!-- The Modal -->
                  <div class="modal fade" id="myModal_202">
                  <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Add Design One</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <form method="POST" id="modal_202" name="modal_8" action="{{ route('about.storeOne' , 9) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}?" >
                      <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" >
                      </div>
                      <div class="form-group">
                        <label>Upload Image:</label>
                        <input type="file" class="form-control" id="path" placeholder="Enter Caption" name="imgPath">
                      </div>
                      <div class="form-group">
                        <input type="text" name="flag" value="9" style="display:none">
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
                @if(($slide->flag) == 9)
              <div class="col-lg-3">
              <div class="panel panel-primary" style="border: 3px solid #337ab7;">
              <div class="panel-heading">{{$slide->name}}</div>
              <div class="panel-body"><img src="{{$slide->imgpath}}"></div>
              <div class="panel-footer">{{$slide->disc}}</div>
              <div class="panel-footer">

             <div class="form-group" style="display:inline-flex;" >
                   <input type="button" value="edit"  class="btn btn-success" data-toggle="modal" data-target="#myModal_{{$index}}">
                   <form method="post" action="{{  route('about.destroy' , $slide->id) }}">
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
                         <h4 class="modal-title">Edit Design One</h4>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                       </div>
                       <!-- Modal body -->
                       <div class="modal-body">
                         <form method="POST" action="{{ route('about.update' , $slide->id ) }}" >
                           <input type="hidden" name="_method" value="PATCH">
                         <div class="form-group">
                           <label>Title:</label>
                           <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" value="{{$slide->name}}" >
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
            </div>
            </div>
            <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

      <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
            <div class="row">
              <div class="col-lg-12">
                <!-- Card Columns Example Social Feed-->
                <div class="mb-0 mt-4">
                  <i class="fa fa-newspaper-o"></i> Design Two <input type="button" value="Add Design" style="float:right;margin-top: -10px;width: 13%;" class="btn btn-primary" data-toggle="modal" data-target="#myModal_203">
                </div>
                  <!-- The Modal -->
                    <div class="modal fade" id="myModal_203">
                    <div class="modal-dialog">
                      <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Add Design Two</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <form method="POST" id="modal_203" name="modal_8" action="{{ route('about.storeOne' , 10) }}" enctype="multipart/form-data">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}?" >
                        <div class="form-group">
                          <label>Title:</label>
                          <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" >
                        </div>
                        <div class="form-group">
                          <label>Upload Image:</label>
                          <input type="file" class="form-control" id="path" placeholder="Enter Caption" name="imgPath">
                        </div>
                        <div class="form-group">
                          <input type="text" name="flag" value="10" style="display:none">
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
                  @if(($slide->flag) == 10)
                <div class="col-lg-3">
                <div class="panel panel-primary" style="border: 3px solid #337ab7;">
                <div class="panel-heading">{{$slide->name}}</div>
                <div class="panel-body"><img src="{{$slide->imgpath}}"></div>
                <div class="panel-footer">{{$slide->disc}}</div>
                <div class="panel-footer">

               <div class="form-group" style="display:inline-flex;" >
                     <input type="button" value="edit"  class="btn btn-success" data-toggle="modal" data-target="#myModal_{{$index}}">
                     <form method="post" action="{{  route('about.destroy' , $slide->id) }}">
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
                           <h4 class="modal-title">Edit Design Two</h4>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
                         <!-- Modal body -->
                         <div class="modal-body">
                           <form method="POST" action="{{ route('about.update' , $slide->id ) }}" >
                             <input type="hidden" name="_method" value="PATCH">
                           <div class="form-group">
                             <label>Title:</label>
                             <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" value="{{$slide->name}}" >
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
              </div>
              </div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
      <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Manufacturing <input type="button" value="Add Manufacturing" style="float:right;margin-top: -10px;width: 13%;" class="btn btn-primary" data-toggle="modal" data-target="#myModal_204">
          </div>
            <!-- The Modal -->
              <div class="modal fade" id="myModal_204">
              <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Add Manufacturing</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <form method="POST" id="modal_204" name="modal_8" action="{{ route('about.store') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}?" >
                  <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" >
                  </div>
                  <div class="form-group">
                    <label>Upload Image:</label>
                    <input type="file" class="form-control" id="path" placeholder="Enter Caption" name="imgPath">
                  </div>
                  <div class="form-group">
                    <input type="text" name="flag" value="11" style="display:none">
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
            @if(($slide->flag) == 11)
          <div class="col-lg-3">
          <div class="panel panel-primary" style="border: 3px solid #337ab7;">
          <div class="panel-heading">{{$slide->name}}</div>
          <div class="panel-body"><img src="{{$slide->imgpath}}"></div>
          <div class="panel-footer">{{$slide->disc}}</div>
          <div class="panel-footer">

         <div class="form-group" style="display:inline-flex;" >
               <input type="button" value="edit"  class="btn btn-success" data-toggle="modal" data-target="#myModal_{{$index}}">
               <form method="post" action="{{  route('about.destroy' , $slide->id) }}">
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
                     <h4 class="modal-title">Edit Manufacturing</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <!-- Modal body -->
                   <div class="modal-body">
                     <form method="POST" action="{{ route('about.update' , $slide->id ) }}" >
                       <input type="hidden" name="_method" value="PATCH">
                     <div class="form-group">
                       <label>Title:</label>
                       <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" value="{{$slide->name}}" >
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
        </div>
        </div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
      <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Images <input type="button" value="Add Image" style="float:right;margin-top: -10px;width: 13%;" class="btn btn-primary" data-toggle="modal" data-target="#myModal_205">
          </div>
            <!-- The Modal -->
              <div class="modal fade" id="myModal_205">
              <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Add Image</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <form method="POST" id="modal_205" name="modal_8" action="{{ route('about.store') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}?" >
                  <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" >
                  </div>
                  <div class="form-group">
                    <label>Upload Image:</label>
                    <input type="file" class="form-control" id="path" placeholder="Enter Caption" name="imgPath">
                  </div>
                  <div class="form-group">
                    <input type="text" name="flag" value="12" style="display:none">
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
            @if(($slide->flag) == 12)
          <div class="col-lg-3">
          <div class="panel panel-primary" style="border: 3px solid #337ab7;">
          <div class="panel-heading">{{$slide->name}}</div>
          <div class="panel-body"><img src="{{$slide->imgpath}}"></div>
          <div class="panel-footer">{{$slide->disc}}</div>
          <div class="panel-footer">

         <div class="form-group" style="display:inline-flex;" >
               <input type="button" value="edit"  class="btn btn-success" data-toggle="modal" data-target="#myModal_{{$index}}">
               <form method="post" action="{{  route('about.destroy' , $slide->id) }}">
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
                     <h4 class="modal-title">Edit Images</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>
                   <!-- Modal body -->
                   <div class="modal-body">
                     <form method="POST" action="{{ route('about.update' , $slide->id ) }}" >
                       <input type="hidden" name="_method" value="PATCH">
                     <div class="form-group">
                       <label>Title:</label>
                       <input type="text" class="form-control" id="title" placeholder="Enter Title" name="name" value="{{$slide->name}}" >
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
        </div>
        </div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


    </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@endsection
