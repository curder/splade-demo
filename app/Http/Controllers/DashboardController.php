<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $overviews = Splade::onLazy(fn() => $this->getJsonKeys('overview'));
        $prices = Splade::onLazy(fn() => $this->getJsonKeys('price'));
        $attributes = Splade::onLazy(fn () => $this->getJsonKeys('attributes'));
        $exports = Splade::onLazy(fn () => $this->getJsonKeys('export'));
        $additionals = Splade::onLazy(fn () => $this->getJsonKeys('additional'));

        return view('dashboard', compact(
            'overviews',
            'prices',
            'attributes',
            'exports',
            'additionals',
        ));
    }

    public function getJsonKeys(string $column)
    {
        return Product::query()->pluck($column)->filter()->map->keys()->flatten()->unique()->values();
    }
}
