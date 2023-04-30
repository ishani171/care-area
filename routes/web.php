<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PaymentController;
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

Route::prefix('/admin')->middleware(['auth','admin'])->group(function(){
	
	Route::get('/', [AdminController::class, 'index'])->name('admin.view');

	Route::prefix('/doctors')->group(function () {
		Route::get('/', [DoctorController::class, 'admin_doctors'])->name('admin.doctors');
		Route::get('/new', [DoctorController::class, 'add_new_doctor_view'])->name('admin.doctors.new');
	});
	
	Route::prefix('/receptions')->group(function () {
		Route::get('/', [ReceptionController::class, 'receptions'])->name('admin.receptions');
		Route::get('/new', [ReceptionController::class, 'add_new_reception_view'])->name('admin.receptions.new');
	});
	
	Route::prefix('/specialities')->group(function () {
		Route::get('/', [SpecialityController::class, 'all'])->name('admin.specialities');
		Route::get('/new', [SpecialityController::class, 'add_new_speciality_view'])->name('admin.specialities.new');
	});
	
	Route::prefix('/patients')->group(function () {
		Route::get('/', [PatientController::class, 'patients'])->name('admin.patients');
	});

	Route::get('/jobs', [JobsController::class, 'admin_jobs'])->name('admin.jobs');

});



Route::prefix('appoinments')->group(function () {
	Route::get('/new/{doctor_id}', [AppoinmentController::class, 'new'])->name('appoinments.new')->middleware('auth');
	Route::get('/payment/{appoinment}',[PaymentController::class, 'create'])->middleware('auth')->name('appoinment.payment');
});

Route::prefix('receptions')->group(function () {
	Route::get('/dashboard', [ReceptionController::class, 'dashboard'])->name('receptions.dashboard')->middleware('auth');
});

Route::prefix('doctors')->group(function () {
	Route::get('/{speciality_id}', [DoctorController::class, 'doctors'])->name('doctors.view')->middleware('auth');
	Route::post('/search',[DoctorController::class, 'search'])->name('doctors.search');
});

Route::get('/doctor/profile',[DoctorController::class, 'profile'])->name('doctor.profile')->middleware(['auth','doctor']);

Route::post('/paypal-payment-completed',[PaymentController::class, 'payment_complete']);
Route::post('/orders',[PaymentController::class, 'orders']);


//* ************************************************************************************************* *//

//RESOURCES
Route::resource('doctor',DoctorController::class);
Route::resource('patients',PatientController::class);
Route::resource('specialities',SpecialityController::class);
Route::resource('receptions',ReceptionController::class);
Route::resource('appoinments',AppoinmentController::class);
Route::resource('feedbacks',FeedbackController::class)->middleware('auth');
Route::resource('jobs',JobsController::class);

//DEFAULT ROUTES
Route::get('/dashboard', [DashBoardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
