<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Models\Mission;


Route::get('/', function () {
    $missions = Mission::all(); // Obtém todas as missões
    return view('welcome', compact('missions'));
});
Route::get('/loja', function () {
    return view('loja');
})->name('loja');
Route::get('/premiacoes', function () {
    return view('premiacoes');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/missao/final', function () {
    return view('vsl');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $missions = Mission::all(); // Obtém todas as missões
        return view('welcome', compact('missions'));
    })->name('dashboard');

    Route::get('/dashboard/mission/{id}', [MissionController::class, 'show'])->name('mission');
    Route::post('/dashboard/mission/complete/{id}', [MissionController::class, 'processMission'])->name('complete.mission');
    Route::post('/dashboard/saque/process}', [MissionController::class, 'processSaque'])->name('process.saque');

});
