@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Brands</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Brands</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                      <h5 class="card-title">Edit Brands</h5> <br>

                      {{-- <form method="post" action=> --}}
                      <form method="post" role="form" action="{{route('brands.update', $brand->id)}}">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Brand Name" value="{{$brand->name}}">
                            @if ($errors->has('name'))
                            <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
                            @endif
                          </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary fa fa-save">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div><!-- /.card -->
                </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
      <!-- /.content -->
@endsection
