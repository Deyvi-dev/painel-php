<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\JitsiController;

Route::get('/jitsi', [JitsiController::class, 'index'])->name('jitsi.index');
Route::get('/jitsi-config', [JitsiController::class, 'showConfigForm'])->name('jitsi.showConfigForm');
Route::post('/jitsi-config', [JitsiController::class, 'startMeeting'])->name('jitsi.startMeeting');


Route::get('/jitsi-render/{link}', [JitsiController::class, 'renderIframe'])->name('jitsi.renderIframe');

Route::get('/meet-link/{link}', [MeetingController::class, 'renderMeeting'])->name('meet-link');

use App\Http\Controllers\TeacherController;

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');

use App\Http\Controllers\MeetingController;

Route::get('/meet-link/{link}', [MeetingController::class, 'renderIframe'])->name('meet-link');
