<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductFilesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('splade')->group(function () {
    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        $overviews = Product::query()->pluck('overview')->map(fn($overview) => $overview->keys())->flatten()->unique()->values();
        dd($overviews);


        return view('welcome');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', DashboardController::class)
             ->middleware(['verified'])
             ->name('dashboard');

        Route::post('product/files/{file}/import', [ProductFilesController::class, 'import'])
             ->name('product-files.import');
        Route::resource('/product/files', ProductFilesController::class)
            ->only(['index', 'create', 'store', 'destroy'])
             ->names('product-files');
        Route::resource('products', ProductsController::class)
             ->only('index', 'update')
             ->names('products');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});
