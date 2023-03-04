<?php

namespace App\Actions\ProductFile\Store;

use App\Models\ProductFile;
use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\LazyCollection;
use Lorisleiva\Actions\Concerns\AsAction;

class CalculateTheNumberOfRows
{
    use AsAction;

    public function handle(array $payload, Closure $next) : void
    {
        /** @var ProductFile $file */
        [$file] = $payload;

        $file->number_of_rows = $file->lazy_content->count();

        $file->save();
    }
}
