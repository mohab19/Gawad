@extends('layouts.header')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/home">Home</a>
        </li>
        <li class="breadcrumb-item active">Sub-Categories</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Sub-Categories Table
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#No.</th>
                  <th>Category</th>
                  <th>Name</th>
                  <th>Caption</th>
                  <th>No. of Products</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#No.</th>
                  <th>Category</th>
                  <th>Name</th>
                  <th>Caption</th>
                  <th>No. of Products</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody id="tbody">
                @foreach($subCategories as $index => $subCategory)

                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$subCategory->Category->name}}</td>
                  <td>{{$subCategory->name}}</td>
                  <td>{{$subCategory->caption}}</td>
                  <td>{{count($subCategory->Product)}}</td>
                  <td>
                    <a href="{{url('/subCategory', ['id' => $subCategory->id])}}">
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>

@endsection
