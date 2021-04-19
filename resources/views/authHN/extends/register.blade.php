@extends('authHN/main_auth')
@section('main_auth')
    <h1 class="auth__container__form-form__heading">Đăng ký thành viên</h1>
    <p class="auth__container__form-form_subheading">I-TECH là cộng đồng học lập trình thực tế miễn phí. Đăng nhập để cùng nhau học tập, đóng góp và chia sẻ kiến thức ❤️</p>
    <div class="heading__login">
        <button class="btn btn-google">
            <i class="fab fa-google"></i>
            <span class="text-btn">Đăng ký với Google</span>
        </button>
        <button class="btn btn-facebook">
            <i class="fab fa-facebook-square"></i>
            <span class="text-btn">Đăng ký với Facebook</span>
        </button>
        <p class="auth__container__form-form_subheading mt-10">Mẹo: Đăng ký nhanh hơn với Google hoặc Facebook!</p>
        <p class="mt-24 auth__container__form-form_subheading auth__container__form-form_subheading-or">
            
            <span class="or-heading">HOẶC</span>
        </p>

        <div class="form__login mt-24">
            <form action="{{ route('postRegister') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="fullname">Họ và tên</label>
                    <input class="form-input" required type="text" name="name" placeholder="VD: Nguyễn Văn Hải">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-input" required type="text" name="email" placeholder="VD: nguyenvanhai@gmail.com">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Mật khẩu</label>
                    <input id="fPass" class="form-input" required type="password" name="password"  placeholder="Nhập mật khẩu">
                    <span class="password-hide"><i onclick=hidePass() class="far fa-eye-slash" id="eHide"></i></span>
                    <span class="form-message"></span>
                </div>
                <!-- CHECK -->
                <div class="form-group box__group">
                    <span class="box__group__item box__group__item-ticker">
                        <input type="checkbox">
                    </span>
                    <span class="box__group__item box__group__item-text">
                        Nhận thông báo về các tin tức & sự kiện mới nhất của chúng tôi. (Có thể hủy đăng ký bất cứ lúc nào.)
                    </span>
                </div>
                <span style="color: blue"><?php
                    $statusRegister = Session::get('statusRegister');
                    if($statusRegister){
                        echo $statusRegister;
                        Session::put('statusRegister', null);
                    }
                ?></span>
                <button class="btn btn-login" type="submit">
                    <span class="text-btn">Đăng ký</span>
                </button>
                <p class="mt-24 auth__container__form-form_subheading fogot__pass">
                Bằng cách đăng ký, bạn đồng ý với các
                    <a href="#">điều khoản sử dụng</a>
                của chúng tôi
                </p>
            </form>
        </div>
    </div>
</div>
<div class="auth__container__help">
    <p>Bạn đã có tài khoản?
        <a class="text-relog" href="{{ route('login') }}">Đăng nhập</a>
    </p>
@endsection