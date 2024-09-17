<?php

use App\Models\Carrers;
use App\Models\Department;
use App\Models\Download;
use App\Models\Jobs;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pages/about', function () {
    return view('/pages/about');
});
Route::get('/pages/founder', function () {
    return view('/pages/founder');
});

Route::get('/pages/governance', function () {
    return view('/pages/governance');
});

Route::get('/pages/director', function () {
    return view('/pages/director');
});
Route::get('/pages/feedback', function () {
    return view('/pages/feedback');
});
Route::get('/pages/peshawar', function () {
    return view('/pages/peshawar');
});
Route::get('/pages/location', function () {
    return view('/pages/location');
});
Route::get('/pages/contact', function () {
    return view('/pages/contact');
});

Route::get('/pages/downloads', function () {
    return view('/pages/downloads');
});
Route::get('/pages/downloads', function () {
    $select = Download::all();
    return view ('/pages/downloads')->with('id',$select);
});
Route::get('/pages/departments', function () {
    return view('/pages/departments');
});
Route::get('/pages/departments', function () {
    $departments  = Department::get();
    return view("/pages/departments", compact("departments"));
});

Route::get('/pages/carrers', function () {
    $carrers  = Carrers::all();
    $jobs  = Jobs::all();
    return view("/pages/carrers", compact("carrers",'jobs'));
});

Auth::routes();


Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/departments', [App\Http\Controllers\Frontend\FrontendController::class, 'departments'])->name('departments');

Route::get('/departments/{department_Name}', [App\Http\Controllers\Frontend\FrontendController::class, 'doctors'])->name('doctors');


Route::get('/departments/{department_Name}/{doctor_Name}', [App\Http\Controllers\Frontend\FrontendController::class, 'doctorView'])->name('doctorView');

Route::get('/search-doctors', [App\Http\Controllers\Frontend\FrontendController::class, 'all_doctors'])->name('all_doctors');

Route::get('/search',[App\Http\Controllers\Frontend\FrontendController::class, 'search'])->name('search');



