@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List of Brands</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Brands</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                      <h5 class="card-title">List of Brands</h5> <br>
                      <div>
                        <a href="{{route('brands.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Create Brand</a><br><br>
                      </div>
                      <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            <tbody>
                                @if ($brands)
                                    @foreach ($brands as $key => $brand)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$brand->name}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{route('brands.edit', $brand->id)}}"><i class="fa fa-edit"></i>Edit</a>

                                            <a class="btn btn-sm btn-danger sa-delete" href="javascript:;" data-form-id="brand-delete{{$brand->id}}"><i class="fa fa-trash"></i>Delete</a>
                                            <form id="brand-delete{{$brand->id}}" action="{{route('brands.destroy', $brand->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                @method("DELETE")

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
          </div>
        </div>
    </div>


@endsection
