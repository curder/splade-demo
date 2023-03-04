<?php

namespace App\Actions\ProductFile;

use App\Http\Requests\Product\Files\StoreRequest;
use App\Models\ProductFile;
use Closure;
use Illuminate\Http\UploadedFile;
use Lorisleiva\Actions\Concerns\AsAction;

class Store
{
    use AsAction;

    public function handle(StoreRequest $request, Closure $next)
    {
        $disk = 'public';
        $file = $request->file;

        $origin_name = $file->getClientOriginalName();
        $file_name = $file->store('', compact('disk'));
        $file_size = $file->getSize();

        return $next([
            ProductFile::query()->create([
                'disk' => $disk,
                'origin_name' => $origin_name,
                'file_name' => $file_name,
                'file_size' => $file_size,
            ])
        ]);
    }
}
