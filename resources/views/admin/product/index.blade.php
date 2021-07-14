@extends('admin.layout')

@section('page_css')
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />
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
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Danh sách product hiện có</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr class="gradeU">
                        <td>{{$item->id}}</td>
                        <td><img class="circular-bar" width="100px" src="{{$item->thumbnail}}" alt="{{$item->name}}"></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            <button><i class="fas fa-info-circle"></i></button>
                            <button><i class="fas fa-edit"></i></button>
                            <button><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @include('vendor.pagination.bootstrap-4', ['paginator' => $list])
        </div>
    </section>
    <!-- end: page -->
@endsection

@section('page_js')
    {{--    <script src="{{URL::asset('assets/vendor/select2/select2.js')}}"></script>--}}
    {{--    <script src="{{URL::asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>--}}
    {{--    <script src="{{URL::asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>--}}
    {{--    <script src="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>--}}

    {{--    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>--}}
    {{--    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>--}}
    {{--    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>--}}
@endsection

