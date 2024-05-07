<?php

use App\Http\Controllers\AddController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\AdminJobController;
use App\Http\Controllers\admin\PlugingsController;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\SittingsController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/jobPosted', [JobController::class, 'index'])->name('jobIndex');
Route::get('/find-job', [JobController::class, 'findJob'])->name('find.job');
Route::get('/jobDetails/{id}', [JobController::class, 'jobDetails'])->name('jobDetails');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactmassage'])->middleware('auth');

// ====== candidate LogIn Ragistration ======
Route::get('/registation', [AuthController::class, 'registationPage'])->name('registation');
Route::post('/registation', [AuthController::class, 'registration'])->name('registationProcess');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'CandidateDashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'CandidateprofilePage'])->name('candidate.profile');
    Route::post('/profile', [ProfileController::class, 'CandidateprofileUpdate']);

    Route::get('/apliedJobList', [JobController::class, 'apliedJobList'])->name('apliedJobList');
    Route::get('/apply/{id}', [JobController::class, 'applyPage'])->name('applyPage');
    Route::post('/apply/{id}', [JobController::class, 'apply']);

    Route::get('/plugings', [AdminHomeController::class, 'plugings'])->name('plugings');
    Route::get('/plugings/request/{id}', [PlugingsController::class, 'requestPluging'])->name('plugingsRequest');
});



// ===== sittings Route =======

Route::middleware(['allowCompanyAndAdmin'])->group(function () {
    Route::get('/sittings', [SittingsController::class, 'index'])->name('sittings.index');

    Route::get('/sittings/category', [SittingsController::class, 'categoryPageList'])->name('categoryPageList');
    Route::post('/sittings/category/create', [SittingsController::class, 'CreateCategoryPage'])->name('CreateCategoryPage');
    Route::delete('/sittings/category/delete/{category}', [SittingsController::class, 'categoryDelete'])->name('categoryDelete');

    Route::get('/sittings/type', [SittingsController::class, 'typePageList'])->name('typePageList');
    Route::post('/sittings/type/create', [SittingsController::class, 'CreateTypePage'])->name('CreateTypePage');
    Route::delete('/sittings/type/delete/{type}', [SittingsController::class, 'typeDelete'])->name('typeDelete');

    Route::get('/sittings/experiance', [SittingsController::class, 'experianceListPage'])->name('experianceListPage');
    Route::post('/sittings/experiance/create', [SittingsController::class, 'createExperience'])->name('createExperience');
    Route::delete('/sittings/experiance/delete/{experiance}', [SittingsController::class, 'PageDelete'])->name('PageDelete');
});

// ===== End sittings =======



// ===== Company Route =======
Route::middleware(['auth', 'isCompany'])->group(function () {
    Route::get('/company/dashboard', [HomeController::class, 'CompanyDashboard'])->name('company.dashboard');
    Route::get('/company/companyProfile', [ProfileController::class, 'comProfilePage'])->name('company.profileUpdate');
    Route::Post('/company/companyProfile', [ProfileController::class, 'comProfileEdite']);
    Route::get('/company/jobPosted/delete/{id}', [JobController::class, 'deletePost'])->name('deletePost');
    Route::get('/company/plugings', [AdminHomeController::class, 'plugings'])->name('company.plugings');
    Route::get('/company/plugings/request/{id}', [PlugingsController::class, 'requestPluging'])->name('company.plugingsRequest');

    // ========== Job Permission for company=======

    Route::middleware(['jobPermission',])->group(function () {
        Route::get('/company/jobPosted', [JobController::class, 'index'])->name('jobIndex');
        Route::get('/company/createJobPost', [JobController::class, 'createJobPostPage'])->name('createJobPost');
        Route::post('/company/createJobPost', [JobController::class, 'createJobPost']);
        Route::get('/company/jobPosted/{id}', [JobController::class, 'jobView'])->name('postview');
        Route::get('/company/jobPosted/edit/{id}', [JobController::class, 'postEditePage'])->name('postEdite');
        Route::post('/company/jobPosted/edit/{id}', [JobController::class, 'postEdite']);
        Route::get('/company/jobPosted/delete/{id}', [JobController::class, 'deletePost'])->name('deletePost');
        Route::get('/company/jobPosted/status/{id}', [JobController::class, 'jobStatus']);

        // === dlete Application
        Route::get('/company/jobPosted/candidateForPost/{id}', [JobController::class, 'candidateForPost']);
        Route::get('/company/jobPosted/view/{id}', [JobController::class, 'candidate']);
        Route::get('/company/jobPosted/candidateForPost/{id}/delete-application', [JobController::class, 'delete']);
        Route::get('/company/jobPosted/candidateForPost/{id}/accept', [JobController::class, 'accept'])->name('accept');
    });
    // ========== Blog Permission for company =======
    Route::middleware(['blogPermission'])->group(function () {
        Route::get('/company/blogs', [BlogController::class, 'blogListPage'])->name('company.bloglist');
        Route::get('/company/blogs/create', [BlogController::class, 'blogCreatePage'])->name('company.blogCreate');
        Route::post('/company/blogs/create', [BlogController::class, 'blogCreate']);
        Route::get('/company/blogs/edit/{id}', [BlogController::class, 'blogEditPage'])->name('company.blogEdit');
        Route::post('/company/blogs/edit/{id}', [BlogController::class, 'blogEdit']);
        Route::get('/company/blogs/delete/{id}', [BlogController::class, 'blogDelete'])->name('company.blogDelete');
        
        Route::get('/company/blogs/status/{id}', [BlogController::class, 'status']);
    
    });
});

// ===== End Company Route =======


// ===== admin Route =======
Route::get('/admin/login', [AdminAuthController::class, 'loginPage'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // ========= Admin Blogs ========
    Route::get('/admin/blogs', [AdminBlogController::class, 'blogListPage'])->name('admin.bloglist');





    Route::get('/admin/blogs/status/{id}', [AdminBlogController::class, 'status']);







    Route::get('/admin/blogs/create', [AdminBlogController::class, 'blogCreatePage'])->name('admin.blogCreate');
    Route::post('/admin/blogs/create', [AdminBlogController::class, 'blogCreate']);
    Route::get('/admin/blogs/edit/{id}', [AdminBlogController::class, 'blogEditPage'])->name('admin.blogEdit');
    Route::post('/admin/blogs/edit/{id}', [AdminBlogController::class, 'blogEdit']);
    Route::get('/admin/blogs/delete/{id}', [AdminBlogController::class, 'blogDelete'])->name('admin.blogDelete');

    // ======job=======
    Route::get('/admin/jobPosted', [AdminJobController::class, 'index'])->name('admin.jobIndex');
    Route::get('/admin/createJobPost', [AdminJobController::class, 'createJobPostPage'])->name('admin.createJobPost');
    Route::post('/admin/createJobPost', [AdminJobController::class, 'createJobPost']);
    Route::get('/admin/jobPosted/{id}', [AdminJobController::class, 'jobView'])->name('admin.postview');
    Route::get('/admin/jobPosted/edit/{id}', [AdminJobController::class, 'postEditePage'])->name('admin.postEdite');
    Route::post('/admin/jobPosted/edit/{id}', [AdminJobController::class, 'postEdite']);
    Route::get('/admin/jobPosted/delete/{id}', [AdminJobController::class, 'deletePost'])->name('admin.deletePost');

    Route::get('/admin/jobPosted/status/{id}', [JobController::class, 'jobStatus']);

    Route::get('/admin/jobPosted/candidateForPost/{id}', [JobController::class, 'candidateForPost']);
    
    Route::get('/admin/jobPosted/view/{id}', [JobController::class, 'candidate']);


    Route::get('/admin/jobPosted/candidateForPost/{id}/delete-application', [JobController::class, 'delete']);
    Route::get('/admin/jobPosted/candidateForPost/{id}/accept', [JobController::class, 'accept'])->name('accept');


    // ======contact=======
    Route::get('/admin/contact', [ContactController::class, 'contactPage'])->name('admin.contactPage');
    Route::post('/admin/contact', [ContactController::class, 'contactUpdate']);
    Route::get('/admin/messageView/{id}', [ContactController::class, 'messageView'])->name('messageView');
    Route::get('/admin/messageDelete/{id}', [ContactController::class, 'messageDelete'])->name('messageDelete');

    // ======About=======
    Route::get('/admin/about', [AboutController::class, 'aboutUpdatePage'])->name('admin.aboutCreate');
    Route::post('/admin/about', [AboutController::class, 'aboutUpdate']);


    // ====== User Management =======
    Route::get('/admin/all-companies', [AdminHomeController::class, 'allCompany'])->name('admin.allCompany');
    Route::get('/admin/all-companies/status/{id}', [AdminJobController::class, 'CompanyStatus']);

    Route::get('/admin/all-companies/jobByCompany/{id}', [AdminHomeController::class, 'jobByCompany'])->name('admin.company.jobByCompany');
    Route::get('/admin/all-companies/jobByCompany/delete/{id}', [AdminHomeController::class, 'deleteCompany'])->name('admin.company.delete');

    Route::get('/admin/all-companies/jobByCompany/{id}/{jobId}', [AdminHomeController::class, 'jobView'])->name('admin.company.jobView');
    Route::get('/admin/all-companies/jobByCompany/{id}/candidateForPost/{jobId}', [AdminHomeController::class, 'candidateForPost'])->name('admin.company.candidateForPost');
    Route::get('/admin/all-companies/jobByCompany/{id}/delete/{jobId}', [AdminHomeController::class, 'deletePost'])->name('admin.company.deletePost');


    Route::get('/admin/all-candidate', [AdminHomeController::class, 'allCandidate'])->name('admin.allCandidate');
    Route::get('/admin/all-candidate/status/{id}', [AdminJobController::class, 'CandidateStatus']);

    Route::get('/admin/all-candidate/jobApply/{id}', [AdminHomeController::class, 'jobApply'])->name('admin.candidate.jobApply');
    Route::get('/admin/all-candidate/delete/{id}', [AdminHomeController::class, 'candidateDelete'])->name('admin.candidate.delete');




    // ======Plugings=======
    Route::get('/admin/plugings', [PlugingsController::class, 'index'])->name('admin.plugingIndex');
    Route::get('/admin/plugings/user', [PlugingsController::class, 'pluginsUser'])->name('admin.pluginsUser');
    Route::get('/admin/plugings/status/{id}', [PlugingsController::class, 'status']);


    Route::get('/admin/createPlugings', [PlugingsController::class, 'createPlugingsPage'])->name('admin.createPlugings');
    Route::post('/admin/createPlugings', [PlugingsController::class, 'createPlugings']);
    Route::get('/admin/plugingRequest/accept/{id}', [PlugingsController::class, 'requestAccepts'])->name('admin.requestAccepts');
    Route::get('/admin/plugingRequest/delete/{id}', [PlugingsController::class, 'requestDelete'])->name('admin.requestDelete');
    Route::post('/admin/plugingRequest/update/{id}', [PlugingsController::class, 'updateStatus'])->name('admin.updateStatus');

    Route::get('/admin/slidersAdd', [SittingsController::class, 'slidersAddPage'])->name('admin.slidersAdd');
    Route::post('/admin/slidersAdd', [SittingsController::class, 'slidersAdd']);

    Route::get('/admin/profile', [AdminProfileController::class, 'profilePage'])->name('admin.profile');
    Route::post('/admin/profile', [AdminProfileController::class, 'profileUpdate']);

    Route::get('/admin/adds', [AddController::class, 'createAddPage'])->name('admin.createAddPage');

    Route::post('/admin/adds/create', [AddController::class, 'createAdd']);
    Route::get('/admin/adds/status/{id}', [AddController::class, 'status']);
    Route::get('/admin/adds/delete/{id}', [AddController::class, 'addsDelete'])->name('adds.delete');




    // Route::post('/admin/profile', [AdminProfileController::class, 'profileUpdate']);
});

// ===== End admin Route =======