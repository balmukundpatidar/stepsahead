<?php
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
//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
Route::get('/admin_login', ['uses' => 'LoginController@login_view']);
Route::post('/login_validate', ['as' => 'login_validate', 'uses' => 'LoginController@login_validate']);
Route::post('registration',['as'=>'registration_store','uses'=>'Job\RegistrationController@store']);
Route::get('registration_next/{user_id}',['as'=>'registration_next','uses'=>'Job\RegistrationController@registrationNext']);
Route::post('registration_next/{user_id}',['as'=>'registration_next_store','uses'=>'Job\RegistrationController@registrationNextStore']);

Route::get('logout', 'LoginController@logout');
//
Route::get('/job_potal', ['uses' => 'Job\LoginController@registration_view']);
Route::get('/login', ['as' => 'login', 'uses' => 'Job\LoginController@login_view']);
Route::post('/employee_login_validate', ['as' => 'employee_login_validate', 'uses' => 'Job\LoginController@login_validate']);
Route::post('employee_registration',['as'=>'employee_registration','uses'=>'Job\LoginController@store']);

 //job
Route::get('jobs', ['as' => 'job','uses' => 'Job\JobController@index']);
Route::get('my-application', ['as' => 'my-application','uses' => 'Job\JobController@myApplication']);
Route::get('application/{id?}', ['as' => 'application','uses' => 'Job\JobController@applicationQuestion']);
Route::get('job/{job_id}', ['as' => 'job_details','uses' => 'Job\JobController@jobDetails']);
Route::get('register', ['as' => 'registration','uses' => 'Job\JobController@registration']);
Route::get('apply/{job_id}', ['as' => 'apply','uses' => 'Job\JobController@applyJob']);
// CHM-WAL reset password
Route::get('user_reset_password', 'Job\JobController@resetPassword');
Route::post('user_reset_password', 'Job\JobController@userResetPassword');

Route::get('search', ['as' => 'job_query','uses' => 'Job\JobController@job_query']);
Route::get('searchajax',array('as'=>'searchajax','uses'=>'Job\JobController@autoComplete'));
Route::get('Search/Results/{id}', ['as' => 'job_search_result','uses' => 'Job\JobController@jobSearchCategory']);

Route::get('/', ['as' => 'home','uses' => 'Job\Home\HomeController@index']);
//Route::get('contact', ['as' => 'contact','uses' => 'Job\Contact\ContactController@index']);
Route::post('contact', ['as' => 'contact','uses' => 'Job\Contact\ContactController@store']);
Route::post('contact_store', ['as' => 'store_contact','uses' => 'Job\Contact\ContactController@store_contact']);
//Route::get('about', ['as' => 'about','uses' => 'Job\About\AboutController@index']);
//Route::get('packages', ['as' => 'packages','uses' => 'Job\Packages\PackagesController@index']);
//Route::get('agency', ['as' => 'agency','uses' => 'Job\Agency\AgencyController@index']);
//Route::get('training', ['as' => 'training','uses' => 'Job\Training\TrainingController@index']);
Route::get('vacancies', ['as' => 'vacancies','uses' => 'Job\Page\PageController@vacancies']);
Route::get('contactus', ['as' => 'contactus','uses' => 'Job\Page\PageController@contactus']);
Route::get('gallery', ['as' => 'gallery','uses' => 'Job\Gallery\GalleryController@index']);
Route::get('gallery/{page}', ['as' => 'gallery','uses' => 'Job\Gallery\GalleryController@index']);
Route::get('meet-the-team', ['as' => 'meettheteam','uses' => 'Job\Team\TeamController@index']);
Route::get('single-team/{slug}', ['as' => 'single-team','uses' => 'Job\Team\TeamController@singleTeam']);
//Route::get('respite', ['as' => 'respite','uses' => 'Job\Page\PageController@respite']);
//Route::get('cqc', ['as' => 'cqc','uses' => 'Job\Page\PageController@cqc']);

Route::get('blog', ['as' => 'blog','uses' => 'Blog\BlogController@index']);
Route::get('blog/{blog_id}', ['as' => 'blog_details','uses' => 'Blog\BlogController@blogDetails']);
Route::get('careers', ['as' => 'career','uses' => 'Job\Career\CareerController@index']);
Route::get('services', ['as' => 'services','uses' => 'Job\Service\ServiceController@index']);
Route::get('news', ['as' => 'services','uses' => 'Job\Page\PageController@news']);
Route::get('news_details/{news_id}', ['as' => 'news_details','uses' => 'Job\Home\HomeController@newsDetails']);
//all pages
Route::get('/{page_id}', ['as' => 'pages','uses' => 'Job\Page\PageController@page']);




