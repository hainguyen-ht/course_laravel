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
                <h3 class="card-title">DANH SÁCH KHOÁ HỌC
                	
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
                <table class="table table-sm table-hover text-wrap">
                  <thead>
                    <tr>
                      <th class="align-middle text-center">ID</th>
                      <th class="text-center">Tên khoá học</th>
                      <th class="align-middle text-center">Danh mục</th>
                      <th class="align-middle text-center">Giá</th>
                      <th class="align-middle text-center">Ảnh</th>
                      <th class="align-middle text-center">Mô tả</th>
                      <th class="align-middle text-center">Nội dung</th>
                      <th class="align-middle text-center">Cập nhật</th>
                      <th class="align-middle text-center">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($courses as $course)
                    <tr>
                      <td class="align-middle">{{ $course->id }}</td>
                      <td class="align-middle">{{ $course->name }}</td>
                      <td class="align-middle">
                        {{-- {{ $course->category_id }} --}}
                        @foreach($category as $cate)
                          {{ $name = ($course->category_id == $cate->id) ? $cate->name : '' }}
                        @endforeach
                      </td>
                      <td class="align-middle">{{ $course->price }}</td>
                      <td class="align-middle">
                        <img src="{{ url('/storage/'.$course->img) }}" width="80" height="70">
                      </td>
                      <td class="align-middle">{{ $course->description }}</td>
                      <td class="align-middle">{{ $course->content }}</td>
                      <td class="align-middle text-nowrap">{{ $course->updated_at->format('d-m-Y') }}</td>
                      <td class="text-center align-middle text-nowrap">
                      	<form action="{{ route('course.destroy',$course->id) }}" method="post">
                      		@csrf @method('DELETE')
	                      	<a href="{{ route('course.edit', $course->id) }}">
	                      		<i class="fas fa-edit"></i>
	                      	</a>
	                      	<button class="border-0" onclick="return confirm('You Are Ready?')">
	                      		<i class="fas fa-trash-alt text-danger"></i>
	                      	</button>
	                       </form>
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