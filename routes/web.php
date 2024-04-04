<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\Employee\EmployeeLeaveController;
use App\Http\Controllers\Backend\Employee\EmployeeRegComtroller;
use App\Http\Controllers\Backend\Employee\EmployeeSalaryController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\AssignController;
use App\Http\Controllers\Backend\Setup\AxemTypeController;
use App\Http\Controllers\Backend\Setup\DesignationController;
use App\Http\Controllers\Backend\Setup\ExamTypeController;
use App\Http\Controllers\Backend\Setup\SchoolSubjectController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;
use App\Http\Controllers\Backend\Setup\StudentShiftController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Student\StudentRegController;
use App\Http\Controllers\Backend\Student\StudentRollController;
use App\Http\Controllers\Backend\Stup\FeeAmountController;
use App\Http\Controllers\Backend\Stup\FeeCategoryController;
use App\Http\Controllers\Backend\UserController;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});
Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');


//User   Management

Route::prefix('users')->group(function () {
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');

    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');

});

//User Profile and password


Route::prefix('profile')->group(function () {
    Route::get('/view', [ProfileController::class, 'UserProfile'])->name('profile.view');
    Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
    Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');

    Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');

});

//Student


Route::prefix('setups')->group(function () {

    //Student class Route
    Route::get('student/class/view', [StudentClassController::class, 'ViewStudent'])->name('student.class.view');
    Route::get('student/class/add', [StudentClassController::class, 'StudentClassAdd'])->name('student.class.add');

    Route::post('student/class/store', [StudentClassController::class, 'StudentClassStore'])->name('store.student.class');
    Route::get('student/class/edit/{id}', [StudentClassController::class, 'StudentClassEdit'])->name('student.class.edit');
    Route::post('student/class/update/{id}', [StudentClassController::class, 'StudentClassUpdate'])->name('update.student.class');
    Route::get('student/class/delete/{id}', [StudentClassController::class, 'StudentClassDelete'])->name('student.class.delete');

    //Student Year  Routes student.year.view


    Route::get('student/year/view', [StudentYearController::class, 'ViewYear'])->name('student.year.view');


    Route::get('student/year/add', [StudentYearController::class, 'StudentYearAdd'])->name('student.year.add');
    Route::post('student/year/store', [StudentYearController::class, 'YearStore'])->name('store.student.year');

    Route::get('student/year/edit/{id}', [StudentYearController::class, 'StudentYearEdit'])->name('student.year.edit');
    Route::post('student/year/update/{id}', [StudentYearController::class, 'StudentYearUpdate'])->name('update.student.year');

    Route::get('student/year/delete/{id}', [StudentYearController::class, 'StudentClassDelete'])->name('student.year.delete');


    //Student Group  Routes


    Route::get('student/group/view', [StudentGroupController::class, 'ViewGroup'])->name('student.group.view');
    Route::get('student/group/add', [StudentGroupController::class, 'StudentGroupAdd'])->name('student.group.add');

    Route::post('student/group/store', [StudentGroupController::class, 'StudentGroupStore'])->name('store.student.group');
    Route::get('student/group/edit/{id}', [StudentGroupController::class, 'StudentGroupEdit'])->name('student.group.edit');

    Route::post('student/group/update/{id}', [StudentGroupController::class, 'StudentGroupUpdate'])->name('update.student.group');


    Route::get('student/group/delete/{id}', [StudentGroupController::class, 'StudentGroupDelete'])->name('student.group.delete');


    //Student Shift Route


    Route::get('student/shift/view', [StudentShiftController::class, 'ViewShift'])->name('student.shift.view');

    Route::get('student/shift/add', [StudentShiftController::class, 'StudentShiftAdd'])->name('student.shift.add');

    Route::post('student/shift/add', [StudentShiftController::class, 'StudentShifSttore'])->name('store.student.shift');
    Route::get('student/shift/edit/{id}', [StudentShiftController::class, 'StudentShiftEdit'])->name('student.shift.edit');

    Route::post('student/shift/update/{id}', [StudentShiftController::class, 'StudentShiftUpdate'])->name('update.student.shift');
    Route::get('student/shift/delete/{id}', [StudentShiftController::class, 'StudentShiftDelete'])->name('student.shift.delete');


    Route::get('student/fee/view', [FeeCategoryController::class, 'FeeCategory'])->name('fee.category.view');

    Route::get('fee/category/add', [FeeCategoryController::class, 'FeeCatAdd'])->name('fee.category.add');

    Route::post('fee/category/add', [FeeCategoryController::class, 'FeeCatStore'])->name('store.fee.category');

    Route::get('fee/category/edit/{id}', [FeeCategoryController::class, 'FeeCatEdit'])->name('fee.category.edit');
    Route::post('fee/category/update/{id}', [FeeCategoryController::class, 'FeeCategoryUpdate'])->name('update.fee.category');

    Route::get('fee/category/delete/{id}', [FeeCategoryController::class, 'FeeCategoryDelete'])->name('fee.category.delete');



    Route::get('fee/amount/view', [FeeAmountController::class, 'ViewFeeAmount'])->name('fee.amount.view');

    Route::get('fee/amount/add', [FeeAmountController::class, 'AddAmount'])->name('fee.amount.add');
    Route::post('fee/amount/store', [FeeAmountController::class, 'StoreFeeAmount'])->name('store.fee.amount');

    Route::get('fee/amount/edit/{fee_category_id}', [FeeAmountController::class, 'EditFeeAmount'])->name('fee.amount.edit');

    Route::post('fee/amount/update/{fee_category_id}', [FeeAmountController::class, 'UpdateFeeAmount'])->name('update.fee.amount');

    Route::get('fee/amount/details/{fee_category_id}', [FeeAmountController::class, 'DetailsFeeAmount'])->name('fee.amount.details');



    //Axems Type All Featcures

    Route::get('exam/type/view', [ExamTypeController::class, 'ViewExamType'])->name('exam.type.view');

    Route::get('exam/type/add', [ExamTypeController::class, 'ExamTypeddA'])->name('exam.type.add');
    Route::post('exam/type/store', [ExamTypeController::class, 'ExamTypeStore'])->name('store.exam.type');
    Route::get('exam/type/edit/{id}', [ExamTypeController::class, 'ExamTypeEdit'])->name('exam.type.edit');
    Route::post('exam/type/update/{id}', [ExamTypeController::class, 'ExamTypeUpdate'])->name('update.exam.type');
    Route::get('exam/type/delete/{id}', [ExamTypeController::class, 'ExamTypeDelete'])->name('exam.type.delete');

    //SCHOOL Subject

    Route::get('scholl/subject/view', [SchoolSubjectController::class, 'ViewSubject'])->name('school.subject.view');

    Route::get('school/subject/add', [SchoolSubjectController::class, 'SubjectAdd'])->name('school.subject.add');

    Route::post('school/subject/store', [SchoolSubjectController::class, 'SubjectStore'])->name('store.school.subject');


    Route::get('school/subject/edit/{id}', [SchoolSubjectController::class, 'SubjectEdit'])->name('school.subject.edit');

    Route::post('school/subject/update/{id}', [SchoolSubjectController::class, 'SubjectUpdate'])->name('update.school.subject');
    Route::get('school/subject/delete/{id}', [SchoolSubjectController::class, 'SubjectDelete'])->name('school.subject.delete');

    //Assign
    Route::get('assign/subject/view', [AssignController::class, 'ViewAssignSubject'])->name('assign.subject.view');

    Route::get('assign/assign/add', [AssignController::class, 'AddAssignSubject'])->name('assign.subject.add');

    Route::post('assign/assign/store', [AssignController::class, 'StoreAssignSubject'])->name('store.assign.subject');

    Route::get('assign/subject/edit/{class_id}', [AssignController::class, 'EditAssignSubject'])->name('assign.subject.edit');

    Route::post('assign/subject/assign/update/{class_id}', [AssignController::class, 'UpdatAssignSubjecte'])->name('update.assign.subject');

    Route::get('assign/subject/details/{class_id}', [AssignController::class, 'DetailsAssignSubject'])->name('assign.subject.details');
});




