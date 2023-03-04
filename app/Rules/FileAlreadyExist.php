<?php

namespace App\Rules;

use App\Models\ProductFile;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\UploadedFile;

class FileAlreadyExist implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string      $attribute
     * @param UploadedFile $value
     *
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return ProductFile::query()
                          ->where(
                              'hash',
                              file_hash($value->getRealPath())
                          )->doesntExist();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'This file is already uploaded';
    }
}
