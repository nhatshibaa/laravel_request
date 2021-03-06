@extends('admin.layout')

@section('page-css')
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/select2/select2.css')}}"/>
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}"/>
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
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Products</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th>ID</th>
                    <th class="img-circle">Thumbnail</th>
                    <th>Name</th>
                    <th class="hidden-phone">Price</th>
                    <th class="hidden-phone">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone">

                    </td>
                </tr>
                <tr class="gradeC">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">5</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td class="center hidden-phone">5.5</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td class="center hidden-phone">6</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td class="center hidden-phone">7</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td class="center hidden-phone">6</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td class="center hidden-phone">1.9</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.1</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.2</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.3</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.4</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.5</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">1.6</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td class="center hidden-phone">1.7</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td class="center hidden-phone">1.8</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td class="center hidden-phone">125.5</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td class="center hidden-phone">312.8</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td class="center hidden-phone">419.3</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td class="center hidden-phone">522.1</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td class="center hidden-phone">420</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td class="center hidden-phone">420.1</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td class="center hidden-phone">413</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td class="center hidden-phone">8.5</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td class="center hidden-phone">3.1</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td class="center hidden-phone">3.3</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td class="center hidden-phone">3.5</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeA">
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr class="gradeA">
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeC">
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="gradeU">
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone">
                        <button><i class="fas fa-info-circle"></i></button>
                        <button><i class="fas fa-edit"></i></button>
                        <button><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
            @include('vendor/pagination/default', ['paginator' => $list])
        </div>
    </section>
@endsection

@section('page-js')
{{--    <script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/select2/select2.js')}}"></script>--}}
{{--    <script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>--}}
{{--    <script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>--}}
{{--    <script src="{{\Illuminate\Support\Facades\URL::asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>--}}

    <script src="{{\Illuminate\Support\Facades\URL::asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
@endsection
