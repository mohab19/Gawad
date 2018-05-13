
@extends('layouts.header')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->


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
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Slider</div>
          <hr class="mt-2">
          <div class="card-columns">
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/1.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-1</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                   Edit
                 </button>
				          <!-- The Modal -->
						  <div class="modal fade" id="myModal">
							<div class="modal-dialog">
							  <div class="modal-content">
							  
								<!-- Modal Header -->
								<div class="modal-header">
								  <h4 class="modal-title">Edit Slide Content</h4>
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								
								<!-- Modal body -->
								<div class="modal-body">
								  <form>
								  <div class="form-group">
									  <label for="email">Title:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Title" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Caption:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Upload Image:</label>
									  <input type="file" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								  </form>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
								  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
								
							  </div>
							</div>
						  </div><!--end model-->
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/2.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-2</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal_1">
                   Edit
                 </button>
                  <!-- The Modal -->
						  <div class="modal fade" id="myModal_1">
							<div class="modal-dialog">
							  <div class="modal-content">
							  
								<!-- Modal Header -->
								<div class="modal-header">
								  <h4 class="modal-title">Edit Slide Content</h4>
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								
								<!-- Modal body -->
								<div class="modal-body">
								  <form>
								  <div class="form-group">
									  <label for="email">Title:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Title" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Caption:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Upload Image:</label>
									  <input type="file" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								  </form>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
								  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
								
							  </div>
							</div>
						  </div><!--end model-->
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/3.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-3</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal_2">
                   Edit
                 </button>
                  <!-- The Modal -->
						  <div class="modal fade" id="myModal_2">
							<div class="modal-dialog">
							  <div class="modal-content">
							  
								<!-- Modal Header -->
								<div class="modal-header">
								  <h4 class="modal-title">Edit Slide Content</h4>
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								
								<!-- Modal body -->
								<div class="modal-body">
								  <form>
								  <div class="form-group">
									  <label for="email">Title:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Title" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Caption:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Upload Image:</label>
									  <input type="file" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								  </form>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
								  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
								
							  </div>
							</div>
						  </div><!--end model-->
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/4.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-4</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal_3">
                   Edit
                 </button>
                  <!-- The Modal -->
						  <div class="modal fade" id="myModal_3">
							<div class="modal-dialog">
							  <div class="modal-content">
							  
								<!-- Modal Header -->
								<div class="modal-header">
								  <h4 class="modal-title">Edit Slide Content</h4>
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								
								<!-- Modal body -->
								<div class="modal-body">
								  <form>
								  <div class="form-group">
									  <label for="email">Title:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Title" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Caption:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Upload Image:</label>
									  <input type="file" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								  </form>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
								  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
								
							  </div>
							</div>
						  </div><!--end model-->
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
			 <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/1.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-5</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal_4">
                   Edit
                 </button>
                  <!-- The Modal -->
						  <div class="modal fade" id="myModal_4">
							<div class="modal-dialog">
							  <div class="modal-content">
							  
								<!-- Modal Header -->
								<div class="modal-header">
								  <h4 class="modal-title">Edit Slide Content</h4>
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								
								<!-- Modal body -->
								<div class="modal-body">
								  <form>
								  <div class="form-group">
									  <label for="email">Title:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Title" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Caption:</label>
									  <input type="text" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<div class="form-group">
									  <label for="pwd">Upload Image:</label>
									  <input type="file" class="form-control" id="txt1" placeholder="Enter Caption" name="txt1">
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								  </form>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
								  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
								
							  </div>
							</div>
						  </div><!--end model-->
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
      </div>
	  <!------------------------------------------------------------------------------------------------->
	   <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Category-Section One</div>
          <hr class="mt-2">
          <div class="card-columns">
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/1.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-1</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/2.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-2</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/3.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-3</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/4.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-4</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
      </div>
	  <!------------------------------------------------------------------------------------------------->
	   <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
		  <br /><br />
            <i class="fa fa-newspaper-o"></i> Category-Section Two</div>
          <hr class="mt-2">
          <div class="card-columns" >
            <!-- Example Social Card-->
            <div class="card mb-3" style="display:inline-block;">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/1.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-1</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
      </div>
	   <!------------------------------------------------------------------------------------------------->
	   <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Category-Section Three</div>
          <hr class="mt-2">
          <div class="card-columns" >
            <!-- Example Social Card-->
            <div class="card mb-3" style="display:inline-block;">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/1.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-1</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3" >
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/2.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-2</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/3.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-3</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
      </div>
	  <!--------------------------------------------------------------------------------------------->
	  <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Footer Slider</div>
          <hr class="mt-2">
          <div class="card-columns">
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/1.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-1</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/2.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-2</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/3.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-3</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/4.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-4</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
			 <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/1.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-5</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
		
		        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          <hr class="mt-2">
          <div class="card-columns">
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/1.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-6</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/2.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-7</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/3.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-8</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/4.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-9</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
			 <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="images/1.png" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Title-10</a></h6>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                <p>This section for Paragraph</p>
                </div>
              </div>
              <div class="card-footer small text-muted">
                 <button type="button" class="btn btn-default btn-sm">
                   Edit
                 </button>
                <button type="button" class="btn btn-default btn-sm">
                   Delete
                 </button>
                </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
      </div>
	  <!------------------------------------------------------------------------------------------------->
    </div>
    <!-- /.container-fluid-->
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
