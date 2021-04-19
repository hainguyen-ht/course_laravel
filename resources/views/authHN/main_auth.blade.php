<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('frontend') }}/">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="assets/fonts/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Đăng nhập I-TECH</title>
</head>
<body>
    <div class="app">
        <div class="auth__header">
            <div class="auth__header__content">
                <a href="{{ route('home') }}">
                    <img src="img/logo.png" alt="I-TECH">
                </a>
            </div>
        </div>
        <div class="auth__container">
            <div class="auth__container__box">
                <div class="auth__container__form">
    @yield('main_auth')
    </div>
            </div>
        </div>
    </div>
    <script>
        var ePass = document.getElementById('fPass')
        var eHide = document.getElementById('eHide');

        var hidePass = function(){
            var status  = ePass.type;
            
            if(status === 'text'){
                ePass.type = 'password'
                eHide.className = 'far fa-eye-slash'
            }else{
                ePass.type = 'text'
                eHide.className = 'far fa-eye'
            }
            // status = (status === 'text') ? 'password' : 'text'
        }
    </script>
</body>
</html>