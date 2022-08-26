<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationFromRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'phone_no'=>['reqquired'],
            'num_of_people'=>['reqquired'],
            'date'=>['reqquired'],
            'email'=>['reqquired'],
            'message'=>['reqquired'],
            'branch'=>['reqquired'],
            'event'=>['reqquired'],
        ];
    }
}
