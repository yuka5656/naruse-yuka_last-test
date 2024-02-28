<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required| string| max:255',
            'last_name' => 'required| string| max:255',
            'gender' => 'required',
            'email' => 'required| string| email| max:255',
            'tell-1' => 'required| string| max:5',
            'tell-2' => 'required| string| max:5',
            'tell-3' => 'required| string| max:5',
            'address' => 'required| string| max:255',
            // 'category_id' => 'required| notin:選択してください',
            'content' => 'required| notin:選択してください',
            'detail' => 'required| max:120',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '性を入力してください',

            'last_name.required' => '名を入力してください',

            'gender.required' => '性別を選択してください',

            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式でいれてください',

            'tell-1.required' => '左の電話番号を入力してくだい',
            'tell-1.max' => '電話番号は:max桁までの数字で入力してください',

            'tell-2.required' => '真ん中の電話番号を入力してくだい',
            'tell-2.max' => '電話番号は:max桁までの数字で入力してください',

            'tell-3.required' => '右の電話番号を入力してくだい',
            'tell-3.max' => '電話番号は:max桁までの数字で入力してください',

            'address.required' => '住所を入力してください',

            // 'category_id.notin' => 'お問い合わせの種類を選択してください',

            'content.notin' => 'お問い合わせの種類を選択してください',

            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は:max文字以内で入力してください',
        ];
    }
}
