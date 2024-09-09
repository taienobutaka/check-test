<?php

namespace App\Http\Requests;

use App\Http\Requests\ContactRequest;

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
        'first_name' => ['required'],
        'last_name' => ['required',],
        'gender' => ['required'],
        'email' => ['required',  'email'],
        'tel' => ['required', 'string|regex:/^[0-9]{1,5}$/'],
        'address' =>  ['required',],
        'inquiry => ['required','max:120'],
        'inquiry_type' =>  ['required'],
        'inquiry_content' =>  ['required'],
        ];
    }

    public function messages()
    {
        return [
        'first_name.required' =>'名を入力してください',
        'last_name.required' => '姓を入力してください',
        'gender.required' => '性別を選択してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.email' => '正しいメールアドレスの形式で入力してください',
        'tel.required' => '電話番号を入力してください',
        'phone_number.digits_between' => '電話番号を5桁までの数字で入力してください',
        'phone_number.regex' => '電話番号は半角数字、ハイフンなしで入力してください',
        'address.required' => '住所を入力してください',
        'inquiry_type.required' => 'お問い合わせの種類を選択してください',
        'inquiry_content.required' => 'お問い合わせ内容を入力してください',
        'inquiry.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
