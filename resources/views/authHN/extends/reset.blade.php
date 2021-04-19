@extends('authHN/main_auth')
@section('main_auth')
    <h1 class="auth__container__form-form__heading">Khôi phục mật khẩu</h1>
    
    <div class="heading__login">
        <div class="form__login mt-24">
            <div class="form-group mt-10">
                <label class="form-label" for="email">Email của bạn</label>
                <input class="form-input" required type="text" name="email" placeholder="VD: nguyenvanhai@gmail.com">
                <span class="form-message"></span>
            </div>
            <button class="btn btn-login">
                <span class="text-btn">Khôi phục mật khẩu</span>
            </button>
            <p class="mt-24 rs__text-login">
            
                <a class="text-relog" href="{{ route('login') }}">Đăng nhập</a>
            </p>
        </div>
    </div>
</div>
<div class="auth__container__help">
    <p>Bạn cần sự hỗ trợ?
        <a class="text-relog" href="./login.html">Gửi email cho chúng tôi</a>
    </p>
@endsection