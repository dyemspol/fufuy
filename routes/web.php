<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;








Route::get('/run-migrations', function () {
   \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    return 'Migrations run!';
});


//LOGIN FORM
Route::get('/login', [SessionController::class, 'loginForm'])->name('login');
//LOGIN LOGIC
Route::post('/login/validate', [SessionController::class, 'logincheck'])->name('validate');
//SIGNUP FORM
Route::get('/signup', [SessionController::class, 'registrationform'])->name('signup');
//SIGNUP LOGIC
Route::post('/signup/validate', [SessionController::class, 'registeruser'])->name('register');




//NEED TO BE AUTHRIZED
Route::middleware(['auth'])->group(function(){

//CREATING AND UPDATING JOB LOGIC
Route::resource('job', JobController::class);

//VIEW OF THE PAGE
Route::get('/', [JobController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about'); } );

Route::get('/contact', function () {
    return view('contact');
    
});

//LOGOUT 
Route::post('/logout', [SessionController::class, 'logoutuser'])->name('logoutz');


Gate::define('admin-only', function (User $user, Job $job) { 
    return $user->id === $job ->user_id;
    
});
});





