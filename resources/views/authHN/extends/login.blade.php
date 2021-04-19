@extends('authHN/main_auth')
@section('main_auth')
    <h1 class="auth__container__form-form__heading">Thành viên đăng nhập</h1>
    <p class="auth__container__form-form_subheading">I-TECH là cộng đồng học lập trình thực tế miễn phí. Đăng nhập để cùng nhau học tập, đóng góp và chia sẻ kiến thức ❤️</p>
    <div class="heading__login">
        <button class="btn btn-google">
            <i class="fab fa-google"></i>
            <span class="text-btn">Đăng nhập với Google</span>
        </button>
        <button class="btn btn-facebook">
            <i class="fab fa-facebook-square"></i>
            <span class="text-btn">Đăng nhập với Facebook</span>
        </button>
        <p class="auth__container__form-form_subheading mt-10">Mẹo: Đăng nhập nhanh hơn với Google hoặc Facebook!</p>
        <p class="mt-24 auth__container__form-form_subheading auth__container__form-form_subheading-or">
            <span class="or-heading">HOẶC</span>
        </p>
            <div class="form__login mt-24">
                <form action="{{ route('postLogin') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-input" required type="text" name="email" placeholder="VD: nguyenvanhai@gmail.com">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Mật khẩu</label>
                        <input id="fPass" class="form-input" required type="password" name="password"  placeholder="Nhập mật khẩu">
                        <span class="password-hide"><i onclick=hidePass() class="far fa-eye-slash" id="eHide"></i></span>
                        <span class="form-message">
                            <?php
                                $message = Session::get('message');
                                if($message){
                                    echo $message;
                                    Session::put('message',null);
                                }else echo "";
                            ?>
                        </span>
                    </div>
                    <button class="btn btn-login" type="submit">
                        
                        <span class="text-btn">Đăng nhập</span>
                    </button>
                    <p class="mt-24 auth__container__form-form_subheading fogot__pass">
                    
                        <a href="{{ route('reset') }}">Quên mật khẩu?</a>
                    </p>
                </form>
            </div>
    </div>
    </div>
    <div class="auth__container__help">
    <p>Bạn chưa có tài khoản?<br>
        <a class="text-relog" href="{{ route('register') }}">Đăng ký trải nghiệm miễn phí ngay!</a>
    </p>
@endsection