<?php

namespace App\Actions\ProductFile\Destroy;

use Closure;
use Lorisleiva\Actions\Concerns\AsAction;

class DatabaseRecord
{
    use AsAction;

    public function handle(array $payload, Closure $next)
    {
        /** @var boolean $bool */
        /** @var \App\Models\ProductFile $file */
        [$bool, $file] = $payload;

        if ($bool) {
            $file->delete();
        }

        return $next([]);
    }
}
