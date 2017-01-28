<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* Main Website Routes */
	Route::get('/', [ 
		'as' => 'main.index', 
		'uses'=>'MainController@getMainIndex'
	]);
	Route::get('procedure/companies', [ 
		'as' => 'main.companies', 
		'uses'=>'MainController@getMainCompanies'
	]);
	Route::get('fests', [ 
		'as' => 'main.fests', 
		'uses'=>'MainController@getMainFests'
	]);
	Route::get('events', [ 
		'as' => 'main.events', 
		'uses'=>'MainController@getMainEvents'
	]);
	Route::get('news', [ 
		'as' => 'main.news', 
		'uses'=>'MainController@getMainNews'
	]);
	Route::get('our-alumni', [ 
		'as' => 'main.alumni', 
		'uses'=>'MainController@getMainAlumni'
	]);
	Route::get('contact/office', [ 
	'as' => 'main.office', 
	'uses'=>'MainController@getMainOffice'
	]);
	Route::get('contact/location', [ 
		'as' => 'main.location', 
		'uses'=>'MainController@getMainLocation'
	]);
	Route::get('visit', [ 
		'as' => 'main.visit', 
		'uses'=>'MainController@getMainVisit'
	]);
	Route::get('whycet', [ 
		'as' => 'main.whycet', 
		'uses'=>'MainController@getMainWhyCet'
	]);
	Route::get('message/{slug}', [ 
		'as' => 'main.message', 
		'uses'=>'MainController@getMainMessage'
	]);
/* USER ROUTES */
		Route::get('user/dashboard', [ 
			'as' => 'user.dashboard', 
			'uses'=>'UserController@getUserIndex'
		]);
		Route::get('user/notices', [ 
			'as' => 'user.notices', 
			'uses'=>'NoticeController@getIndex'
		]);
		Route::get('user/contact', [
			'as' => 'user.contact',
			'uses' => 'UserController@getUserContact'
		]);
		Route::get('user/profile', [
			'as' => 'user.profile',
			'uses' => 'UserController@getUserProfile'
		]);
		Route::get('notice/{slug}',[
			'as' => 'notice.single', 
			'uses'=>'NoticeController@getSingle'
		])->where('slug', '[\w\d\-\_]+');

		Route::post('checkeligibility/{slug}',[
			'as' => 'checkeligibility', 
			'uses' => 'UserController@checkeligibility'
		]);
/* Authentication Routes */
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'LoginController@postLogin');
	Route::get('logout', 'Auth\AuthController@logout');
	 
	// Password Reset Routes...
	Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');
	 
	// Registration routes...
	Route::get('register', 'Auth\AuthController@getRegister');
	Route::post('register', 'RegistrationController@postRegister');
	Route::get('register/verify/{confirmationCode}', 'RegistrationController@confirm');
/* ALL ADMIN ROUTES STARTS FROM HERE ONWARDS */
	Route::get('/admin', [
		'as'=>'admin.dashboard',
		'uses'=>'AdminController@getIndex'
	]);
	//POST, PUBLISH AND APPLICANTS Routes
		Route::resource('admin/post', 'PostController');
		Route::get('admin/notice/publish/{id}',[
			'as'=>'admin.notice.publish',
			'uses'=>'AdminController@publish'
		]);
		Route::get('admin/notice/unpublish/{id}',[
			'as' => 'admin.notice.unpublish',
			'uses'=>'AdminController@unpublish'
		]);
		Route::get('admin/applicants', [
			'as' => 'admin.applicant.posts',
			'uses' => 'AdminController@applicantposts'
		]);
		Route::put('admin/applicants', [
			'as' => 'admin.applicants',
			'uses' => 'AdminController@applicants'
		]);
	//Settings Resource Routes
		Route::resource('admin/mainnotices', 'MainNoticeController' );
		Route::resource('admin/mainevents', 'MainEventController' );
		Route::resource('admin/alumni', 'AlumniController');
		Route::resource('admin/company', 'CompanyController');
		Route::resource('admin/tnpuser', 'TnpUserController');
		Route::resource('admin/branches', 'BranchController');
		Route::resource('admin/officer', 'OfficerController');
		Route::resource('admin/slider', 'SliderController');
		Route::resource('admin/link', 'LinkController');
		Route::resource('admin/guideline', 'GuidelineController');
		Route::resource('admin/fest', 'FestController');
	//Export and Import features in Admin Panel
	Route::get('admin/export/excel/{postid}', [
		'as' => 'admin.export.excel',
		'uses' => 'AdminController@excel'
	]);
	Route::get('admin/import', [
		'as' => 'admin.import', 
		'uses' => 'AdminController@getImportDatabase'
	]);
	Route::post('admin/import', [
		'uses' => 'AdminController@postImportDatabase'
	]);
	//Create And Delete Administrators 
	Route::get('admin/administrators',[
		'as' => 'admin.administrators',
		'uses' => 'AdminController@administrators'
	]);
	Route::get('admin/administrators/delete/{regdno}',[
		'as' => 'admin.administrators.delete',
		'uses' => 'AdminController@admindelete'
	]);
	Route::post('admin/administrators/make',[
		'as' => 'administrators.make',
		'uses' => 'AdminController@makeadmin'
	]);
	//Standalone Routes
	Route::get('admin/standalone',['as' => 'admin.standalone','uses' => 'AdminController@showstandalone']);
	Route::post('admin/standalone',['uses' => 'AdminController@standalone']);
	//Adding and Deleting Users from Users Table
		Route::get('admin/add/user',[
			'as' => 'admin.add.user',
			'uses' => 'AdminController@addUser'
		]);
		Route::get('admin/delete/user',[
			'as' => 'admin.delete.user',
			'uses' => 'AdminController@delUser'
		]);
		Route::get('admin/delete/user/{singleuserregdno}',[
			'as' => 'admin.del.user',
			'uses' => 'AdminController@deleteUser'
		]);
	//Send Email
		Route::get('admin/sendgroupemail', [
			'as' => 'admin.sendgroupemail', 
			'uses' => 'AdminController@getsendMail'
		]);
		Route::post('admin/sendgroupemail', 'AdminController@sendMail');
	//Settings
		Route::get('admin/settings/options-general', [
			'as' => 'admin.settings', 
			'uses' => 'SettingsController@getSettingsIndex'
		]);
		Route::get('admin/tnpsettings/options', [
			'as' => 'admin.tnpsettings', 
			'uses' => 'TnpSettingsController@getIndex'
		]);
		Route::put('admin/settings', [
			'as' => 'admin.settings.update',
			'uses' => 'SettingsController@updateSettings'
		]);
	// Search people in TNP
		Route::put('admin/searchkeyword', [
			'as' => 'admin.searchkeyword',
			'uses' => 'AdminController@searchkeyword'
		]);
	// Search people in Users
		Route::put('admin/searchuser', [
			'as' => 'admin.searchuser',
			'uses' => 'AdminController@searchuser'
		]);
/* SAY THANKS TO ADITYA */