// Designation

Route::get('scholl/subject/view', [SchoolSubjectController::class, 'ViewSubject'])->name('designation.view');

Route::get('school/subject/add', [SchoolSubjectController::class, 'SubjectAdd'])->name('school.subject.add');

Route::post('school/subject/store', [SchoolSubjectController::class, 'SubjectStore'])->name('store.school.subject');


Route::get('school/subject/edit/{id}', [SchoolSubjectController::class, 'SubjectEdit'])->name('school.subject.edit');

Route::post('school/subject/update/{id}', [SchoolSubjectController::class, 'SubjectUpdate'])->name('update.school.subject');
Route::get('school/subject/delete/{id}', [SchoolSubjectController::class, 'SubjectDelete'])->name('school.subject.delete');


//Designation



Route::get('designation/subject/view', [DesignationController::class, 'ViewDesignation'])->name('designation.view');

Route::get('designation/subject/add', [DesignationController::class, 'DesignationAdd'])->name('designation.add');

Route::post('designation/store', [DesignationController::class, 'DesignationStore'])->name('store.designation');


Route::get('designation/edit/{id}', [DesignationController::class, 'DesignationEdit'])->name('designation.edit');
Route::post('designation/update/{id}', [DesignationController::class, 'DesignationUpdate'])->name('update.designation');
Route::get('designation/delete/{id}', [DesignationController::class, 'DesignationDelete'])->name('designation.delete');




