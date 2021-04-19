<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('frontend') }}/">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="fonts/all.min.css">
    <title>@yield('title')</title>
</head>
    @yield('app')

    {{-- FOOTER --}}
    
    <footer>
            <div class="footer m-w mg-at">
                <div class="footer__col-1 col-3 grid">
                    <p class="footer__col-logo">
                        <a href="{{ route('home') }}">
                        <img src="./img/logo.png" alt=""></a>
                    </p>
                    <p class="footer__col-desc">I-TECH là nơi học lập trình miễn phí.</p>
                    <p class="footer__col-desc">
                        Các khoá học được đầu tư kỹ lưỡng từ nội dung tới chất lượng hình ảnh và âm thanh.
                    </p>
                    <p class="footer__col-desc">
                        Học viên có thể học từ con số 0 tới khi trở thành lập trình viên chuyên nghiệp tại đây.
                    </p>
                    <p class="footer__col-desc footer__col-copyright">Clone F8! Edit by hainguyen92.</p>
                </div>
                <div class="footer__col-2 col-2 grid">
                    <h3 class="footer__col__title">I-TECH</h3>
                    <ul class="footer__col__list">
                        <li class="footer__col__item">
                            <a href="#">Giới thiệu</a>
                        </li>
                        <li class="footer__col__item">
                            <a href="#">Liên hệ</a>
                        </li>
                        <li class="footer__col__item">
                            <a href="#">Câu hỏi thường gặp</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__col-3 col-2 grid">
                    <h3 class="footer__col__title">SẢN PhẩM</h3>
                    <ul class="footer__col__list">
                        <li class="footer__col__item">
                            <a href="#">Top CV</a>
                        </li>
                        <li class="footer__col__item">
                            <a href="#">FreeFire</a>
                        </li>
                        <li class="footer__col__item">
                            <a href="#">Liên Quân Mobile</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__col-4 col-2 grid">
                    <h3 class="footer__col__title">Hỗ trợ</h3>
                    <ul class="footer__col__list">
                        <li class="footer__col__item">
                            <a href="#">Hỗ trợ</a>
                        </li>
                        <li class="footer__col__item">
                            <a href="#">Đóng góp ý kiến</a>
                        </li>
                        <li class="footer__col__item">
                            <a href="#">Liên hệ</a>
                        </li>
                        <li class="footer__col__item">
                            <a href="#">Báo cáo sự cố</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__col-5 col-3 grid">
                    <h3 class="footer__col__title">NHẬN THÔNG BÁO MỚI NHẤT</h3>
                    <ul class="footer__col__list">
                        <li class="footer__col__item">
                            Nhập email để đăng ký nhận những thông tin hữu ích về học tập từ I-Tech.
                        </li>
                    </ul>
                    <div class="footer__col__form">
                        <form action="#" method="POST">
                            <input type="text" name="email" id="email" placeholder="Email của bạn..">
                            <div class="form__footer-submit">
                                <button class="btn btn-notification" type="submit">ĐĂNG KÝ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        <div id="bgmShow" class="menu__more">
            <div id="menuMobile" class="menu__mobile">
                <header class="menu__mobile__header">
                    <img src="img/logo.png">
                    <span onclick=closeMenu()>
                        <i class="fas fa-times"></i>
                    </span>
                </header>
                <ul class="menu__mobile__list">
            <?php 
                $name = Session::get('name');
                if($name){
            ?>
                    <li class="ss-logout">
                        <span><i class="fas fa-sign-out-alt"></i></span>
                        <a href="{{ route('logout') }}">Đăng xuất</a>
                    </li>
            <?php 
                }else{
            ?>
                    <li>
                        <span><i class="fas fa-sign-in-alt"></i></span>
                        <a href="{{ route('login') }}">Đăng nhập</a>
                    </li>
                    <li>
                        <span><i class="fas fa-user-plus"></i></span>
                        <a href="{{ route('register') }}">Đăng ký</a>
                    </li>
            <?php
                }
            ?>
                    <li>
                        <span><i class="fas fa-home"></i></span>
                        <a href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li>
                        <span><i class="fas fa-book"></i></span>
                        <a href="{{ route('course') }}">Khoá học</a></li>
                </ul>
            </div>     
        </div>
    </div>
    <script>
        var bgmShow = document.getElementById('bgmShow');
        var menuMobile = document.getElementById('menuMobile');
        var body = document.getElementById('body');
        var navBar = document.getElementById('navBar');
        // open menu
        let openMenu = () => {
            bgmShow.style.display = 'block';
            body.className = 'stop-scrolling';
        }
        
        // close Menu
        let closeMenu = () => {
            bgmShow.style.display = 'none';
            body.className = '';
        }

        // Scroll Menu -> fixed

        let scrollMenu = (event) => {
            var x = document.documentElement.scrollTop || document.body.scrollTop;
            if(x > 150){
                navBar.style.background = 'black'
                navBar.style.marginTop = '-14px'
            }else{
                navBar.style.background = ''
                navBar.style.marginTop = ''
            }
        }
    </script>
</body>
</html>