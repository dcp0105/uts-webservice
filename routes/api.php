<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/quran/format/json/surat', [\App\Http\Controllers\WrapperApiController::class, 'mail'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('mail');
Route::get('/quran/format/json/surat/5', [\App\Http\Controllers\WrapperApiController::class, 'nomor'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('nomor');
Route::get('/quran/format/json/surat/1/ayat/2', [\App\Http\Controllers\WrapperApiController::class, 'ayat'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('ayat');
Route::get('/quran/format/json/surat/3/ayat/190-193/bahasa/ar,id', [\App\Http\Controllers\WrapperApiController::class, 'bahasa'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('bahasa');
Route::get('/quran/format/json/bahasa', [\App\Http\Controllers\WrapperApiController::class, 'daftarbahasa'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('daftarbahasa');

Route::get('user/identitas', function () {
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006065',
            'nama' => 'Defri Crisna Pramudi',
            'email' => '197006065@student.unsil.ac.id'
        ]
    ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('identitas');