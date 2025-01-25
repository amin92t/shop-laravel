<?php

namespace App\Http\Requests\Admin\Content;

use Illuminate\Foundation\Http\FormRequest;

class PostCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd('Hi');
        if ($this->isMethod('post')) {

            return [
                'name' => 'required|max:120|min:2',
                'description' => "required|max:200|min:15",
                'slug' => 'nullable',
                'image' => 'required',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required|max:120|min:3'
            ];
        } else {

            return [
                'name' => 'required|max:120|min:2',
                'description' => "required|max:200|min:15",
                'slug' => 'nullable',
                'image' => '',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required|max:120|min:3'
            ];
        }
    }

    // public function attributes(){
    //     return [
    //         'name' => 'نام دسته بندی',
    //         'description' => "توضیحات",
    //         'image' => 'تصویر',
    //         'status' => 'وضعیت',
    //         'tags' => 'تگ ها'
    //     ];
    // }
}
