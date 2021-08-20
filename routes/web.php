<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\StudentController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/Kuality',function(){
  return view('KualitySoft');
});
// e-commerce routes

Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::Post("/addtocart",[ProductController::class,'AddtoCart']);
Route::get('cartdetail',[ProductController::class,'Cartdetail']);
Route::get('remove/{id}',[ProductController::class,'RemovefromCart']);

// e-commerce end routes

// Wachtes routes
Route::get('/watches', function () {
    return view('Watches.index');
});
Route::get('/form', function () {
    return view('Watches.form');
});
// Watches routes 
// Patient Handling System
Route::get('/PHS',function()
{
   return view('Phs.index');
});
// Routes For Patient Modules 
Route::get('/PatientRegisterForm',function()
{
   return view('Phs.Patient.PatientRegister');
});
Route::get('/PatientLoginForm',function()
{
   return view('Phs.Patient.PatientLogin');
});
Route::post('/PatientRegister',[PatientController::class,'PatientRegister']);
Route::post('/PatientAuth',[PatientController::class,'PatientAuth']);
Route::get('/PatientDashboard',[PatientController::class,'PatientDashboard']);
Route::get('/logout',[PatientController::class,'PatientLogout']);
Route::get('/loginform',[StudentController::class,'index']);
Route::get('/RegForm',function()
{
   return view('register');
});
Route::Post('/register',[StudentController::class,'register']);
Route::post('/login',[StudentController::class,'authenticate']);