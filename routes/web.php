<?php

use App\Http\Controllers\affiliateController;
use App\Http\Controllers\authController;
use App\Http\Controllers\commissionController;
use App\Http\Controllers\userController;
use Inertia\Inertia;
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

//One Time Run only
Route::get('/assign-role-to-admin',[userController::class,'assignRoleToAdmin'])->name('assignRoleToAdmin');

Route::get('/', function () {
    return redirect('/login');
});
// Side bar routes starts
Route::get('/dashboard', function () {
    return Inertia::render("Dashboard");
});

Route::get('/profile', function () {
    return Inertia::render("Profile/Show");
});

Route::get('/general-commissions', function () {
    return Inertia::render("Commission/Show");
});

Route::get('/admin-team', function () {
    return Inertia::render("Admin/Team");
});

// Side bar routes ends

// Route::get('/test', function () {
//     return Inertia::render("test");
// });

Route::post('/user/register', [authController::class, 'signup'])->name('signup');

//Admin
Route::get('/get-all-users',[userController::class,'getAllUsers'])->name('getAllUsers');

//Commissions
Route::post('/save-general-commissions', [commissionController::class, 'saveGeneralCommission'])->name('saveGeneralCommission');
Route::get('/get-general-commissions', [commissionController::class, 'getGeneralCommissions'])->name('getGeneralCommissions');

//Affiliate
Route::get('/affiliate/{slug}', [affiliateController::class, 'affiliateRegisteration'])->name('affiliateRegisteration');
