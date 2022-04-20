<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

/* ----------- Admin Route ---------- */

Route::prefix('admin')->group(function (){

Route::get('/login',[AdminController::class,'Index'])->name('login');

Route::post('/login/owner',[AdminController::class,'Login'])->name('admin.login');

Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

});

/* ----------- EndAdmin Route ---------- */




Route::get('/', function () {
    return view('home');
});

Route::get('/user/login',[UserController::class,'Index'])->name('login');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');

Route::get('/goalsheet/self',[UserController::class,'self'])->name('goalsheet.self');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