Route::prefix('admin')->middleware(['auth','auth'])->group(function(){
    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,"index"]);
    


    // Department Routes

    Route::get("department",[App\Http\Controllers\Admin\DepartmentController::class,"index"]);
    Route::get("department/create",[App\Http\Controllers\Admin\DepartmentController::class,"create"]);
    Route::post("department",[App\Http\Controllers\Admin\DepartmentController::class,'store']);
    Route::get("department/show",[App\Http\Controllers\Admin\DepartmentController::class,"show"]);
    Route::get("department/show/{id}",[App\Http\Controllers\Admin\DepartmentController::class,"show"]);
    Route::get("department/edit/{id}",[App\Http\Controllers\Admin\DepartmentController::class,"edit"]);
    Route::post("department/edit/{id}",[App\Http\Controllers\Admin\DepartmentController::class,"update"]);
    Route::put("department/edit/{id}/",[App\Http\Controllers\Admin\DepartmentController::class,"update"]);
    Route::get("department/delete/{id}",[App\Http\Controllers\Admin\DepartmentController::class,"destroy"]);




    Route::get("/employee",[App\Http\Controllers\EmployeeController::class,"index"]);
    Route::get("/employee/show",[App\Http\Controllers\EmployeeController::class,"show"]);
    Route::get("/employee/show/{id}",[App\Http\Controllers\EmployeeController::class,"show"]);
    Route::get("/employee/create",[App\Http\Controllers\EmployeeController::class,"create"]);
    Route::post("employee",[App\Http\Controllers\EmployeeController::class,'store']);
    Route::get("/employee/edit/{id}",[App\Http\Controllers\EmployeeController::class,"edit"]);
    Route::post("/employee/edit/{id}",[App\Http\Controllers\EmployeeController::class,"update"]);
    Route::put("/employee/edit/{id}",[App\Http\Controllers\EmployeeController::class,"update"]);
    Route::get("/employee/delete/{id}",[App\Http\Controllers\EmployeeController::class,"destroy"]);

    Route::get("download",[App\Http\Controllers\Admin\DownloadController::class,"index"]);
    Route::get("download/create",[App\Http\Controllers\Admin\DownloadController::class,"create"]);
    Route::post("download",[App\Http\Controllers\Admin\DownloadController::class,'store']);
    Route::get("/download/show",[App\Http\Controllers\Admin\DownloadController::class,"show"]);
    Route::get("/download/show/{id}",[App\Http\Controllers\Admin\DownloadController::class,"show"]);
    Route::get("download/edit/{id}",[App\Http\Controllers\Admin\DownloadController::class,"edit"]);
    Route::post("download/edit/{id}",[App\Http\Controllers\Admin\DownloadController::class,"update"]);
    Route::put("download/edit/{id}",[App\Http\Controllers\Admin\DownloadController::class,"update"]);
    Route::get("download/delete/{id}",[App\Http\Controllers\Admin\DownloadController::class,"destroy"]);
  


    // slider


    Route::get("sliders",[App\Http\Controllers\Admin\SliderController::class,"index"]);
    Route::get("sliders/create",[App\Http\Controllers\Admin\SliderController::class,"create"]);
    Route::post("sliders",[App\Http\Controllers\Admin\SliderController::class,"store"]);
    Route::get("sliders/edit/{id}",[App\Http\Controllers\Admin\SliderController::class,"edit"]);
    Route::put("sliders/edit/{id}/",[App\Http\Controllers\Admin\SliderController::class,"update"]);
    Route::get("sliders/delete/{id}",[App\Http\Controllers\Admin\SliderController::class,"destroy"]);

    //Carrers


    Route::get("carrers",[App\Http\Controllers\Admin\CarrersController::class,"index"]);
    Route::get("carrers/create",[App\Http\Controllers\Admin\CarrersController::class,"create"]);
    Route::post("carrers",[App\Http\Controllers\Admin\CarrersController::class,"store"]);
    Route::get("carrers/edit/{id}",[App\Http\Controllers\Admin\CarrersController::class,"edit"]);
    Route::put("carrers/edit/{id}/",[App\Http\Controllers\Admin\CarrersController::class,"update"]);
    Route::get("carrers/delete/{id}/",[App\Http\Controllers\Admin\CarrersController::class,"destroy"]);
    Route::get("carrers/show/{id}/",[App\Http\Controllers\Admin\CarrersController::class,"show"]);
    Route::get("carrers/show/{id}/",[App\Http\Controllers\Admin\CarrersController::class,"show"]);


    //Doctors
    Route::controller(App\Http\Controllers\Admin\DoctorController::class)->group(function(){
        Route::get('/doctors', 'index');
        Route::get('/doctors/create', 'create');
        Route::post('/doctors', 'store');
        Route::get('/doctors/edit/{doctors}', 'edit');
        Route::put('/doctors/edit/{doctors}', 'update');
        Route::get('/doctors/delete/{doctor_id}','destroy');
        Route::get('/doctor-image/delete/{doctors_image_id}', 'destroyImage');

    });


    Route::controller(App\Http\Controllers\Admin\BlogsController::class)->group(function(){
        Route::get('/blogs', 'index');
        Route::get('/blogs/create', 'create');
        Route::post('/blogs', 'store');
        Route::get('/blogs/delete/{id}','destroy');

        Route::get('/blogs/edit/{id}', 'edit');
        Route::put('/blogs/edit/{id}', 'update');

        Route::delete('/blogs/edit/deleteimage/{id}','deleteimage');
        Route::delete('/blogs/edit/deletecover/{id}','deletecover');
    });


    Route::controller(App\Http\Controllers\Admin\JobsController::class)->group(function(){
        Route::get('/jobs', 'index');
        Route::get('/jobs/create', 'create');
        Route::post('/jobs', 'store');
        Route::get('/jobs/delete/{id}','destroy');

        Route::get('/jobs/edit/{id}', 'edit');
        Route::put('/jobs/edit/{id}', 'update');

        // Route::delete('/blogs/edit/deleteimage/{id}','deleteimage');
        // Route::delete('/blogs/edit/deletecover/{id}','deletecover');
    });

    Route::controller(App\Http\Controllers\AppointmentsController::class)->group(function(){
        Route::get('/appointment', 'index');
        Route::get('/appointments/create', 'create');
        Route::post('/appointment', 'store');
        Route::get('/appointments/delete/{id}','destroy');

        Route::get('/appointments/edit/{id}', 'edit');
        Route::put('/appointments/edit/{id}', 'update');

    });

  
});