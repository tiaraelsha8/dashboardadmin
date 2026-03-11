<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDatasetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:200'],
            'name' => ['required', 'string', 'max:200', 'unique:ckan_datasets,name'],
            'notes' => ['required', 'string', 'max:10000'],
            'owner_org' => ['required', 'string', 'exists:ckan_organizations,id'],
            'license_id' => ['nullable', 'string'],
            'private' => ['nullable', 'boolean'],
            'tags' => ['nullable', 'string', 'max:500'],
            'resources' => ['nullable', 'array'],
            'resources.*.name' => ['nullable', 'string', 'max:200'],
            'resources.*.format' => ['nullable', 'string', 'max:50'],
            'resources.*.description' => ['nullable', 'string', 'max:1000'],
            'extras' => ['nullable', 'array'],
            'extras.*.key' => ['nullable', 'string', 'max:100'],
            'extras.*.value' => ['nullable', 'string', 'max:500'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul dataset wajib diisi',
            'name.required' => 'Nama dataset wajib diisi',
            'notes.required' => 'Deskripsi wajib diisi',
            'owner_org.required' => 'Organisasi wajib dipilih',
            'owner_org.exists' => 'Organisasi tidak valid',
        ];
    }
}