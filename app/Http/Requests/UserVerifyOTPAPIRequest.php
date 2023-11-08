<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UserVerifyOTPAPIRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'temp_access_token' => 'required',
            'otp' => 'required|min:6|max:6'
        ];
    }

    public function failedValidation(Validator $validator){

        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'errors'      => $validator->errors()
        ]));

    }

    public function messages()
    {
        return [
            'temp_access_token.required' => 'Temporary account token is required!',
            'otp.min:6' => 'OTP must be 6 digit',
            'otp.max:6' => 'OTP must be 6 digit',
        ];
    }
}
