@extends('admin_layout')
@section('admin.content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ $title }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    	<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh Sách Danh Mục
                	
                </h3>
                <h5 class="text-primary text-center"><?php
                		if($message = Session::get('message')){
                			echo $message;
                			Session::put('message', null);
                		}
                ?></h5>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên danh mục</th>
                      <th>Mô tả</th>
                      <th>Số lượng khoá học</th>
                      <th>Cập nhật</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->name }}</td>
                      <td>{{ $category->description }}</td>
                      <td>{{ $category->joinCourse->count() }}</td>
                      <td>{{ $category->updated_at->format('d-m-Y') }}</td>
                      <td>
                      	<form action="{{ route('category.destroy',$category->id) }}" method="post">
                      		@csrf @method('DELETE')
	                      	<a href="{{ route('category.edit',$category->id) }}">
	                      		<i class="fas fa-edit"></i>
	                      	</a>
	                      	&nbsp;
	                      	<button class="border-0" onclick="return confirm('You Are Ready?')">
	                      		<i class="fas fa-trash-alt text-danger"></i>
	                      	</button>
	                    </form>
                      	{{-- <a href="{{ route('delete',$category->id) }}" onclick="return confirm('You Are Ready?')">
                      		<i class="fas fa-trash-alt text-danger"></i>
                      	</a> --}}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
    	</div>
    </section>
  </div>
@endsection