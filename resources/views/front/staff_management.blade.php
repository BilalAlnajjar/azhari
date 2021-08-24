@extends('layouts.front')

@section('content')
<div class="mx-auto">
    <div class="channel">
        <h4 class="channel-title text-center">إدارة شؤون الموظفين</h4>
        <!-- <hr style="
            width: 110px;
            margin-left: 730px;
            color: rgba(6, 30, 57, 1);
            border: 1px solid #000;
            margin-top: -5px;
        "> -->
</div>

    <form action="{{route('login')}}" method="post" class="mb-5">
        @csrf
    <div class="login">
                <div class="page-login">
                    <h1 class="login-title">تسجيل الدخول</h1>
                    <input class="form-control login-input" name="email" type="text" placeholder="Uesrname">
                    <input class="form-control login-input" name="password" type="text" value="password">
                    <a class="login-a" href="{{route('password.request')}}">...هل نسيت كلمة المرور</a>
                    <br>
                    <button type="submit"  style="border: none" class="login-a1">تسجيل الدخول</button>
                </div>>
    </div>
    </form>
</div>

@endsection
