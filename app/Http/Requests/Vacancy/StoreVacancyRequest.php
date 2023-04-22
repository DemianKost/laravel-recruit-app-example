<?php

namespace App\Http\Requests\Vacancy;

use Illuminate\Foundation\Http\FormRequest;

class StoreVacancyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:15|max:140',
            'description' => 'required|string|min:150|max:5000',
            'salary_from' => 'required|integer',
            'salary_to' => 'required|integer',
            'programmingLanguages' => 'required',
            'workTypes' => 'required',
            'devLevels' => 'required'
        ];
    }
}
