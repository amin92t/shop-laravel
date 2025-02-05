<?php

namespace App\Http\Requests\Admin\Content;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     
      
        if ($this->isMethod('post')) {

            return [
                'title' => 'required|max:120|min:2',
                'summary' => "required|max:200|min:15",
                'post_category' => 'required|min:1|max:1000000|exists:post_categories,id',
                'image' => 'required|image|mimes:jpg,png,jpeg',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required|max:120|min:3',
                'body' => 'required|max:2000|min:15',
                'published_at' => 'required|numeric'
            ];
        } else {

            return [
                'title' => 'required|max:120|min:2',
                'summary' => "required|max:200|min:15",
                'post_category' => 'required|min:1|max:1000000|exists:post_categories,id',
                'image' => 'image|mimes:jpg,png,jpeg',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required|max:120|min:3',
                'body' => 'required|max:2000|min:15',
                'published_at' => 'numeric'
            ];
        }

    }
}
