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
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $categories->count() }}</h3>

                <p>Danh mục khoá học</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('category.index') }}" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $courses->count() }}</sup></h3>

                <p>Khoá học</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('course.index') }}" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $accounts->count() }}</h3>

                <p>Học viên</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('account.index') }}" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khoá học</th>
                <th scope="col">Giá</th>
                <th scope="col">Học viên</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              @foreach($courses as $course)
              <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td>{{ $course->name }}</td>
                <td>{{ $course->price }} coins</td>
                <td>{{ $course->joinAccount->count() }}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
  </div>
@endsection