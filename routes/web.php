<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FrontEndController;


//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();



Route::get('/', [FrontEndController::class, 'frontEnd']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
Route::post('/user-register', [App\Http\Controllers\HomeController::class, 'userRegisterer'])->name('user.register');
//Company Route
Route::get('/add-company',[CompanyController::class,'addCompany'])->name('add.company');
Route::post('/store-company',[CompanyController::class,'storeCompany'])->name('store.company');
Route::get('/company-list',[CompanyController::class,'companyList'])->name('company.list');
Route::get('/edit-company{id}',[CompanyController::class,'companyEdit'])->name('edit.company');
Route::post('/delete-company',[CompanyController::class,'companyDelete'])->name('delete.company');
Route::post('/update-company',[CompanyController::class,'companyUpdate'])->name('update.company');

//Employee Route
Route::get('/add-employee',[EmployeeController::class,'index'])->name('add.employee');
Route::get('/manage-employee',[EmployeeController::class,'index'])->name('manage.employee');
Route::post('/new-employee',[EmployeeController::class,'saveEmployee'])->name('new.employee');
Route::get('/employee-list',[EmployeeController::class,'employeeList'])->name('employee.list');
Route::get('/edit-employee{id}',[EmployeeController::class,'employeeEdit'])->name('edit.employee');
Route::post('/delete-employee',[EmployeeController::class,'employeeDelete'])->name('delete.employee');
Route::post('/update-employee',[EmployeeController::class,'employeeUpdate'])->name('update.employee');





