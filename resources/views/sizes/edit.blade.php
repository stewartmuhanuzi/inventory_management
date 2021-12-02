@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Categories</li>
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
                      <h5 class="card-title">Edit Size</h5> <br>

                      {{-- <form method="post" action=> --}}
                      <form method="post" role="form" action="{{route('sizes.update', $size->id)}}">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Size</label>
                            <input name="size" type="text" class="form-control" placeholder="Enter Size Name" value="{{$size->size}}">
                            @if ($errors->has('size'))
                            <small class="form-text invalid-feedback">{{$errors->first('size')}}</small>
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
