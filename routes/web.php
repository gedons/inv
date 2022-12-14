<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\MessageController;



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

Route::prefix('/admin')->namespace('Admin')->group(function (){
    //admin login
    Route::get('/', [AdminController::class, 'login']);
    Route::post('login', [AdminController::class, 'loginAdmin'])->name('admin.login');

    //middleware group route that guards the admin dashboard
	Route::group(['middleware'=>['admin']],function ()
	{
		Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        //invest routes
        Route::get('invest', [AdminController::class, 'invest'])->name('admin.invest');
        Route::post('invest/create', [InvestmentController::class, 'create'])->name('invest.create');
        Route::get('invest/edit/{id}', [InvestmentController::class, 'edit'])->name('invest.edit');
        Route::post('invest/update/{id}', [InvestmentController::class, 'update'])->name('invest.update');
        Route::post('invest/delete/{id}', [InvestmentController::class, 'delete'])->name('invest.delete');
        //end invest routes

        //message route
        Route::post('inbox/sent', [MessageController::class, 'sent'])->name('inbox.sent');
        Route::post('inbox/delete/{id}', [MessageController::class, 'delete'])->name('inbox.delete');
        //end message route

        Route::get('activities', [AdminController::class, 'activities'])->name('admin.activities');
        Route::get('message', [AdminController::class, 'message'])->name('admin.message');
		Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
	});
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/activities', [App\Http\Controllers\HomeController::class, 'activities'])->name('activities');
Route::get('/home/inbox', [App\Http\Controllers\HomeController::class, 'inbox'])->name('front.inbox');
Route::post('/home/inbox/send', [App\Http\Controllers\FrontController::class, 'sent'])->name('front.send');
Route::post('/home/inbox/delete/{id}', [App\Http\Controllers\FrontController::class, 'delete'])->name('front.delete');
