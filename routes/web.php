<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BasketballController;

use App\Models\Team;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('landing');
});

//Show  Register/Form

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Show Login/Form

Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');

//Auth user
Route::post('/users/auth',[UserController::class, 'auth']);

//Create new user

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']); 


Route::get('/basketball',[BasketballController::class,'index']);

//****TEAMS ******* */
Route::get('/teams', [TeamController::class,'index']);

Route::get('/teams/create', [TeamController::class, 'create'])->middleware('auth'); 

//Manage your soccer's team 
Route::get('/teams/manage' , [TeamController::class,'manage']);

//Store a soccer's team
Route::post('/teams', [TeamController::class, 'store'])->middleware('auth');

//Single team by id 
Route::get('/teams/{team}',[TeamController::class,'show']);

//Show team edit form
Route::get('/teams/edit/{team}', [TeamController::class, 'edit' ])->middleware('auth'); 

//Edit team  put method
Route::put('/teams/{team}', [TeamController::class , 'update' ])->middleware('auth');

//Destroy a team

Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->middleware('auth');


