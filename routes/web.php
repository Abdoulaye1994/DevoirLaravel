<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Concat;

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

Route::get('/register', [LoginController::class, 'register'])->name('get_register');
Route::post('/register', [LoginController::class, 'enregister'])->name('enregister');
Route::get('/loguein', [LoginController::class, 'loguein'])->name('get_login');
Route::post('/login', [LoginController::class, 'index'])->name('login');
Route::get('/contactlist',[ContactController::class,'indexcontact'])->name('contact.index');
Route::post('/contactlist',[ContactController::class,'lister'])->name('contact.store');
Route::get('/add-contact',[ContactController::class,'create'])->name('contact.create');
Route::get('edit-contact/{id}',[ContactController::class,'edit'])->name('contact.edit');
Route::get('/list', [ContactController::class, 'indexlist'])->name('get_list');
Route::put('/update', [ContactController::class, 'lister'])->name('udpatelist');
Route::get('/update', [ContactController::class, 'udpateliste'])->name('get_udpatelist');
Route::get('delete-contact/{id}',[ContactController::class,'destroy'])->name('contact.delete');
Route::get('/', [AccueilController::class, 'Accueil'])->name('get_accueil');

