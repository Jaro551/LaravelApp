<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name'=>'required',
            'surname'=>'required',
            'phone_number'=>'required | digits: 9',
            'email'=>'required | email',
            'address'=>'required',
            'date_of_birth'=>'required | before_or_equal:-18 years'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Musisz podać imie',
            'surname.required' => 'Musisz podać nazwisko',
            'phone_number.required' => 'Musisz podać numer telefonu',
            'phone_number.digits' => 'Podano nieprawidłowy numer telefonu',
            'email.required' => 'Musisz podać e-mail',
            'email.email' => 'Podano nieprawidłowy e-mail',
            'address.required' => 'Musisz podać adres',
            'date_of_birth.required' => 'Musisz podać datę urodzenia',
            'date_of_birth.before_or_equal' => 'Musisz mieć skończone 18 lat',
        ];
    }
}
