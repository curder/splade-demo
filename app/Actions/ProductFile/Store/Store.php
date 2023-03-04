<?php

namespace App\Actions\ProductFile\Store;

use App\Http\Requests\Product\Files\StoreRequest;
use App\Models\ProductFile;
use Closure;
use Lorisleiva\Actions\Concerns\AsAction;

class Store
{
    use AsAction;

    public function handle(StoreRequest $request, Closure $next)
    {
        $file = $request->file;
        $disk = 'public';
        $origin_name = $file->getClientOriginalName();
        $file_name = $file->store('', compact('disk'));
        $file_size = $file->getSize();
        $hash = file_hash($file->getRealPath());

        return $next([
            ProductFile::query()->create([
                'disk' => $disk,
                'origin_name' => $origin_name,
                'file_name' => $file_name,
                'file_size' => $file_size,
                'hash' => $hash,
            ])
        ]);
    }
}
