<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ClientReviewController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');
});

Route::get('/logout', [AdminController::class,'adminLogout'])->name('admin.logout');


Route::prefix('admin')->group(function(){

    Route::controller(AdminController::class)->group(function () {
        Route::get('/user/profile', 'userProfile')->name('user.profile');  
        Route::get('/user/profile/edit','userProfileEdit')->name('user.profile.edit');  
        Route::post('/user/profile/store', 'userProfileStore')->name('user.profile.store');  
        Route::get('/user/change/password', 'userChangePassowrd')->name('user.change.password');  
        Route::post('/user/change/password/update', 'userChangePassowrdUpdate')->name('user.change.password.update');  
   });

});


//information route admin side
Route::prefix('information')->group(function(){
    Route::controller(InformationController::class)->group(function () {
        Route::get('/all', 'allInformation')->name('all.information');  
        Route::get('/add', 'addInformation')->name('add.information');  
        Route::post('/store', 'storeInformation')->name('user.information.store');  
        Route::get('/edit/{id}', 'editInformation')->name('information.edit');  
        Route::post('/update/{id}', 'updateInformation')->name('information.update');  
        Route::get('/destroy/{id}', 'destroyInformation')->name('information.destroy');      
    });
});

//Services route admin side
Route::prefix('services')->group(function(){
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/all', 'allServices')->name('all.services');  
        Route::get('/add', 'addServices')->name('add.services');  
        Route::post('/store', 'storeService')->name('service.store');  
        Route::get('/edit/{id}', 'editService')->name('edit.service');
        Route::post('/update', 'updateServices')->name('service.update');  
        Route::get('/destroy/{id}', 'destroyServices')->name('delete.service');      
    });
});

//Projects route admin side
Route::prefix('projects')->group(function(){
    Route::controller(ProjectController::class)->group(function () {
        Route::get('/all', 'allProjects')->name('all.projects');  
        Route::get('/add', 'addProjects')->name('add.projects'); 
        Route::post('/store', 'storeProjects')->name('project.store');  
        Route::get('/edit/{id}', 'editProjects')->name('project.edit');
        Route::post('/update', 'updateProjects')->name('project.update');  
        Route::get('/destroy/{id}', 'destroyProjects')->name('project.delete');      
    });
});

//Courses route admin side
Route::prefix('courses')->group(function(){
    Route::controller(CourseController::class)->group(function () {
        Route::get('/all', 'allCourse')->name('all.courses');  
        Route::get('/add', 'addCourse')->name('add.courses'); 
        Route::post('/store', 'storeCourse')->name('store.courses');  
        Route::get('/edit/{id}', 'editCourse')->name('edit.courses');
        Route::post('/update', 'updateCourse')->name('courses.update');  
        Route::get('/destroy/{id}', 'destroyCourse')->name('delete.courses');      
    });
});

//Home Content route admin side
Route::prefix('home')->group(function(){
    Route::controller(HomePageController::class)->group(function () {
        Route::get('/all', 'allHomeContent')->name('all.homecontent');  
        Route::get('/add', 'addHomeContent')->name('add.homecontent'); 
        Route::post('/store', 'storeHomeContent')->name('homecontent.store');  
        Route::get('/edit/{id}', 'editHomeContent')->name('edit.homecontent');
        Route::post('/update', 'updateHomeContent')->name('homecontent.update');  
        Route::get('/destroy/{id}', 'destroyHomeContent')->name('homecontent.delete');      
    });
});

//Client Review route admin side
Route::prefix('review')->group(function(){
    Route::controller(ClientReviewController::class)->group(function () {
        Route::get('/all', 'allReview')->name('all.review');  
        Route::get('/add', 'addReview')->name('add.review'); 
        Route::post('/store', 'storeReview')->name('review.store');  
        Route::get('/edit/{id}', 'editReview')->name('edit.review');
        Route::post('/update', 'updateReview')->name('review.update');  
        Route::get('/destroy/{id}', 'destroyReview')->name('review.delete');      
    });
});

//Footer Content route admin side
Route::prefix('footer')->group(function(){
    Route::controller(FooterController::class)->group(function () {
        Route::get('/all', 'allFooterContent')->name('all.footer.content');  
        Route::get('/edit/{id}', 'editFooter')->name('edit.footer');
        Route::post('/update', 'updateFooter')->name('update.footer');  
    });
});

//Footer Content route admin side
Route::prefix('chart')->group(function(){
    Route::controller(ChartController::class)->group(function () {
        Route::get('/all', 'allChartContent')->name('all.chart.content');  
        Route::get('/edit/{id}', 'editChart')->name('edit.chart');
        Route::post('/update', 'updateChart')->name('update.chart');  
    });
});

//contact message route
Route::get('/all',[ContactController::class, 'AllContactMessage'])->name('contact.message');

Route::get('/delete/message/{id}',[ContactController::class, 'DeleteContactMessage'])->name('delete.message'); 




