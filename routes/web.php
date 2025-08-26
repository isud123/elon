<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\NewsController; // เพิ่มบรรทัดนี้

    Route::get('/', function () {
        return view('welcome');
    });

    // แก้ไข Route ให้เรียกใช้ NewsController
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
