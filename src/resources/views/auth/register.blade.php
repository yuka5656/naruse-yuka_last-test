@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/enroll.css') }}">
@endsection

@section('header')
<form class="header-item" >
@csrf
    <a class="header-submit" type="submit" href="/login">login</a>
</form>
@endsection

@section('content')

<div class="content-form">
    <div class="contact-form__logo">
        <h2>Register</h2>
    </div>
    <div class="content-form__item">
        <form action="/register" class="form" method="post">
        @csrf
            <div class="form__group">
                <div class="from__group-title">
                    <h3>お名前</h3>
                </div>
                <div class="form__group-content">
                    <div class="form__group--text">
                        <input type="text" name="name" placeholder="例: 山田 太郎" value="{{ old('name') }}" />
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="from__group-title">
                    <h3>メールアドレス</h3>
                </div>
                <div class="form__group-content">
                    <div class="form__group--text">
                        <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="from__group-title">
                    <h3>パスワード</h3>
                </div>
                <div class="form__group-content">
                    <div class="form__group--text">
                        <input type="password" name="password" placeholder="例: coachtech1106">
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="from__group-title">
                    <h3>確認用パスワード</h3>
                </div>
                <div class="form__group-content">
                    <div class="form__group--text">
                        <input type="password" name="password_confirmation" placeholder="もう一度入力してください">
                    </div>
                </div>
            </div>
            <div class="form__group-bottom">
                <button class="form__group-submit" type="submit">登録</button>
            </div>
        </form>
    </div>
    
@endsection