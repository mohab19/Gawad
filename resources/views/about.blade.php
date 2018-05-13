@extends('layouts.header')
@section('content')



 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">About</a>
        </li>
        <li class="breadcrumb-item active">Edit About Page</li>
      </ol>

      <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Head Banner</div>
          <hr class="mt-2">
          <div class="card-columns">
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
									  <textarea class="form-control" id="txt1" placeholder="Enter Caption" name="txt1"></textarea>
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
						  </div>
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
            <i class="fa fa-newspaper-o"></i> CEO Word Section</div>
          <hr class="mt-2">
          <div class="card-columns">
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
		  <br /><br />
            <i class="fa fa-newspaper-o"></i> Category-Section </div>
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
            <i class="fa fa-newspaper-o"></i> Two banners Section</div>
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
          </div>
          <!-- /Card Columns-->
        </div>
      </div>
	  <!--------------------------------------------------------------------------------------------->
	   	  <!------------------------------------------------------------------------------------------------->
	   <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Paragraph Section</div>
          <hr class="mt-2">
          <div class="card-columns">
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
	   
	   <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
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
	  
	  	   <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
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
            <i class="fa fa-newspaper-o"></i> Our Clients Footer Slider</div>
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

































@endsection