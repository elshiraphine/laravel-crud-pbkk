<?php

use App\Http\Controllers\AnnouncementController;
use App\Models\Announcement;
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
Route::get('/', [AnnouncementController::class, 'index'])->name('home');
// Route::get()
Route::get('/buat', [AnnouncementController::class, 'create'])->name('announcement.tambah-data');
Route::post('/buat-data', [AnnouncementController::class, 'store'])->name('announcement.buat-data');

// edit
Route::get('/edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement.edit');
Route::post('/update/{id}', [AnnouncementController::class, 'update'])->name('announcement.update');

// delete
Route::delete('/delete/{id}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');

// show
Route::get('/detail/{id}', [AnnouncementController::class, 'show'])->name('announcement.show');
