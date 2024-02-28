@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/check.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__logo">
        <h2>Confirm</h2>
    </div>
    <form action="/contacts" method="post">
    @csrf
        <div class="confirm-table">
            <table class="confirm-table__content">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <?php
                            $first_name = $contact['first_name'];
                            $last_name = $contact['last_name'];
                            echo $first_name . ' ' .  $last_name;
                        ?>
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <?php
                            if ($contact['gender'] == '1') {
                                echo '男性';
                            } else if ($contact['gender'] == '2'){
                                echo '女性';
                            } else if ($contact['gender'] == '3'){
                                echo 'その他';
                            }
                        ?>
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input class="input-text" type="email" name="email" value="{{ $contact['email'] }}" readonly/>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <?php
                            $tell_top = $contact['tell-1'];
                            $tell_second = $contact['tell-2'];
                            $tell_third = $contact['tell-3'];
                            echo $tell_top . $tell_second . $tell_third;
                        ?>
                        <input class="input-text" type="hidden" name="tell-1" value="{{ $contact['tell-1'] }}">
                        <input class="input-text" type="hidden" name="tell-2" value="{{ $contact['tell-2'] }}"/>
                        <input class="input-text" type="hidden" name="tell-3" value="{{ $contact['tell-3'] }}"/>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input class="input-text" type="text" name="address" value="{{ $contact['address'] }}" readonly/>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input class="input-text" type="text" name="building" value="{{ $contact['building'] }}" readonly/>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input class="input-text" type="hidden" name="content" value="{{ $category['content'] }}" readonly>
                        <?php
                            if ($category['content'] == '1') {
                                echo '商品のお届けについて';
                            } else if ($category['content'] == '2'){
                                echo '商品の交換について';
                            } else if ($category['content'] == '3'){
                                echo '商品トラブル';
                            } else if ($category['content'] == '4'){
                                echo 'ショップへのお問い合わせ';
                            }else if ($category['content'] == '5'){
                                echo 'その他';
                            }
                            ?>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <textarea name="detail" cols="50" rows="3" readonly>{{ $contact['detail'] }}</textarea>
                    </td>
                </tr>
            </table>
        </div>
        <div class="confirm__submit-content">
            <button class="confirm__submit" type="submit">送信</button>
            <button class="confirm__submit-bottom" type="button" onclick="history.back(-1)">修正</button>
        </div>
    </form>

</div>
@endsection