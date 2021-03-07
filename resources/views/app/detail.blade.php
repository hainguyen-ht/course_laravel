@extends('layout')
@section('app')


<body id="body">
    <div class="app">
        <header class="header">
            <div id="navBar" class="header__navbar index__course">
                @include('includes/navbar')
            </div>
        </header>
        
        <div class="container detail__main">
            <div class="app__container container__course m-w mg-at">
                <div class="course__detail col-8 grid">
                    <ul class="course__navbar">
                        <li><a href="#">Khoá học</a></li>
                        <li><i class="fas fa-arrow-right"></i></li>
                        <li><a href="#">Javascript</a></li>
                    </ul>
                    <h1>{{ $course->name }}</h1>
                    <p>Kiến thức cơ bản dành cho dân IT, không phân biệt bạn theo Front-end, Back-end hay Devops</p>
                    <h3>Bạn sẽ học được gì?</h3>
                    <ul class="course__qa">
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Các kiến thức cơ bản, nền móng của ngành IT</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Các kiến thức cơ bản, nền móng của ngành IT</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Các kiến thức cơ bản, nền móng của ngành IT</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Các kiến thức cơ bản, nền móng của ngành IT</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Các kiến thức cơ bản, nền móng của ngành IT</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Các kiến thức cơ bản, nền móng của ngành IT</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Các kiến thức cơ bản, nền móng của ngành IT</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Các kiến thức cơ bản, nền móng của ngành IT</li>
                    </ul>
                </div>

                <div class="course__info col-4 grid">
                    <div class="course__info__main">
                        <img src="img/courses/html-cc-1-1.jpg">
                        <h1>{{ $course->price }} coin</h1>
                        <a class="btn fixed__fullw" href="#">Đăng ký học</a>
                        <ul>
                            <li>
                                <i class="fas fa-tachometer-alt"></i>
                                Trình độ cơ bản</li>
                            <li>
                                <i class="fas fa-film"></i>
                                Tổng số 113 bài học</li>
                            <li>
                                <i class="fas fa-clock"></i>
                                Cần 55.25 giờ để học</li>
                            <li>
                                <i class="fas fa-battery-full"></i>
                                Học mọi lúc, mọi nơi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

@endsection