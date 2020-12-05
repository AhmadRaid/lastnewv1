@extends('layouts.admin')
@section('content')

    <div class="content-wrapper" style="min-height: 1244.06px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Opinion</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Validation</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" novalidate="novalidate"
                                  method="post" action="{{ route('Admin.Opinion.store') }}">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">

                                        <label>Content News</label>

                                        <textarea id="editor" rows="5" cols="50ad" name="content_" class="form-control"></textarea>
                                        @error('content_')
                                        <span class="text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>

                                    <!-- /.card-header -->

                                    <div class="form-group">
                                        <label>Image</label> <br>
                                        <input type="file" name="image_opinion">
                                        @error('image_opinion')
                                        <span class="text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-1">
                                                <input type="checkbox" value="1"
                                                       name="is_active"
                                                       id="switcheryColor4"
                                                       class="switchery" data-color="success"
                                                       checked/>
                                                <label for="switcheryColor4"
                                                       class="card-title ml-1">الحالة </label>

                                                @error("is_active")
                                                <span class="text-danger">{{$message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@stop


