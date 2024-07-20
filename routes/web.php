<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\PemusnahanController;
use App\Http\Controllers\FilePondUploadController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::controller(HomeController::class)->group( function () {
        Route::get('/', 'index')->name('dashboard');
        // * fetch data chart js
        Route::get('chart-pie', 'getDataChartPie')->name('chart.pie.get');
        Route::get('chart-bar', 'getDataChartBar')->name('chart.bar.get');
        Route::get('chart-bar-year', 'getDataChartBar1')->name('chart.bar1.get');
        // * query data
        Route::get('arsip/query', 'getDataWhere')->name('arsip.get.tahun');
        Route::get('arsip/data/{where}', 'arsipWhere')->name('arsip.get.where');
    });

    // * disposisi
    Route::controller(DisposisiController::class)->group( function () {
        Route::get('disposisi', 'index')->name('disposisi.index');
        Route::get('disposisi/create', 'create')->name('disposisi.create');
        Route::post('disposisi', 'store')->name('disposisi.store');
        Route::delete('disposisi/{disposisi}', 'destroy')->name('disposisi.destroy');
    });

    // * arsip
    Route::resource('arsip', ArsipController::class)->only([
        'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
    ]);

    Route::prefix('arsip')->controller(ArsipController::class)->group( function () {
        Route::get('download/{arsip}', 'download')->name('arsip.donwload');
        Route::get('file/show', 'showFile')->name('arsip.show.file');
        Route::get('search/nomor', 'search')->name('arsip.search.data');
    });

    // * filepond
    Route::controller(FilePondUploadController::class)->group( function () {
        Route::post('upload', 'upload')->name('filepond.upload.post');
        Route::delete('upload', 'destroy')->name('filepond.upload.delete');
    });

    Route::prefix('pemusnahan')->controller(PemusnahanController::class)->group(function () {
        Route::get('/', 'index')->name('pemusnahan.index');
        Route::get('/{arsip}', 'show')->name('pemusnahan.show');
        Route::post('restore/{arsip}', 'restore')->name('pemusnahan.restore');
        Route::delete('/{arsip}', 'destroy')->name('pemusnahan.destroy');
    });
});

