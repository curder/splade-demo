<?php
namespace App\Actions\ProductFile;

use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Http\Requests\Product\Files\StoreRequest;
use App\Actions\ProductFile\Store\{Store as StoreDB,
    CalculateTheNumberOfRows
};

class Store
{
    use AsAction;

    public function handle(StoreRequest $request) : void
    {
        DB::beginTransaction();
        pipe($request, [
            StoreDB::class,
            CalculateTheNumberOfRows::class,
        ]);
        DB::commit();
    }
}
