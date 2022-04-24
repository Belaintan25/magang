<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PesertaController;
Route::resource('pesertas', PesertaController::class);

Route::get('/', [PesertaController::class, 'create'])->name('daftar');

use App\Http\Controllers\DivisiController;
Route::resource('divisis', DivisiController::class);

use App\http\Controllers\Auth\AuthController;
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('pesertas-pdf', [PesertaController::class, 'exportPdf'])->name('pesertas-pdf');

Route::get('send-mail', function () {
 
    $details = [
    'title' => 'Mail from belaintan258@gmail.com',
    'body' => 'This is for testing email using smtp',
    ];
    
    Mail::to('belaintan258@gmail.com')->send(new \App\Mail\MyTestMail($details));
    
    dd("Email is Sent.");
   });

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

// Route::get('/', function () {
//     return view('welcome');
// });
