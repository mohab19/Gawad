@extends('layouts.header')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/home">Home</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="/Categories">Categories</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="/Category/{{$category->id}}">{{$category->name}}</a>
        </li>
        <li class="breadcrumb-item active">{{$subCategory->name}}</li>
      </ol>
      @include('includes.error')
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Products for {{$subCategory->name}}
          <!-- Add Category button -->
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
              <i class="fa fa-plus"></i>
              Add Product
            </button>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <form class="addForm" ref="formData" action="/product" method="post" enctype="multipart/form-data" id="#Pform">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                        <input type="hidden" name="subCat_id" id="subCat_id" value="{{$subCategory->id}}">
                        <label>Name:</label>
                        <input type="text" class="form-control" id="productName" placeholder="Produt Name" name="name">
                        <div class="alert alert-danger cs-alert">
                          Name must be larger than <strong>3</strong> chars!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Price:</label>
                        <input type="text" class="form-control" id="produtPrice" placeholder="$ Price" name="price">
                      </div>
                      <div class="form-group">
                        <label>Caption:</label>
                        <input type="text" class="form-control" id="productCap" placeholder="Product Caption" name="caption">
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="family_id" id="family_id">
                          <option selected disabled>Choose Family: </option>
                          @foreach($families as $family)
                          <option value="{{$family->id}}">{{$family->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Choose Image</label>
                        <input type="file" name="path" id="path">
                        <p class="help-block">Try to check image size before Uploading</p>
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" id="add-product">Submit</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div><!--end model-->
          <!-- Add Category button -->
          <!-- Edit Button -->
          <button type="button" class="btn btn-success pull-right catEditButt" data-toggle="modal" data-target="#EdModal">
            <i class="fa fa-edit fa-lg"></i>
            Edit Sub-Category
          </button>
          <!-- The Modal -->
          <div class="modal fade" id="EdModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Edit Sub-Category</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form class="addForm" action="{{url('/UpdateSub', ['id' => $subCategory->id])}}" method="post">
                  @csrf
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name:</label>
                      <input type="text" class="form-control" id="SubName" value="{{$subCategory->name}}" name="name">
                      <div class="alert alert-danger cs-alert">
                        Name must be larger than <strong>3</strong> chars!
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Caption:</label>
                      <input type="text" class="form-control" id="SubCap" value="{{$subCategory->caption}}" name="caption">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="EditSub">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div><!--end model-->
          <!-- Edit Button -->
          </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#No.</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Caption</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#No.</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Caption</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody id="Pbody" class="tbody">
                @foreach($products as $index => $product)

                <tr>
                  <td>{{$index+1}}</td>
                  <td><img src="{{url($product->path)}}" alt="{{$product->name}}" class="img-thumbnail Pimg"></td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->caption}}</td>
                  <td>{{$product->price}}</td>
                  <td>
                    <button class="btn btn-success" data-toggle="modal" data-target="#myModal{{$index+1}}"><i class="fa fa-edit fa-lg"></i></button>
                    <!-- The Modal -->
                    <div class="modal fade detbody" id="myModal{{$index+1}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Product</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <!-- Modal body -->
                          <form class="addForm" action="/product" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                              <div class="form-group">
                                <input type="hidden" name="subCat_id" value="{{$product->id}}">
                                <label>Name:</label>
                                <input type="text" class="form-control" id="produtName" value="{{$product->name}}" name="name">
                                <div class="alert alert-danger cs-alert">
                                  Name must be larger than <strong>3</strong> chars!
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Price:</label>
                                <input type="text" class="form-control" id="produtPrice" value="{{$product->price}}" name="price">
                              </div>
                              <div class="form-group">
                                <label>Caption:</label>
                                <input type="text" class="form-control" id="productCap" value="{{$product->caption}}" name="caption">
                              </div>
                              <div class="form-group">
                                <label>Choose Image</label>
                                <input type="file" name="path">
                                <p class="help-block">Try to check image size before Uploading</p>
                              </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" id="add-product">Submit</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div><!--end model-->
                    <form style="display: inline-block;" action="{{url('/product', ['id' => $product->id])}}" method="post">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button type="submit" value="{{$product->id}}" class="btn btn-danger delSub">
                        <i class="fa fa-trash fa-lg"></i>
                      </button>
                    </form>
                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>

@endsection
