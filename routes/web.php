<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrimaryView\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [IndexController::class, 'index'])->name('beranda');



// Route::get('/home', [HomeController::class, 'index'])->name('beranda');
// Route::get('/about', [HomeController::class, 'about'])->name('tentang');

Auth::routes([
'register' => false, // Disable Registration Routes
'reset' => false,    // Disable Password Reset Routes
'verify' => false,   // Disable Email Verification Routes
]);

Route::prefix('admin/')->group(function () {

  // setting menu
 Route::get('/add-menu', [HomeController::class, 'index'])->name('addmenu');
 Route::post('/create-menu', [HomeController::class, 'create'])->name('createmenu');
 Route::get('/menu-edit/{id_edit}/edit', [HomeController::class, 'edit'])->name('editmenu');
 Route::put('/menu-update/{id_edit}/update', [HomeController::class, 'update'])->name('updatemenu');
 Route::delete('/menu-delete/{id_delete}/delete', [HomeController::class, 'delete'])->name('deletemenu');
 
 // setting profile
 Route::get('/add-profile', [HomeController::class, 'about'])->name('addprofile');
 Route::post('/create-profile', [HomeController::class, 'createprofile'])->name('createprofile');
 Route::get('/profile-edit/{edit_profile}/edit', [HomeController::class, 'editprofile'])->name('editprofile');
 Route::put('/profile-update/{edit_profile}/update', [HomeController::class, 'updateprofile'])->name('updateprofile');
 Route::get('/profile-delete/{delete_profile}/delete', [HomeController::class, 'deleteprofile'])->name('deleteprofile');
 Route::delete('/profile-delete/{delete_profile}/delete', [HomeController::class, 'deleteprofile'])->name('deleteprofile');
 
 // setting service
 Route::get('/add-service', [HomeController::class, 'service'])->name('addservice');
 Route::post('/create-service', [HomeController::class, 'createservice'])->name('createservice');
 


 Route::get('/add-portfolio', [HomeController::class, 'portfolio'])->name('addportfolio');
 Route::post('/create-portfolio', [HomeController::class, 'createportfolio'])->name('createportfolio');
 
 Route::get('/add-pricing', [HomeController::class, 'pricing'])->name('addpricing');
 Route::post('/create-pricing', [HomeController::class, 'createpricing'])->name('createpricing');
 
 Route::get('/add-testimonial', [HomeController::class, 'testimonial'])->name('addtestimonial');
 Route::post('/create-testimonial', [HomeController::class, 'createtestimonial'])->name('createtestimonial');
 
 Route::get('/add-blog', [HomeController::class, 'blog'])->name('addblog');
 Route::post('/create-blog', [HomeController::class, 'createblog'])->name('createblog');
 
 Route::get('/add-sosmed', [HomeController::class, 'sosmed'])->name('addsosmed');
 Route::post('/create-sosmed', [HomeController::class, 'createsosmed'])->name('createsosmed');

});