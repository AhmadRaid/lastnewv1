@extends('layouts.admin')
@section('content')

    <div class="content-wrapper" style="min-height: 1244.06px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Department</h1>
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
                            method="post" action="{{ route('Admin.departments.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">اسم القسم </label>
                                        <input name="name" class="form-control" id="exampleInputEmail1"
                                               placeholder="Enter Name Department">
                                        @error('name')
                                        <span class="text-danger"> {{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="row hidden" id="cats_list" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1"> اختر القسم الرئيسي
                                                </label>
                                                <select name="parent_id" class="select2 form-control">
                                                    <optgroup label="من فضلك أختر القسم ">
                                                        @if($categories && $categories -> count() > 0)
                                                            @foreach($categories as $category)
                                                                <option
                                                                    value="{{$category -> id }}">{{$category -> name}}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </optgroup>
                                                </select>
                                                @error('parent_id')
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror

                                            </div>
                                        </div>
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

                                        <div class="col-md-3">
                                            <div class="form-group mt-1">
                                                <input type="radio"
                                                       name="type"
                                                       value="1"
                                                       class="switchery"
                                                       data-color="success" />

                                                <label
                                                    class="card-title ml-1">
                                                    قسم رئيسي
                                                </label>

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group mt-1">
                                                <input type="radio"
                                                       name="type"
                                                       value="2"
                                                       class="switchery" data-color="success" />

                                                <label
                                                    class="card-title ml-1">
                                                    قسم فرعي
                                                </label>

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

@section('script')

    <script>
        $('input:radio[name="type"]').change(
            function(){
                if (this.checked && this.value == '2') {
                    console.log('2')// 1 if main cat - 2 if sub cat
                    $('#cats_list').removeClass('hidden');

                }else{
                    console.log('1')
                    $('#cats_list').addClass('hidden');
                }
            });
    </script>
@stop

