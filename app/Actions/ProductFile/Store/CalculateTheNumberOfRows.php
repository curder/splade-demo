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

    public function handle(array $payload, Closure $next)
    {
        /** @var ProductFile $file */
        [$file] = $payload;

        $filename = collect([
            Arr::get(array: config('filesystems'), key: 'disks.' . $file->disk . '.root'),
            $file->file_name
        ])->join('/');

        $count = $file->lazy_content->count();
//        $count = LazyCollection::make(function() use ($filename) {
//            $handle = fopen(filename: $filename, mode: 'r');
//
//            while(($line = fgets($handle)) !== false) {
//                yield $line;
//            }
//        })->count();

        $file->number_of_rows = $count;

        $file->save();
    }
}
