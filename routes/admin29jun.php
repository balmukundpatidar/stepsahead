<?php
/**
 * Created by Sunil Rajput.
 * User: Sunil Rajput
 * Date: 20/06/2020
 * Time: 10:09 PM
 */
Route::group(['middleware' => 'web', 'as' => 'admin::', 'prefix' => '/admin'], function(){
    /*Dashboard*/
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'Admin\DashboardController@index']);
    Route::get('logout', 'Admin\DashboardController@logout');
    /*User*/
    Route::get('/user', ['as' => 'user', 'uses' => 'Admin\User\UserController@index']);
    Route::get('/employer', ['as' => 'employer', 'uses' => 'Admin\User\UserController@employer_index']);
    Route::get('user_active/{user_id}/{status}', ['as' => 'user_active', 'uses' => 'Admin\User\UserController@userActive']);
    // Route::get('/user_datatable', ['as' => 'user-Datatable', 'uses' => 'Admin\User\UserController@datatable']);
    // Slider
    Route::get('slider/datatable', 'Admin\Slider\SliderController@DataTables');
    Route::post('slider/bulkdelete', 'Admin\Slider\SliderController@bulkDelete');
    Route::resource('slider', 'Admin\Slider\SliderController');
	//HOME-PAGE-BANNER
	Route::get('banner', ['as' => 'banner', 'uses' => 'Admin\CommonController@homebanner']);
    Route::get('editbanner', ['as' => 'editbanner', 'uses' => 'Admin\CommonController@editbanner']);
    Route::post('updatebanner', 'Admin\CommonController@updatebanner');
	//HOME-PAGE-CARE-SUPPORT
	Route::get('caresupport', ['as' => 'caresupport', 'uses' => 'Admin\CommonController@caresupport']);
	Route::get('addcaresupport', ['as' => 'addcaresupport', 'uses' => 'Admin\CommonController@addcaresupport']);
	Route::post('insertcaresupport', 'Admin\CommonController@insertcaresupport');
	Route::get('editcaresupport/{cs_id}', ['as' => 'editcaresupport', 'uses' => 'Admin\CommonController@editcaresupport']);
	Route::post('updatecaresupport', 'Admin\CommonController@updatecaresupport');
	//HOME-PAGE-SUPPORT-PLAN
	Route::get('viewplans', ['as' => 'viewplans', 'uses' => 'Admin\CommonController@viewplans']);
	Route::get('addplans', ['as' => 'addplans', 'uses' => 'Admin\CommonController@addplans']);
	Route::post('insertplans', 'Admin\CommonController@insertplans');
	Route::get('editplans/{cs_id}', ['as' => 'editplans', 'uses' => 'Admin\CommonController@editplans']);
	Route::post('updateplans', 'Admin\CommonController@updateplans');
	
	//HOME-PAGE-GALLERY
	Route::get('gallery', ['as' => 'gallery', 'uses' => 'Admin\CommonController@gallery']);
	Route::get('addgallery', ['as' => 'addgallery', 'uses' => 'Admin\CommonController@addgallery']);
	Route::post('insertgallery', 'Admin\CommonController@insertgallery');
	Route::get('editgallery/{cs_id}', ['as' => 'editgallery', 'uses' => 'Admin\CommonController@editgallery']);
	Route::post('updategallery', 'Admin\CommonController@updategallery');
	//HOME-PAGE-KNOWLEDGE-CENTER
	Route::get('knowledge_center', ['as' => 'knowledge_center', 'uses' => 'Admin\CommonController@knowledge_center']);
	Route::get('addknowledge_center', ['as' => 'addknowledge_center', 'uses' => 'Admin\CommonController@addknowledge_center']);
	Route::post('insertknowledge_center', 'Admin\CommonController@insertknowledge_center');
	Route::get('editknowledge_center/{cs_id}', ['as' => 'editknowledge_center', 'uses' => 'Admin\CommonController@editknowledge_center']);
	Route::post('updateknowledge_center', 'Admin\CommonController@updateknowledge_center');
	//HOME-PAGE-PARTNERS
	Route::get('partners', ['as' => 'partners', 'uses' => 'Admin\CommonController@partners']);
	Route::get('addpartner', ['as' => 'addpartner', 'uses' => 'Admin\CommonController@addpartner']);
	Route::post('insertpartner', 'Admin\CommonController@insertpartner');
	Route::get('editpartner/{cs_id}', ['as' => 'editpartner', 'uses' => 'Admin\CommonController@editpartner']);
	Route::post('updatepartner', 'Admin\CommonController@updatepartner');
	
	//HOME-PAGE
    Route::get('order_slider', ['as' => 'order_slider', 'uses' => 'Admin\Slider\SliderController@orderForSlider']);
    Route::Post('order_slider', ['as' => 'order_slider_update', 'uses' => 'Admin\Slider\SliderController@updateOrderForSlider']);
    Route::get('slider_active/{slider_id}/{status}', ['as' => 'slider_active', 'uses' => 'Admin\Slider\SliderController@sliderActive']);
    // Testimonial
    Route::resource('testimonial', 'Admin\Tesimonial\TestimonialController');
    Route::get('order_testimonial', ['as' => 'order_testimonial', 'uses' => 'Admin\Tesimonial\TestimonialController@orderForTestimonial']);
    Route::Post('order_testimonial', ['as' => 'order_testimonial_update', 'uses' => 'Admin\Tesimonial\TestimonialController@updateOrderForTestimonial']);
    Route::get('testimonial_active/{testimonial_id}/{status}', ['as' => 'testimonial_active', 'uses' => 'Admin\Tesimonial\TestimonialController@TestimonialActive']);
	//PROCESS
	Route::get('process', ['as' => 'process', 'uses' => 'Admin\CommonController@process']);
	Route::get('addprocess', ['as' => 'addprocess', 'uses' => 'Admin\CommonController@addprocess']);
	Route::post('insertprocess', 'Admin\CommonController@insertprocess');
	Route::get('editprocess/{cs_id}', ['as' => 'editpartner', 'uses' => 'Admin\CommonController@editprocess']);
	Route::post('updateprocess', 'Admin\CommonController@updateprocess');
	//SIMPLE-PROCESS
	Route::get('simpleprocess', ['as' => 'simpleprocess', 'uses' => 'Admin\CommonController@simpleprocess']);
	Route::get('addsimpleprocess', ['as' => 'addsimpleprocess', 'uses' => 'Admin\CommonController@addsimpleprocess']);
	Route::post('insertsimpleprocess', 'Admin\CommonController@insertsimpleprocess');
	Route::get('editsimpleprocess/{cs_id}', ['as' => 'editsimpleprocess', 'uses' => 'Admin\CommonController@editsimpleprocess']);
	Route::post('updatesimpleprocess', 'Admin\CommonController@updatesimpleprocess');
    //Contact
    Route::get('contact', ['as' => 'contact', 'uses' => 'Admin\Contact\ContactController@index']);
    //AboutUs
	Route::get('aboutus', ['as' => 'aboutus', 'uses' => 'Admin\CommonController@aboutus']);
	Route::get('addaboutus', ['as'=>'addaboutus','uses'=>'Admin\CommonController@addaboutus']);
	Route::post('insertaboutus', 'Admin\CommonController@insertaboutus');
	Route::get('editaboutus/{cs_id}', ['as' => 'editaboutus', 'uses' => 'Admin\pages\CommonController@editaboutus']);
	Route::post('updateaboutus', 'Admin\CommonController@updateaboutus');
	
    //About
    Route::get('about', ['as' => 'about', 'uses' => 'Admin\Setting\SettingController@about_index']);
    Route::post('about', ['as' => 'about', 'uses' => 'Admin\Setting\SettingController@about_store']);
    // Manage Category
    Route::resource('category', 'Admin\Category\CategoryController');
    Route::get('category_active/{category_id}/{status}', ['as' => 'category_active', 'uses' => 'Admin\Category\CategoryController@categoryActive']);
    //Profile
    Route::get('/profile', ['as' => 'profile', 'uses' => 'Admin\ProfileController@index']);
    Route::put('/profile_update', ['as' => 'profile_update', 'uses' => 'Admin\ProfileController@update']);
    Route::get('change_password', ['as' => 'change_password', 'uses' => 'Admin\ProfileController@edit_password']);
    Route::post('update_password', ['as' => 'update_password', 'uses' => 'Admin\ProfileController@update_password']);
    // Job Application
    Route::resource('job_application', 'Admin\JobApplication\JobApplicationController');
    Route::get('job_applied_user_list/{job_id}', ['as' => 'job_applied_user_list', 'uses' => 'Admin\JobApplication\JobApplicationController@appliedUserList']);
    // CHM-WAL DELETE JOB APPLIED
    Route::get('job_applied_user_delete/{job_id}/{job_employee_id}', 'Admin\JobApplication\JobApplicationController@appliedUserDelete');
    Route::get('job_applied_user_details/{user_id}', ['as' => 'user_details', 'uses' => 'Admin\JobApplication\JobApplicationController@appliedUserDetails']);
    // CHM-WAL DOWNLOAD PDF JOB APPLIED USER DETAIL
    Route::get('job_applied_user_detail_pdf/{user_id}', 'Admin\JobApplication\JobApplicationController@appliedUserDetailPdf');
    // CHM-WAL DOWNLOAD CV JOB APPLIED USER DETAIL
    Route::get('job_applied_user_cv/{filename}', 'Admin\JobApplication\JobApplicationController@downloadAppliedUserCV');
    Route::get('cover_letter/{user_id}/{job_id}', ['as' => 'cover_letter', 'uses' => 'Admin\JobApplication\JobApplicationController@coverLetter']);
    
    // CHM-WAL USER DETAILS
    Route::get('user_detail', 'Admin\User\UserController@userDetail');
    Route::get('edit_user_details/{user_id}', 'Admin\User\UserController@editUserDetail');
    Route::post('update_user_detail/{user_id}', 'Admin\User\UserController@updateUserDetail');
    Route::get('delete_user/{user_id}', 'Admin\User\UserController@deleteUser');
    //Job
    Route::resource('job', 'Admin\Job\JobController');
    Route::get('job_active/{job_id}/{status}', ['as' => 'job_active', 'uses' => 'Admin\Job\JobController@jobActive']);
    // Blog
    Route::resource('members','Admin\Team\MemberController');
    Route::get('member_active/{member_id}/{status}', ['as' => 'member_active', 'uses' => 'Admin\Team\MemberController@memberActive']);
    Route::Post('order_member', ['as' => 'order_member_update', 'uses' => 'Admin\Team\MemberController@updateOrderForMember']);
    // Services
    Route::resource('services', 'Admin\Service\ServiceController');
    Route::get('service_active/{service_id}/{status}', ['as' => 'service_active', 'uses' => 'Admin\Service\ServiceController@serviceActive']);
    // Manage Country
    Route::resource('country', 'Admin\Country\CountryController');
    Route::get('country_active/{country_id}/{status}', ['as' => 'country_active', 'uses' => 'Admin\Country\CountryController@countryActive']);
    // News
    Route::resource('news', 'Admin\News\NewsController');
    Route::get('news_active/{news_id}/{status}', ['as' => 'news_active', 'uses' => 'Admin\News\NewsController@newsActive']);
    //Pages
    Route::resource('pages', 'Admin\Pages\PagesController');
    //Menus
    Route::get('menus/{menu}/edit/{sub_categories} ', ['as' => 'edit', 'uses' => 'Admin\Menus\MenuController@edit']);
    Route::resource('menus', 'Admin\Menus\MenuController');
    Route::Post('order_menu', ['as' => 'order_menu_update', 'uses' => 'Admin\Menus\MenuController@updateOrderForMenu']);
    Route::get('sub_categories/{parent_id}', ['as' => 'sub_categories', 'uses' => 'Admin\Menus\MenuController@subCategories']);
    //Menu Wise Page
    Route::get('menu_page/{page_id}', ['as' => 'menu_page', 'uses' => 'Admin\Menus\MenuController@menuPage']);
});