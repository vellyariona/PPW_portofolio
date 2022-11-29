<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Http\Controllers\GreetController;
// use App\Http\Controllers\GalleryController;
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

Route::get('/', function () {
    return view('home');
});


Route::get('project/destroy/{id}',[App\Http\Controllers\project_controller::class,'destroy']);

Route::resource('project','App\Http\Controllers\project_controller');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes([
    'reset' => true,
   ]);


Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
   

// Route::get('/send-email',function(){
//     $data = [
//     'name' => 'Vellya Riona',
//     'body' => 'Testing Kirim Email'
//     ];
   
//     Mail::to('vellya.riona@mail.ugm.ac.id')->send(new SendEmail($data));
   
//     dd("Email Berhasil dikirim.");
//    });
   
Route::get('/send-email', [App\Http\Controllers\SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [App\Http\Controllers\SendEmailController::class, 'store'])->name('post-email');

Route::resource('gallery', 'App\Http\Controllers\GalleryController');
Route::get('/gallery2', [GreetController::class, 'gallery'])->name('gallery');
// Auth::routes();

Route::get('/greet', [GreetController::class, 'greet'])->name('greeting');