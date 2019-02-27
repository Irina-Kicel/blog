<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminArticleRequest extends FormRequest
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

                'title' => 'required|max:255',
                'text' => 'required',
                'announce' => 'required'
        ];
    }



    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();
        $validator->sometimes('slug', 'unique:articles|max:255', function ($input) {
            return !empty($input->slug);
        });
        return $validator;
    }
}
