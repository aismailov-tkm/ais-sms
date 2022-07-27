<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
  
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
    return view('welcome');
});
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:student'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('admin/index', [HomeController::class, 'adminIndex'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Teacher Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:teacher'])->group(function () {
  
    Route::get('teacher/index', [HomeController::class, 'teacherIndex'])->name('teacher.home');
});

/*------------------------------------------
--------------------------------------------
All Teacher Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:parent'])->group(function () {
  
    Route::get('parent/index', [HomeController::class, 'parentIndex'])->name('parent.home');
});