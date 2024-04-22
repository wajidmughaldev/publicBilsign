<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/product', function () {
    return view('frontend.product');
});

Route::get('/price', function () {
    return view('frontend.price');
});

Route::get('/about-us', function () {
    return view('frontend.about-us');
});

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::delete('/users/{user}', [AdminController::class, 'destroy'])->name('users.destroy');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/all-customers', [AdminController::class, 'allCustomers'])->name('admin.all-customers');
    Route::get('/admin/all-documents', [AdminController::class, 'allDocuments'])->name('admin.all-documents');
    Route::get('/admin/new-users', [AdminController::class, 'newUsers'])->name('admin.new-users');
    Route::post('/admin/{id}/update-status/{status?}', [AdminController::class, 'updateStatus'])->name('user.updateStatus');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::get('/admin/bank', [AdminController::class, 'bankID'])->name('admin.bank');
    // Save Terms
    Route::post('/admin/settings', [AdminController::class, 'saveTerms'])->name('terms.store');
    // Update Password
    // Route::get('/admin/settings', [AdminController::class, 'editPassword'])->name('admin.password.edit');
    Route::put('/admin/settings', [AdminController::class, 'updatePassword'])->name('admin.password.update');
});

Route::middleware(['auth', 'role:company'])->group(function () {
    Route::get('/company/dashboard', [CompanyController::class, 'dashboard'])->name('company.dashboard');
});

Route::middleware(['auth', 'role:employee'])->group(function () {
    Route::get('/employee/dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
});

require __DIR__.'/auth.php';
