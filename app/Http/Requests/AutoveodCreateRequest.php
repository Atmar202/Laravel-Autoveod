<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutoveodCreateRequest extends FormRequest
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
            //
        ];
    }

    public function validation()
    {
        return [
            'algus.max' => 'Algus ei peaks olema rohkem, kui 50 tähte.',
            'otspunkt.max' => 'Otspunkt ei peaks olema rohkem, kui 50 tähte.',
            'aeg.max' => 'Aeg ei peaks olema rohkem, kui 50 tähte.',
        ];
    }
}
