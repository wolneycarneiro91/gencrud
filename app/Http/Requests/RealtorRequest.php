<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RealtorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
