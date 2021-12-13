<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Middleware\CheckStatus;

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
    return redirect('/login');
});

Route::any('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::any('/signup', [App\Http\Controllers\LoginController::class, 'signup'])->name('signup');
Route::any('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::middleware([CheckStatus::class])->group(function(){
    Route::any('/profile/edit/', [App\Http\Controllers\ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::any('/profile/show/', [App\Http\Controllers\ProfileController::class, 'showProfile'])->name('profile.show');
});

Route::any('/page/about', [App\Http\Controllers\PageController::class, 'about'])->name('page.about');
Route::any('/page/show', [App\Http\Controllers\PageController::class, 'show'])->name('page.show');

Route::any('/overview/offer/', [App\Http\Controllers\OfferController::class, 'index'])->name('offer.index');
Route::any('/overview/offer/show/{id}', [App\Http\Controllers\OfferController::class, 'show'])->name('offer.show');
Route::any('/overview/offer/create', [App\Http\Controllers\OfferCreateController::class, 'create'])->name('offer.create');

Route::any('/overview/message', [App\Http\Controllers\NewMessageController::class, ''])->name('message');

Route::any('/chat/{offer_id}/{sender_user_id}', [App\Http\Controllers\ChatController::class, 'channel'])->name('chat.channel');
Route::any('/chat/list', [App\Http\Controllers\ChatController::class, 'list'])->name('chat.list');


Route::get('/notification', function () {
    return view('notification');
});

Route::get('send',[ChatController::class, 'notification']);





