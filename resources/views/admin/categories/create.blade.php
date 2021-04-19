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
                <h3 class="card-title">Thêm Mới Danh Mục Khoá Học</h3>
              </div>
              <!-- form start -->
              <form role="form" action="{{route('category.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên Danh Mục</label>
                    <input type="text" name="category_name" class="form-control" placeholder="Enter ..." required="required">
                  </div>
                  <div class="form-group">
                    <label>Mô Tả</label>
                    <textarea class="form-control" name="category_desc" rows="3" placeholder="Enter ..."></textarea>
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
                  <button type="submit" class="btn btn-primary">Thêm</button>
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