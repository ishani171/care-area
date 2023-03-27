<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
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
    return view('carearea.index');
});

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.view');

Route::prefix('admin/doctors')->group(function () {
	Route::get('/', [DoctorController::class, 'admin_doctors'])->name('admin.doctors')->middleware('auth');
	Route::get('/new', [DoctorController::class, 'add_new_doctor_view'])->name('admin.doctors.new')->middleware('auth');
});

Route::prefix('admin/receptions')->group(function () {
	Route::get('/', [ReceptionController::class, 'receptions'])->name('admin.receptions')->middleware('auth');
	Route::get('/new', [ReceptionController::class, 'add_new_reception_view'])->name('admin.receptions.new')->middleware('auth');
});

Route::prefix('admin/specialities')->group(function () {
	Route::get('/', [SpecialityController::class, 'all'])->name('admin.specialities')->middleware('auth');
	Route::get('/new', [SpecialityController::class, 'add_new_speciality_view'])->name('admin.specialities.new')->middleware('auth');
});

Route::prefix('admin/patients')->group(function () {
	Route::get('/', [PatientController::class, 'patients'])->name('admin.patients')->middleware('auth');
});

Route::prefix('appoinments')->group(function () {
	Route::get('/new/{doctor_id}', [AppoinmentController::class, 'new'])->name('appoinments.new')->middleware('auth');
});

Route::prefix('receptions')->group(function () {
	Route::get('/dashboard', [ReceptionController::class, 'dashboard'])->name('receptions.dashboard')->middleware('auth');
});

Route::prefix('doctors')->group(function () {
	Route::get('/{speciality_id}', [DoctorController::class, 'doctors'])->name('doctors.view')->middleware('auth');
	Route::post('/search',[DoctorController::class, 'search'])->name('doctors.search');
});


//* ************************************************************************************************* *//

//RESOURCES
Route::resource('doctor',DoctorController::class);
Route::resource('patients',PatientController::class);
Route::resource('specialities',SpecialityController::class);
Route::resource('receptions',ReceptionController::class);
Route::resource('appoinments',AppoinmentController::class);

//DEFAULT ROUTES
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
