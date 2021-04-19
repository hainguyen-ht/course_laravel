<div class="header__content m-w mg-at grid">
    <div class="header__content__logo">
        <a class="logo-link" href="{{ route('home') }}">
            <img src="img/logo.png" width="165" height="50">
        </a>
    </div>
    <div class="header__content__nav hMobile">
        <ul class="header__content__nav-list">
            <li class="header__content__nav-item">
                <a class="text-header" href="{{ route('home') }}">TRANG CHỦ</a>
            </li>
            <li class="header__content__nav-item">
                <a class="text-header" href="{{ route('course') }}">KHOÁ HỌC</a>
            </li>
            
        </ul>
    </div>
    <div class="header__content__auth hMobile">
        <ul class="header__content__auth-list">
            
            <li class="header__content__auth-item">
                <?php 
                    $name = Session::get('name');
                    if($name){
                       
                ?>
                        <a class="text-header" href="{{ route('home') }}">
                            {{$name}} &nbsp;

                        </a>
                        <span class="coin" style="color: orange">{{ $session->coin }}<i class="fab fa-bitcoin"></i></span>
                <?php 
                    }else{
                        ?>
                        <a class="text-header" href="{{ route('login')}}">Đăng nhập</a>
                <?php
                    }
                ?>
            </li>
            <li class="header__content__auth-item item__senpai">
                |
            </li>
            <li class="header__content__auth-item">
                <?php 
                    $name = Session::get('name');
                    if($name){
                ?>
                        <a class="text-header" href="{{ route('logout') }}">{{ 'Đăng xuất' }}</a>
                <?php 
                    }else{
                        ?>
                        <a class="text-header" href="{{ route('register') }}">Đăng ký</a>
                <?php
                    }
                ?>
            </li>
        </ul>
    </div>

    <!-- CLICK -->
    <div class="nav__menu">
        <i onclick=openMenu() class="fas fa-bars"></i>
    </div>   
</div>