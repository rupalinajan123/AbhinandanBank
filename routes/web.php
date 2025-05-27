<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myPageController;
use App\Http\Controllers\pageDataController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\AdvertisementController;

use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ComplaintController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/my_page', function () {
 //   return view('my_page');
//});

//Route::get('/contactus', function () {
//    return view('contactus');
//});

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
 
    return "Cache cleared successfully";
 });

Route::get('/', [pageDataController::class, 'index']);
Route::get('/details/{name}', [pageDataController::class, 'details']);
Route::get('/contactus', [pageDataController::class, 'contactus']);
Route::post('/post-contactus', [pageDataController::class, 'post_contactus'])->name('contactus.post');
Route::get('advertisement/{id}/{page?}',[pageDataController::class,'download_pdf'])->name('advertisement.download');
Route::get('download/{name}',[pageDataController::class,'download']);
Route::get('/users/{filename}', [pageDataController::class,'file_download']);
Route::get('/counter', [pageDataController::class, 'getCounter'])->name('counter');


//complaint form
Route::get('/complaint_form', [pageDataController::class, 'complaint_form']);
Route::post('/post-complaint-form', [pageDataController::class, 'post_complaint_form'])->name('complaint_form.post');

Route::get('/ch_lang', [pageDataController::class, 'ch_lang']);
Route::get('/annual-report-20-21', [myPageController::class,'annual_report_20_21']);
Route::get('/annual-report-21-22', [myPageController::class,'annual_report_21_22']);
Route::get('/annual-report-22-23', [myPageController::class,'annual_report_22_23']);
Route::get('/annual-report-24', [myPageController::class,'annual_report_24']);
//Route::get('/myclass','myPageController@showPath');
//Route::get('/myclass', [myPageController::class, 'showPath']);
//Route::get('/my_profile', [myprofileController::class, 'my_profile']);

//=========
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

///=======blog routing
//Route::resource('blogs','BlogController');
Route::get('/blog', [BlogController::class, 'index'])->name('admin.blogs.index');
Route::get('/create_blog', [BlogController::class, 'create'])->name('admin.blogs.create');
Route::get('/destroy/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('admin.blogs.edit');
Route::get('/show/{id}', [BlogController::class, 'show'])->name('admin.blogs.show');
Route::post('/store', [BlogController::class, 'store'])->name('admin.blogs.store');
Route::post('/update/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');

///=======page routing
Route::get('/pages', [PageController::class, 'index'])->name('admin.pages.index');
Route::get('/create_page', [PageController::class, 'create'])->name('admin.pages.create');
Route::get('/admin/pages/destroy_page/{id}', [PageController::class, 'destroy'])->name('admin.pages.destroy');
// Route::get('/edit_page/{id}', [PageController::class, 'edit'])->name('admin.pages.edit');
Route::get('/show_page/{id}', [PageController::class, 'show'])->name('admin.pages.show');
Route::post('/store_page', [PageController::class, 'store'])->name('admin.pages.store');
Route::post('/admin/pages/update_page/{id}', [PageController::class, 'update'])->name('admin.pages.update');
Route::get('/admin/pages/edit/{pageid}', [PageController::class, 'edit'])->name('admin.pages.edit');
Route::get('/admin/pages/update_status/{id}', [PageController::class, 'update_status'])->name('admin.pages.update_status');


//advertisement routing
Route::get('/advertisement', [AdvertisementController::class, 'index'])->name('admin.advertisement.index');
Route::get('/create_advertisement', [AdvertisementController::class, 'create_advertisement'])->name('admin.advertisement.create');
Route::post('/store_advertisement', [AdvertisementController::class, 'store'])->name('admin.advertisement.store');
Route::get('/destroy_page/{id}', [AdvertisementController::class, 'destroy'])->name('admin.advertisement.destroy');
Route::get('/edit_page/{id}', [AdvertisementController::class, 'edit'])->name('admin.advertisement.edit'); 
Route::post('/update_page/{id}', [AdvertisementController::class, 'update'])->name('admin.advertisement.update');
Route::get('/update_advertisement/{id}', [AdvertisementController::class, 'update_advertisement'])->name('admin.advertisement.update_advertisement'); 
Route::get('/removeDocument/{id}',[AdvertisementController::class, 'removeDocument'])->name('admin.advertisement.remove_doc');


Route::get('change-password', [ChangePasswordController::class, 'index']);
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');

//Contact us
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('admin.contactus.index');
Route::get('/show_contact/{id}', [ContactUsController::class, 'show'])->name('admin.contactus.show');

//complaint
Route::get('/complaint', [ComplaintController::class, 'index'])->name('admin.complaint.index');
Route::get('/show_complaint/{id}', [ComplaintController::class, 'show'])->name('admin.complaint.show');


Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});

