@extends('layout')
@section('title', $title)
@section('app')


<body id="body" onscroll=scrollMenu(event)>
    <div class="app">
        <header class="header">
            <div id="navBar" class="header__navbar ">
                @include('includes/navbar')
            </div>
            <div class="background">
                
            </div>
        </header>

        <div class="section m-w mg-at">
            <div class="section__main">
                <div class="section__item col-4 grid">
                    <img src="img/section/feature-1.png">
                    <h3>Trên 30.000 học viên</h3>
                </div>
                <div class="section__item col-4 grid">
                    <img src="img/section/feature-2.png">
                    <h3>10+ khoá học dành cho bạn</h3>
                </div>
                <div class="section__item col-4 grid">
                    <img src="img/section/feature-3.png">
                    <h3>Học bất cứ nơi nào, ở bất cứ đâu</h3>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="app__container m-w mg-at">
                <div class="main__index">
                    <!-- INDEX -->
                    <div class="course__heading">
                        <h2>
                            Khoá học nổi bật
                        </h2>
                        <p>
                            Những khoá học có lượng học viên đăng ký nhiều nhất và có phản hồi tích cực nhất
                        </p>
                    </div>
                    <!-- END -->
                    <div class="course__list">    
                        

                        @foreach($data as $course)   
                            @include('includes/item')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        

@endsection