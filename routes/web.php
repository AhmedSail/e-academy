<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TestApiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {

    // dd(Auth::guard('teacher')->check());

    if (Auth::guard('web')->check()) {
        return redirect('student/home');
    } elseif (Auth::guard('teacher')->check()) {

        return redirect('teacher/home');
    } elseif (Auth::guard('admin')->check()) {

        return redirect('admin/home');
    }
})->middleware(['auth:web,teacher,admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';





// $_SESSION['user']='ahmed';
// $_SESSION['last_active']=time();
// if(time()-$_SESSION['last_active'] >5){
//     header("Location : logout.php");
// }
Route::get('/home/products', [TestApiController::class, 'index']);


Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('/course/{id}',[SiteController::class,'course'])->name('course');
Route::get('/teachers/{id}',[SiteController::class,'teacher'])->name('teacher');
Route::get('/search',[SiteController::class,'search'])->name('search');
Route::get('/course/{id}/enroll',[SiteController::class,'enroll'])->name('enroll')->middleware("auth");
Route::get('/course/{id}/payment',[SiteController::class,'payment'])->name('payment')->middleware("auth");
