@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form">
    <div class="contact-form__logo">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
    @csrf
        <div class="form__group">
            <table>
                <tr>
                    <th>お名前<span>※</span></th>
                    <td class="form__group-item">
                        <input class="input" type="text" name="first_name" placeholder="例: 山田" value="{{ old('first_name') }}">
                        <input class="input" type="text" name="last_name" placeholder="例: 太郎" value="{{ old('last_name') }}">
                    </td>
                </tr>
                <tr class="form-error">
                    <td colspan="2">
                        @error('first_name')
                        {{ $message }}
                        @enderror
                        @error('last_name')
                        {{ $message }}
                        @enderror
                    </td>
                </tr>

                <tr>
                    <th>性別<span>※</span></th>
                    <td class="form__group-inner">
                        <input class="checked" type="radio" name="gender" checked="checked" value="1" {{ old('gender') == '1' ? 'checked' : '' }}><label>男性</label>
                        <input class="checked" type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}><label>女性</label>
                        <input class="checked" type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}><label>その他</label>
                    </td>
                </tr>
                <tr class="form-error">
                    <td colspan="2">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </td>
                </tr>

                <tr>
                    <th>メールアドレス<span>※</span></th>
                    <td class="form__group-inner">
                        <input class="form-input"  type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                    </td>
                </tr>
                <tr class="form-error">
                    <td colspan="2">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </td>
                </tr>

                <tr>
                    <th>電話番号<span>※</span></th>
                    <td class="form__group-inner">
                        <input class="form__item-tell" type="tell" name="tell-1" placeholder="080"  value="{{ old('tell-1') }}">
                        -
                        <input class="form__item-tell" type="tell" name="tell-2" placeholder="1234" value="{{ old('tell-2') }}">-
                        <input class="form__item-tell" type="tell" name="tell-3" placeholder="5678"
                        value="{{ old('tell-3') }}">
                    </td>
                </tr>
                    <tr class="form-error">
                        <td colspan="2">
                            @error('tell-1')
                            {{ $message }}
                            @enderror
                            @error('tell-2')
                            {{ $message }}
                            @enderror
                            @error('tell-3')
                            {{ $message }}
                            @enderror
                        </td>
                    </tr>

                <tr>
                    <th>住所<span>※</span></th>
                    <td class="form__group-inner">
                        <input class="form-input"  type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                    </td>
                </tr>
                <tr class="form-error">
                    <td colspan="2">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </td>
                </tr>

                <tr>
                    <th>建物名</th>
                    <td class="form__group-inner">
                        <input class="form-input"  type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
                    </td>
                </tr>

                <tr>
                    <th>お問い合わせの種類<span>※</span></th>
                    <td class="form__group-inner">
                        <div class="select-box">
                            <select class="select-box__item" name="content">
                                <option>選択してください</option>
                                <option name="category_id" value="1" @if( old('content') === '商品のお届けについて') selected @endif>商品のお届けについて</option>
                                <option name="category_id" value="2" @if( old('content') === '商品の交換について') selected @endif>商品の交換について</option>
                                <option name="category_id" value="3" @if( old('content') === '商品トラブル') selected @endif>商品トラブル</option>
                                <option name="category_id" value="4" @if( old('content') === 'ショップへのお問い合わせ') selected @endif>ショップへのお問い合わせ</option>
                                <option name="category_id" value="5" @if( old('content') === 'その他') selected @endif>その他</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr class="form-error">
                    <td colspan="2">
                        @error('category_id')
                        {{ $message }}
                        @enderror
                    </td>
                </tr>

                <tr>
                    <th class="form-item" valign="top">お問い合わせ内容<span>※</span></th>
                    <td class="form__group-inner">
                    <textarea name="detail" id="" cols="50" rows="5" placeholder="お問い合わせ内容をご記入ください">{{ old('detail') }}</textarea>
                    </td>
                </tr>
                <tr class="form-error">
                    <td colspan="2" >
                        @error('detail')
                        {{ $message }}
                        @enderror
                    </td>
                </tr>
            </table>
        </div>
            <div class="form-under__button">
                <button class="form-under__button-submit" type="submit">確認画面</button>
            </div>
    </form>
</div>
@endsection