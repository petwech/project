<?php

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

//########  Human resource #########  //


Route::resource('employee', 'EmployeeController');
Route::post('save_employee', 'EmployeeController@store');
Route::Get(' employee/{employee}', 'EmployeeController@show')->name('department.select');
Route::get('employee/{employee}/edit','EmployeeController@edit')->name('employee.edit');
Route::get('employee/{employee}/details','EmployeeController@details')->name('employee.details');
Route::Get('emp_type','EmployeetypeController@index');
Route::Get('payslip','EmployeeController@payslip')->name('payslip.make');
Route::resource('payroll','AllowanceController');
Route::get('payroll/{id}/edit/','AllowanceController@edit');
Route::resource('deduction','DeductionController');
Route::get('deduction/{id}/edit/','DeductionController@edit');
Route::get('makeslip/{id}/edit/','EmployeeController@makeslip')->name('payslip.edit');
//Route::Post('payroll/save','AllowanceController@store')->name('payroll.store');

Route::resource('department','DepartmentController');
Route::Post('dept-store','DepartmentController@store');
Route::get('department/{id}/edit/','DepartmentController@edit');
Route::delete('department/{id}','DepartmentController@destroy')->name('department.destroy');
Route::resource('designation','DesignationController');
Route::Post('add_designation','DesignationController@store');
Route::Get('edit_designation/{id}/edit/','DesignationController@edit');


Route::resource('customers','CustomerController');
Route::get('customers/{id}/edit/','CustomerController@edit');