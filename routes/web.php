<?php


use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\SMEController;
use App\Http\Controllers\CORPController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', function () {
    return view('/landing_home');
});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::get(
    '/view_company_profile',
    function () {
        return view('company_profile');
    }
)->name('view_company_profile');

Route::get(
    '/registersme',
    function () {
        return view('register-sme');
    }
)->name('registersme');


Route::get(
    '/about-access',
    function () {
        return view('about-access');
    }
)->name('about-access');

Route::get(
    '/loginsme',
    function () {
        return view('loginsme');
    }
)->name('loginsme');

Route::get(
    '/landing_home',
    function () {
        return view('landing_home');
    }
)->name('landinghome');

Route::get(
    '/pagesme',
    function () {
        return view('home-sme');
    }
)->name('pagesme');

Route::get(
    '/pagecorp',
    function () {
        return view('home-corporate');
    }
)->name('pagecorp');
Route::get('/indexsme', [App\Http\Controllers\HomeController::class, 'root'])->name('indexsme');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'root'])->name('index');
Route::get('/root', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('/assessment_sme', [AssessmentController::class,'Assessment_SME'])->name('assessment_sme');
Route::get('/assessment_new', [AssessmentController::class,'Assessment_New'])->name('assessment_new');
Route::get('/assessment_report', [AssessmentController::class,'Assessment_Report'])->name('assessment_report');
Route::get('/assessment', [AssessmentController::class,'index'])->name('adminassessment');
Route::get('/assessment_detail', [AssessmentController::class,'AssessmentDetail'])->name('assessment_detail');
Route::get('/environmental_detail', [AssessmentController::class,'environmental_detail'])->name('environmental_detail');

Route::get('/corp-portfolio','App\Http\Controllers\PortfolioController@index')->name('corporateportfolio');


Route::get('/social_detail', [AssessmentController::class,'social_detail'])->name('social_detail');
Route::get('/governance_detail', [AssessmentController::class,'governance_detail'])->name('governance_detail');


// SME Controller
// Route::get('/view_company_profile',  [SMEController::class,'view_company_profile'])->name('view_company_profile');
Route::post('/add_linked_user_sme', [SMEController::class,'add_linked_user_sme'])->name('add_linked_user_sme');
Route::get('/edit_linked_users_sme/{id}/edit', [SMEController::class,'edit'])->name('edit_linked_users');
Route::post('/edit_linked_user_process_sme', [SMEController::class,'edit_linked_user_process_sme'])->name('edit_linked_user_process_sme');
Route::delete('/delete_linked_user_sme/{id}', [SMEController::class,'delete'])->name('delete_linked_user_sme');

// CORP Controller
Route::post('/add_linked_user_corp', [CORPController::class,'add_linked_user_corp'])->name('add_linked_user_corp');
Route::get('/edit_linked_users_corp/{id}/edit', [CORPController::class,'edit'])->name('edit_linked_users_corp');
Route::post('/edit_linked_user_process_corp', [CORPController::class,'edit_linked_user_process_corp'])->name('edit_linked_user_process_corp');
Route::delete('/delete_linked_user_corp/{id}', [CORPController::class,'delete'])->name('delete_linked_user_corp');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
