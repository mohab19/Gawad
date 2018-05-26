@extends('layouts.header')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/home">Home</a>
        </li>
        <li class="breadcrumb-item">Families</li>
        <li class="breadcrumb-item active">{{$family->name}}</li>
      </ol>
      @include('includes.error')
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> {{$family->name}}
          <!-- Add Category button -->
            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">
              <i class="fa fa-plus"></i>
              Edit Family
            </button>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Family</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <form class="addForm" action="{{url('/Family', ['id' => $family->id])}}" method="post">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" id="famName" value="{{$family->name}}" name="name">
                        <div class="alert alert-danger cs-alert">
                          Name must be larger than <strong>3</strong> chars!
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Caption:</label>
                        <input type="text" class="form-control" id="famCap" value="{{$family->caption}}" name="caption">
                      </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" id="add-Family">Submit</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div><!--end model-->
          <!-- Add Category button -->
          </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#No.</th>
                  <th>Sub-Category Name</th>
                  <th>Name</th>
                  <th>Caption</th>
                  <th>Last Update</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#No.</th>
                  <th>Sub-Category Name</th>
                  <th>Name</th>
                  <th>Caption</th>
                  <th>Last Update</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody id="Fbody">
                @foreach($products as $index => $product)
                  <tr id="url{{$product->id}}">
                    <td>{{$index+1}}</td>
                    <td></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->caption}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td>
                      <a href="{{url('/subCategory', ['id' => $product->subCat_id])}}">
                        <button class="btn btn-warning"><i class="fa fa-clipboard fa-lg" style="color: #FFF;"></i></button>
                      </a>
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

    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>

@endsection
