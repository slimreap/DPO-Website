<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SuperAdminController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Auth::routes();


Route::get('/logout',[HomeController::class, 'destroy'])
->name('logout');

//route for editor
Route::middleware(['auth','user-role:Editor'])->group(function()
    {
        Route::get('/editor/home',[HomeController::class, 'editorHome'])
        ->name('home.editor');



    }
);

//route for admin
Route::middleware(['auth','user-role:Admin'])->group(function()
    {
        Route::get('/admin/home',[HomeController::class, 'adminHome'])
        ->name('home.admin');

        // Route::get('/admin/logout',[HomeController::class, 'destroy'])
        // ->name('logout');
    }
);


//route for super admin
Route::middleware(['auth','user-role:Super Admin'])->group(function()
    {
        Route::get('/superadmin/home',[SuperAdminController::class, 'superadminHome'])
        ->name('home.superadmin');


        Route::get('/superadmin/create',[SuperAdminController::class, 'show'])
        ->name('super-admin.show');

        Route::post('/superadmin/createadmin',[SuperAdminController::class, 'createAdmin'])
        ->name('super-admin.create');


        Route::get('/superadmin/dashboard',[SuperAdminController::class, 'showDashboard'])
        ->name('super-admin.showDashboard');
        // Route::get('/superadmin/logout',[HomeController::class, 'destroy'])
        // ->name('logout.superadmin');

        
    }
);