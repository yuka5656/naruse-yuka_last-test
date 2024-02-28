@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/manager.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('header')
@if (Auth::check())
<form class="header-item" method="post" action="/logout">
@csrf
    <button class="header-submit" type="submit" >logout</button>
</form>
@endif

@endsection

@section('content')
<div class="contact-form__header">
    <div class="contact-form__header-logo">
        <h2>Admin</h2>
    </div>
</div>

<div class="admin-form__content">
    <form class="admin-form__select" action="">
        <input class="admin-form__search" type="text" name="search" size="50" placeholder="名前やメールアドレスを入力せてください">
        <button style="border:none"><span class="material-symbols-outlined">search</span></button>

        <select class="form-select__all" name="all" id="">
            <option value="全て">全て</option>
            <option value="お名前">お名前</option>
            <option value="性別">性別</option>
            <option value="メールアドレス">メールアドレス</option>
        </select>

        <select class="form-select" name="select" id="">
            <span class="form-select__item"></span>
            <option value="お問い合わせの種類">お問い合わせの種類</option>
            <option value="商品のお届け">商品のお届けについて</option>
            <option value="交換について">商品の交換について</option>
            <option value="商品トラブル">商品トラブル</option>
            <option value="ショップにお問い合わせ">ショップへのお問い合わせ</option>
            <option value="その他">その他</option>
        </select>
        <input class="form__date" type="date" value="">
    </form>
</div>

<div class="admin-form">
    <div class="admin-form__item">
        <button class="admin-form__item-submit" type="submit">エクスポート</button>
    </div>


    <div class="admin-table">
        <table class="admin-table__inner">
            <tr class="admin-table__row">
                <th class="admin-table__header">お名前</th>
                <th class="admin-table__header">性別</th>
                <th class="admin-table__header">メールアドレス</th>
                <th class="admin-table__header">お問い合わせの種類</th>
                <th class="admin-table__header-submit"></th>
            </tr>
            <tr class="admin-table__row">
                <td></td>
                <!-- <td></td>
                <td></td>
                <td></td>
                <td></td> -->
            </tr>
        </table>
    </div>
</div>

<div class="admin-form__last">
    <form action="" class="admin-form__last-submit">
        <button type="submit" >リセット</button>
    </form>
</div>
@endsection