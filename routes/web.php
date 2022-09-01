<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Models\CompanieModel;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::post('save-company-details', [CompanyController::class, 'saveCompanyDetails'])->name('save_company_details');
Route::post('save-employee-details', [EmployeeController::class, 'create'])->name('save_employee_details');
Route::get('get-company-onload', [CompanyController::class, 'getCompanyOnload'])->name('get_company_onload');
Route::get('get-company-data-onload', [CompanyController::class, 'getCompanyDataOnload'])->name('get_company_data_onload');
Route::get('get-employee-data-onload', [EmployeeController::class, 'index'])->name('get_employee_data_onload');
Route::post('del-emp-details', [EmployeeController::class, 'destroy'])->name('del_emp_details');
Route::post('del-comp-details', [CompanyController::class, 'delCompDetails'])->name('del_comp_details');
