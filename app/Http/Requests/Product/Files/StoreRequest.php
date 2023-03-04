<?php

namespace App\Http\Requests\Product\Files;

use App\Rules\FileAlreadyExist;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Http\FormRequest;
use ProtoneMedia\Splade\FileUploads\HasSpladeFileUploads;

/**
 * @property \Illuminate\Http\UploadedFile $file
 */
class StoreRequest extends FormRequest implements HasSpladeFileUploads
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() : array
    {
        return [
            'file' => [
                'required',
                'file',
                'mimes:csv,json',
                new FileAlreadyExist,
            ],
        ];
    }
}
