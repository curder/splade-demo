<?php

namespace App\Actions\ProductFile;

use App\Models\ProductFile;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class Destroy
{
    use AsAction;

    public function handle(ProductFile $file) : void
    {
        DB::beginTransaction();

        pipe($file, [
            Destroy\File::class,
            Destroy\DatabaseRecord::class,
        ]);

        DB::commit();
    }
}
