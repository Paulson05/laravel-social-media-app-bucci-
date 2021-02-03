<?php

use Illuminate\Support\Facades\Route;


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
Route::get('/friend/add/{username}', [App\Http\Controllers\FriendController::class, 'getAdd'])->middleware(['auth'])->name('friend.add');
Route::get('/friend/accept/{username}', [App\Http\Controllers\FriendController::class, 'getAccept'])->middleware(['auth'])->name('friend.accept');
Route::get('/email', [App\Http\Controllers\StatusController::class, 'email'])->name('email');
Route::post('/postemail', [App\Http\Controllers\StatusController::class, 'postEmail'])->name('postemail');

Route::post('/status', [App\Http\Controllers\StatusController::class, 'postStatus'])->middleware(['auth'])->name('status.post');
Route::post('/reply/{statusid}', [App\Http\Controllers\StatusController::class, 'postReply'])->middleware(['auth'])->name('status.reply');
Route::get('/reply/{statusid}/like', [App\Http\Controllers\StatusController::class, 'getLike'])->middleware(['auth'])->name('status.like');



