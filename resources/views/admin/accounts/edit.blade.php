@extends('admin_layout')
@section('admin.content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
                <h3 class="card-title">Sửa Tài Khoản</h3>
              </div>
              <!-- form start -->
              <form role="form" action="{{route('account.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên tài khoản</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter ..." required="required">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter ..." required="required">
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="text" name="password" class="form-control" placeholder="Enter ..." required="required">
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
                  <button type="submit" class="btn btn-primary">Lưu lại</button>
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