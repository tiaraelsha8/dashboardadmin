<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadResourceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'package_id' => ['required', 'string'],
            'name' => ['required', 'string', 'max:200'],
            'format' => ['required', 'string', 'max:50'],
            'description' => ['nullable', 'string', 'max:1000'],
            'upload' => ['nullable', 'file', 'max:' . (config('ckan.max_file_size') / 1024)],
            'url' => ['nullable', 'url', 'required_without:upload'],
        ];
    }

    public function messages(): array
    {
        return [
            'package_id.required' => 'Dataset ID wajib diisi',
            'name.required' => 'Nama resource wajib diisi',
            'format.required' => 'Format file wajib diisi',
            'upload.max' => 'Ukuran file terlalu besar (max ' . (config('ckan.max_file_size') / 1048576) . 'MB)',
            'url.required_without' => 'URL atau file upload wajib diisi',
        ];
    }
}