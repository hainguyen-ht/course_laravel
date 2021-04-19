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
        
        <div class="container">
            <div class="app__container container__course m-w mg-at">
                <div class="category grid">
                    @foreach($category as $cate)
                    <div class="category__list">
                        <h6 class="category__list-title">{{ $cate->name }}</h6>

                        <ul class="category__list-item">
                            @foreach($cate->joinCourse as $item)
                            <li><a href="{{ route('detail', $item->id) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                    {{-- <div class="category__list">
                        <h6 class="category__list-title">Backend-End</h6>
                        <ul class="category__list-item">
                            <li><a href="#">HTML, CSS</a></li>
                            <li><a href="#">Javascript</a></li>
                        </ul>
                    </div>
                    <div class="category__list">
                        <h6 class="category__list-title">Front-End</h6>
                        <ul class="category__list-item">
                            <li><a href="#">HTML, CSS</a></li>
                            <li><a href="#">Javascript</a></li>
                        </ul>
                    </div> --}}
                </div>
                <div class="main">
                    <ul class="course__menu">
                        <li class="course__menu__item">
                            <a href="#">Theo lộ trình</a>
                        </li>
                        <li class="course__menu__item">
                            <a href="#">Mới nhất</a>
                        </li>
                    </ul>
                    <div class="course__list">  

                    @foreach($data as $course)   
                        @include('includes/item')
                    @endforeach    
                        
                    </div>
                </div>
            </div>
        </div>



@endsection