@extends('admin.layout')

@section('page_css')
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/select2/select2.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}"/>
@endsection

@section('header-content')
    <header class="page-header">
        <h2>List Products</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="/layout/index">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Product</span></li>
                <li><span>List</span></li>
            </ol>
        </div>
    </header>
@endsection

@section('body-content')
    <!-- start: page -->
    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">User Form</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" action="/admin/products" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Identity Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputDefault" name="id-numb">
                                @error('id-numb')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">First Name</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="inputDefault" name="fName">
                                @error('fName')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Last Name</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="inputDefault" name="lName">
                                @error('lName')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Phone</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="inputDefault" name="phone">
                                @error('phone')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Gender</label>
                            <div class="col-md-6">
                                <input type="radio" id="inputDefault" name="gender" value="1">Male
                                <input type="radio" id="inputDefault" name="gender" value="2">Female
                                @error('phone')
                                <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group wrap-input100">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6 col-xs-11">
                                <button class="btn btn-sm btn-primary colorpicker-element">
                                    Save
                                </button>
                                <button class="btn btn-sm btn-default colorpicker-element">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('page_js')
    <script src="{{URL::asset('assets/vendor/select2/select2.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
    <script
        src="{{URL::asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>

    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>
@endsection

