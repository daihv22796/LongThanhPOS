@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 2%">
                <div class="card" style="width: 40rem;">
                    <div class="card-body">
                        <h4 class="card-title">Xác minh địa chỉ email</h4>
                        @if (session('resent'))
                            <p class="alert alert-success" role="alert">Link đã được gửi đến mail! Vui lòng kiểm tra để khôi phục mật khẩu</p>
                        @endif
                        <p class="card-text">Before proceeding, please check your email for a verification link.If you
                            did not receive the email,Trước khi bắt đầu, hãy kiểm tra email.bạn nếu không nhận được mail</p>
                        <a href="{{ route('verification.resend') }}">hãy nhấn vào đây để gửi lạir</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection