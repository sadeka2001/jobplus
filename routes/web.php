<?php

use App\Http\Controllers\Backend\Admin\AboutController;
use App\Http\Controllers\Backend\Admin\JobPostController;
use App\Http\Controllers\frontedController;
use App\Http\Controllers\Backend\Admin\PluginController;
use App\Http\Controllers\Backend\Admin\TopCompanyController;
use App\Http\Controllers\Backend\Company\CompanyBlogController;
use App\Http\Controllers\Backend\Company\CompanyJobController;
use App\Http\Controllers\Backend\Company\CompanyPluginController;
use Illuminate\Support\Facades\Route;

// Frontend
Route::controller(frontedController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('about', 'about')->name('about');

    Route::get('contact', 'contact')->name('contact');
    Route::post('contact/store', 'contact_store')->name('contact.store');

    Route::get('top/companies', 'companies')->name('top.companies');

    Route::get('job/listing', 'job_desc')->name('job.listing');
    Route::get('job-desc/{id}', 'job_desc_show')->name('job.desc');

    // Route::get('/blog', 'blog');
    // Route::get('/job-post', 'job_post');
    // Route::get('/job-list', 'job_list');
    // Route::get('/service', 'service');
    // Route::get('/portfolio', 'portfolio');
    // Route::get('/gallery', 'gallery');
    // Route::get('/testimonial', 'testimonial');
    // Route::get('/faq', 'faq');
});


// Backend Admin route
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend/admin/dashboard');
    });
    Route::resource('about',AboutController::class);
    Route::resource('job-post',JobPostController::class);
    Route::resource('top/company',TopCompanyController::class);
    Route::resource('plugins',PluginController::class);
});


// Backend Company route
Route::prefix('company')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend/company/company_dashboard');
    });
    Route::resource('c-job-posts', CompanyJobController::class);
    Route::resource('c-employee', TopCompanyController::class);
    Route::resource('c-blogs', CompanyBlogController::class);
    Route::resource('c-plugins', CompanyPluginController::class);
});


// candidate
Route::get('candidate/dashboard', function () {
    return view('candidate_dashboard');
});










