<?php

namespace App\Actions\ProductFile;

use App\Jobs\ProductFileProcess;
use App\Models\Product;
use App\Models\ProductFile;
use Illuminate\Support\Facades\Bus;
use Lorisleiva\Actions\Concerns\AsAction;
use function GuzzleHttp\Promise\inspect;

class Import
{
    use AsAction;

    /**
     * @param \App\Models\ProductFile $file
     *
     * @throws \Throwable
     */
    public function handle(ProductFile $file)
    {
        $batch = Bus::batch([]);

        $file->lazy_content
                ->chunk(1000)
                ->map(
                    fn($lines) => collect($lines)->map(
                        fn($line) => array_merge($line, [
                            'photo' => explode(' ', $line['photo']),
                            'category_id' => $file->category_id,
                            'category_name' => $file->category_name,
                        ])
                    )
                )->each(function($item) use ($batch){
                    $batch->add(new ProductFileProcess($item));
                });

        $batch->then(
            fn() => $file->update(['imported' => true])
        )->dispatch();
    }
}