//  Student Registration  Routes
Route::prefix('students')->group(function () {
    Route::get('/reg/view', [StudentRegController::class, 'StudentRegView'])->name('student.registration.view');

    Route::get('/reg/add', [StudentRegController::class, 'StudentRegAdd'])->name('student.registration.add');
    Route::post('/reg/store', [StudentRegController::class, 'StudentRegStore'])->name('store.student.registration');

    Route::get('/year/class/wise', [StudentRegController::class, 'StudentClassYearWise'])->name('student.year.class.wise');


    Route::get('/reg/edit/{student_id}', [StudentRegController::class, 'StudentRegEdit'])->name('student.registration.edit');
    Route::post('/reg/update/{student_id}', [StudentRegController::class, 'StudentRegUpdate'])->name('update.student.registration');
    Route::get('/reg/promotion/{student_id}', [StudentRegController::class, 'StudentRegPromotion'])->name('student.registration.promotion');


    Route::post('/reg/update/promotion/{student_id}', [StudentRegController::class, 'StudentUpdatePromotion'])->name('promotion.student.registration');

    Route::get('/reg/details/promotion/{student_id}', [StudentRegController::class, 'StudentRegDetails'])->name('student.registration.promotion');

    // Roll GENEARTE roll.generate.view


    Route::get('/roll/generate/view', [StudentRollController::class, 'StudentRollView'])->name('roll.generate.view');

    // Route::get('/reg/getstudents', [StudentRollController::class, 'GetStudents'])->name('student.registration.getstudents');

    Route::prefix('employee')->group(function () {
        Route::get('/reg/employee/view', [EmployeeRegComtroller::class, 'EmployeeView'])->name('employee.registration.view');
        Route::get('/reg/employee/add', [EmployeeRegComtroller::class, 'EmployeeAdd'])->name('employee.registration.add');
        Route::post('/reg/employee/store', [EmployeeRegComtroller::class, 'EmployeeStore'])->name('store.employee.registration');
        Route::get('/reg/employee/edit/{id}', [EmployeeRegComtroller::class, 'EmployeedEdit'])->name('employee.registration.edit');
        Route::post('/reg/employee/update/{id}', [EmployeeRegComtroller::class, 'EmployeedUpdate'])->name('update.employee.registration');
        Route::get('/reg/employee/delete/{id}', [EmployeeRegComtroller::class, 'EmployeedDetails'])->name('employee.registration.details');

        //  EMPLOYEE SALARY

        Route::get('/salary/employee/view', [EmployeeSalaryController::class, 'SalaryView'])->name('employee.salary.view');

        Route::get('/salary/employee/increment/{id}', [EmployeeSalaryController::class, 'SalaryIncrement'])->name('employee.salary.increment');

        Route::post('/salary/employee/increment/{id}', [EmployeeSalaryController::class, 'SalaryStore'])->name('update.increment.store');

        Route::get('/salary/employee/details/{id}', [EmployeeSalaryController::class, 'SalaryDetails'])->name('employee.salary.details');
        // Employee Leave
        Route::get('/employee/leave/view', [EmployeeLeaveController::class, 'LeaveView'])->name('employee.leave.view');
        Route::get('/leave/employee/add', [EmployeeLeaveController::class, 'LeaveAdd'])->name('employee.leave.add');
        Route::post('/leave/employee/store', [EmployeeLeaveController::class, 'LeaveStore'])->name('store.employee.leave');
        Route::get('/leave/employee/edit/{id}', [EmployeeLeaveController::class, 'LeaveEdit'])->name('employe.leave.edit');

        Route::post('/leave/employee/update/{id}', [EmployeeLeaveController::class, 'LeaveUpdate'])->name('update.employee.leave');
        Route::get('/leave/employee/delete/{id}', [EmployeeLeaveController::class, 'LeaveDelete'])->name('employee.leave.delete');


    });

});