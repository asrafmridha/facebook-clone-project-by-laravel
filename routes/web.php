<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::post('/login',function(){
//     return view('login');

// })->name('login.view');

Route::group(['prefix'=>'','middleware'=>['auth']],function(){

    Route::get('/dashboard',function(){
        $post=Post::all();
        return view('dashboard.main',compact('post'));
    })->name('dashboard');

    Route::resource('posts', PostController::class);

    Route::get('/profile',[UserProfileController::class,'index'])->name('profile.index');

    Route::post('userprofile.update/{id}',[UserProfileController::class,'update'])->name('userprofile.update');

});
