@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/signin.css') }}">
@endsection

@section('header')
<form class="header-item">
    <a class="header-submit" type="submit" href="/register">register</a>
</form>
@endsection

@section('content')
<div class="content-form">
    <div class="contact-form__logo">
        <h2>Login</h2>
    </div>
    <div class="content-form__item">
        <form action="/login" class="form" method="post">
        @csrf
            <div class="form__group">
                <div class="from__group-title">
                    <h3>メールアドレス</h3>
                </div>
                <div class="form__group-content">
                    <div class="form__group--text">
                        <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="from__group-title">
                    <h3>パスワード</h3>
                </div>
                <div class="form__group-content">
                    <div class="form__group--text">
                        <input type="password" name="password" placeholder="例: coachtech1106" />
                        </div>
                </div>
            </div>
            <div class="form__group-bottom">
                <button class="form__group-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection