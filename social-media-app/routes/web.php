<?php

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

Route::get('/alert', function () {
    return redirect()->route('index')->with('info', 'you are signed up!');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/signup', [App\Http\Controllers\AuthController::class, 'getSignup'])->middleware(['guest'])->name('auth.signup');
Route::post('/postsignup', [App\Http\Controllers\AuthController::class, 'postSignup'])->middleware(['guest'])->name('auth.postSignup');
Route::get('/signin', [App\Http\Controllers\AuthController::class, 'getSignin'])->middleware(['guest'])->name('auth.signin');
Route::post('/signin', [App\Http\Controllers\AuthController::class, 'postSignin'])->middleware(['guest'])->name('auth.postSignin');
Route::get('/signout', [App\Http\Controllers\AuthController::class, 'getSignout'])->name('auth.signout');

// Route::get('/signinpage', [App\Http\Controllers\PagesController::class, 'signinPage'])->name('pages.signinPage');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'getResults'])->name('search.results');

Route::get('/profile/show/{username}', [App\Http\Controllers\ProfileController::class, 'getProfile'])->name('profile.index');
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'getEdit'])->middleware(['auth'])->name('profile.edit');
Route::post('/profile/edit', [App\Http\Controllers\ProfileController::class, 'getPost'])->middleware(['auth']);

Route::get('/friend/index', [App\Http\Controllers\FriendController::class, 'getIndex'])->middleware(['auth'])->name('friend.index');




