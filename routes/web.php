<?php

use Illuminate\Support\Facades\Hash;
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
})->name('home');

// Route::get('/home');
Route::get('/team-member', App\Http\Livewire\TeamMember::class)->name('team-member');
Route::get('/discord', App\Http\Livewire\Discord::class)->name('discord');
Route::get('/cyber-weekend', App\Http\Livewire\CyberWeekend\Register::class)->name('cyber-weekend.register');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('dashboard', App\Http\Livewire\Dashboard::class)->name('dashboard');

    Route::get('admin/tour-bracket', App\Http\Livewire\Admin\TourBracket\Index::class)->name('admin.tour-bracket.index');

    Route::get('admin/cyber-weekend', App\Http\Livewire\Admin\CyberWeekend\Index::class)->name('admin.cyber-weekend.index');

    Route::get('admin/user', App\Http\Livewire\Admin\User\Index::class)->name('admin.user.index');

    Route::get('news', App\Http\Livewire\News\Index::class)->name('news.index');

    Route::get('member/subscription', App\Http\Livewire\Member\Subscription\Index::class)->name('member.subscription.index');

    Route::get('coach/subs', App\Http\Livewire\Coach\Subs\Index::class)->name('coach.subs.index');

    Route::get('coach/evaluation', App\Http\Livewire\Coach\Evaluation\Index::class)->name('coach.evaluation.index');
});

Route::get('nakpassword', function () { return Hash::make('password'); });
