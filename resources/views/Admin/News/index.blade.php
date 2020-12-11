@extends('layouts.admin')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | jsGrid</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets/Admin/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jsGrid -->
        <link rel="stylesheet" href="{{asset('assets/Admin/plugins/jsgrid/jsgrid.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/Admin/plugins/jsgrid/jsgrid-theme.min.css')}}'">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('assets/Admin/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <div class="content-wrapper" style="min-height: 1200.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>jsGrid</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">jsGrid</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">jsGrid</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                        <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                            <table class="jsgrid-table">
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 30px;">ID
                                    </th>
                                    <th
                                        style="width: 30px;">Department
                                    </th>
                                    <th
                                        style="width: 30px;">Content
                                    </th>
                                    <th
                                        style="width: 30px;">Is Active
                                    </th>
                                    <th
                                        style="width: 30px;">Country
                                    </th>
                                    <th
                                        style="width: 30px;">Image
                                    </th>
                                    <th
                                        style="width: 30px;">Act
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <div class="jsgrid-grid-body" style="height: 821px;">
                            <table class="jsgrid-table">
                                <tbody>
                                <tr>
                                    @foreach($News as $New)
                                        <td>{{ $New -> id }}</td>
                                        <td>{{ $New -> department -> name  }}</td>
                                        <td>{{ $New -> Content }}</td>
                                        <td>{{ $New -> Is_active }}</td>
                                        <td>{{ $New -> Country }}</td>
                                        <td><img style="width: 100px ; height: 100px " src="{{ asset('assets/images/news/'.$New->Image) }}"></td>
                                        <td>
                                            <a href="{{route('Admin.news.uploadimage',$New->id)}}"> اضافة صورة</a>
                                        </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="jsgrid-pager-container">
                            <div class="jsgrid-pager">Pages: <span
                                    class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                        href="javascript:void(0);">First</a></span> <span
                                    class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                        href="javascript:void(0);">Prev</a></span> <span
                                    class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span
                                    class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span><span
                                    class="jsgrid-pager-page"><a href="javascript:void(0);">3</a></span><span
                                    class="jsgrid-pager-page"><a href="javascript:void(0);">4</a></span><span
                                    class="jsgrid-pager-page"><a href="javascript:void(0);">5</a></span> <span
                                    class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span> <span
                                    class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span> &nbsp;&nbsp;
                                1 of 5
                            </div>
                        </div>
                        <div class="jsgrid-load-shader"
                             style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                        <div class="jsgrid-load-panel"
                             style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please,
                            wait...
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- jQuery -->
    <script src="{{asset('assets/Admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- jsGrid -->
    <script src="{{asset('assets/Admin/plugins/jsgrid/demos/db.js')}}"></script>

    <script src="{{asset('assets/Admin/plugins/jsgrid/jsgrid.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/Admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets/Admin/dist/js/demo.js')}}"></script>
    <!-- page script -->
    <script>
        $(function () {
            $("#jsGrid1").jsGrid({
                height: "100%",
                width: "100%",

                sorting: true,
                paging: true,

                data: db.clients,

                fields: [
                    {name: "Name", type: "text", width: 150},
                    {name: "Age", type: "number", width: 50},
                    {name: "Address", type: "text", width: 200},
                    {name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name"},
                    {name: "Married", type: "checkbox", title: "Is Married"}
                ]
            });
        });
    </script>
@stop
