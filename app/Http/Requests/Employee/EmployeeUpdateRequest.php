<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'department_id' => 'integer',
            'type_id' => 'integer',
            'first_name' => 'string|max:255',
            'middle_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'b_day' => 'date',
            'start_work' => 'date',
            'rank' => 'string',
        ];
    }
}
