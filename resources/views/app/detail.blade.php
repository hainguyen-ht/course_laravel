@extends('layout')
@section('title', $title)
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
                        <li><a href="{{ route('course') }}">Khoá học</a></li>
                        <li><i class="fas fa-arrow-right"></i></li>
                        <li><a href="{{ route('detail', $course->id) }}">{{ $course->name }}</a></li>
                    </ul>
                    <h1>{{ $course->name }}</h1>
                    <p>{{ $course->description }}</p>
                    <h3>Bạn sẽ học được gì?</h3>
                    <ul class="course__qa">
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Các kiến thức cơ bản, nền móng của ngành IT</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Hiểu chi tiết về các khái niệm cơ bản</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Xây dựng được website đầu tiên</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Tự tin khi phỏng vấn với kiến thức vững chắc</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Có nền tảng để học các thư viện và framework</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Nắm chắc các tính năng trong phiên bản</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Ghi nhớ các khái niệm nhờ bài tập trắc nghiệm</li>
                        <li class="col-6">
                            <i class="fas fa-check"></i>
                            Nâng cao tư duy với các bài kiểm tra với testcases</li>
                    </ul>
                    <h3>Nội dung khoá học</h3>
                    <p>
                        {{ $course->content }}
                    </p>
                </div>

                <div class="course__info col-4 grid">
                    <div class="course__info__main">
                        <img src="{{ url('/storage/'.$course->img) }}">
                        <h1>{{ $course->price }} coin</h1>
                        <a class="btn fixed__fullw" href="
                            @if(isset($session->id))
                                {{route('course.reg', [$course->id, $session->id])}}
                            @else
                                {{route('login')}}
                            @endif
                        ">
                            {{-- {{$session->id ?? 'null' }} --}}
                            <?php
                                if(!isset($session->id)){
                                    echo "Đăng ký";
                                }else{
                                    $statusReg = Session::get('statusReg');
                                    if($statusReg){
                                       echo $statusReg;
                                        Session::put('statusReg', null);
                                    }
                                }
                            ?>
                        </a>
                        {{-- <h1>{{ dd($session->id) }}</h1> --}}
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
<?php
    $stateReg = Session::get('stateReg');
    if($stateReg){
        echo $stateReg;
        Session::put('stateReg', null);
    }
?>
@endsection