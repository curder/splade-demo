<?php

namespace App\Http\Controllers;

use App\Actions;
use App\Http\Requests\Product\Files\StoreRequest;
use App\Models\ProductFile;
use App\Tables\ProductFiles;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\DB;
use ProtoneMedia\Splade\Facades\Toast;

class ProductFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('product.files.index', [
            'product_files' => ProductFiles::build(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('product.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        DB::beginTransaction();
        pipe($request, [
            Actions\ProductFile\Store::class,
            Actions\ProductFile\Store\CalculateTheNumberOfRows::class,
        ]);
        DB::commit();

        return redirect()->to($request->header('referer'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param ProductFile                      $file
     * @param \App\Actions\ProductFile\Destroy $action
     *
     * @return RedirectResponse
     */
    public function destroy(ProductFile $file, Actions\ProductFile\Destroy $action): RedirectResponse
    {
        $action->handle($file);

        Toast::success(__('Delete success'))->autoDismiss(5);

        return redirect()->to(request()->header('referer'));
    }

    public function import(ProductFile $file, Actions\ProductFile\Import $action)
    {
        $action->handle($file);

        return redirect()->route('product-files.index');
    }
}
