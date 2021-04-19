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
                <h3 class="card-title">DANH SÁCH ACCOUNT
                	
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
                      <th>ID</th>
                      <th>Tên tài khoản</th>
                      <th>Email</th>
                      <th>Coins</th>
                      <th>Level</th>
                      <th>Cập nhật</th>                      
                      <th class="text-center">Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($accounts as $account)
                    <tr>
                      <td>{{ $account->id }}</td>
                      <td>{{ $account->name }}</td>
                      <td>{{ $account->email }}</td>
                      <td>{{ $account->coin }}</td>
                      <td>{{ $account->level }}</td>
                      <td>{{ $account->updated_at->format('d-m-Y') }}</td>
                      <td class="text-center align-middle text-nowrap">
                      	<form action="{{ route('account.destroy',$account->id) }}" method="post">
                      		@csrf @method('DELETE')
	                      	<a>
	                      		<i class="fas fa-edit"></i>
	                      	</a>
	                      	{{-- <button class="border-0" onclick="return confirm('You Are Ready?')">
	                      		<i class="fas fa-trash-alt text-danger"></i>
	                      	</button> --}}
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