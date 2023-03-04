<?php

namespace App\Actions\ProductFile\Destroy;

use App\Models\ProductFile;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Lorisleiva\Actions\Concerns\AsAction;

class File
{
    use AsAction;

    public function handle(ProductFile $file, Closure $next)
    {
        return $next([
            Storage::disk($file->disk)->delete($file->file_name),
            $file,
        ]);
    }
}
