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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật khoá học</h3>
              </div>
              <!-- form start -->
              <form role="form" action="{{ route('course.update', $course->id) }}" method="post" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên khoá học</label>
                    <input type="text" value="{{ $course->name }}" name="name" class="form-control" placeholder="Enter ..." required="required">
                  </div>
                  <div class="form-group">
                    <label>Danh mục khoá học</label>
                    <select class="form-control" name="category_id">
                      <option selected>Chọn danh mục</option>
                      @foreach($category as $cate)

                      <option {{ ($course->category_id == $cate->id) ? 'selected' : '' }} value="{{ $cate->id }}">{{ $cate->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Giá</label>
                    <input type="text" value="{{ $course->price }}" name="price" class="form-control" placeholder="Enter ..." required="required">
                  </div>
                  <div class="form-group">
                    <label>Hình ảnh</label><br>
                    <img src="{{ url('/storage/'.$course->img) }}" width="160">
                    <span class="ml-3 img__uploaded">
                      <input type="file" name="img">
                    </span>
                    
                    
                  </div>
                  <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."> {{ $course->description }}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control" name="content" rows="3" placeholder="Enter ...">{{ $course->content }}</textarea>
                  </div>
                  
                  <p class="text-primary">
                    <?php
                      $message = Session::get('message');
                      if($message){
                        echo $message;
                        Session::put('message', null);
                      }
                    ?>  
                  </p>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">LƯU LẠI</button>
                </div>
              </form>
              <!-- form end -->
            </div>
          </div>
        </div>
        
      </div>
    </section>
  </div>
@endsection