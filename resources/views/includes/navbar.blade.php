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
                <a class="text-header" href="./login.html">Đăng nhập</a>
            </li>
            <li class="header__content__auth-item item__senpai">
                |
            </li>
            <li class="header__content__auth-item">
                <a class="text-header" href="./register.html">Đăng ký</a>
            </li>
        </ul>
    </div>

    <!-- CLICK -->
    <div class="nav__menu">
        <i onclick=openMenu() class="fas fa-bars"></i>
    </div>   
</div>