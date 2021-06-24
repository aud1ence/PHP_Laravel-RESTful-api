<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::prefix('customers')->group(function (){
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.list');
    Route::get('/customers/{customerId}', [CustomerController::class, 'show'])->name('customers.show');
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
    Route::put('/customers/{customerId}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/customers/{customerId}', [CustomerController::class, 'destroy'])->name('customer.destroy');
//});
