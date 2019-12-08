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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/about', 'CommonController@aboutUs')->name('aboutUs');

Route::get('/contact', 'CommonController@contactUs')->name('contactUs');

Route::post('/postContactUs', 'CommonController@postContactUs')->name('postContactUs');

Route::get('/features', 'CommonController@features')->name('features');

Route::get('/privacy-policy', 'CommonController@privacyPolicy')->name('privacyPolicy');

Route::get('/terms-condition', 'CommonController@termsAndCondition')->name('termsAndCondition');

Route::post('/send/feedback', 'FeedbackController@sendFeedback')->name('sendFeedback');

Route::post('/send/report-error', 'ReportErrorController@sendReportError')->name('sendReportError');

Route::post('common/get-standards', 'CommonController@ajaxAllStandards')->name('ajaxAllStandards');


//Route::get('register', ['as'=>'Register', 'uses'=>'Auth\RegisterController@showRegistrationForm']);
//Route::post('post/register', ['as'=>'postRegister', 'uses'=>'Auth\RegisterController@storeRegistrationFormData']);

Route::get('login', ['as'=>'Login', 'uses'=>'Auth\LoginController@showLoginForm']);
Route::post('post/login', ['as'=>'postLogin', 'uses'=>'Auth\LoginController@authenticate']);
Route::post('logout', ['as'=>'logout', 'uses'=>'Auth\LoginController@logout']);

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function(){

	// dashboard page
	Route::get('/', 'DashboardController@dashboard')->name('dashboard');

	// chart 
	Route::get('/chart', 'ChartController@index')->name('chart');

	// get notification
	Route::get('/notifications', 'NotificationController@notifications')->name('notification');

	Route::get('/update/notify-count', 'NotificationController@updateNotificationCount')->name('updateNotificationCount');

	// feedback page
	Route::get('/feedback', 'FeedbackController@index')->name('getFeedbacks');

	Route::get('/send/feedback/to/development/team/{id}', 'FeedbackController@sendFeedbackToDevelopmentTeam')->name('sendFeedbackToDevelopmentTeam');

	// report error page
	Route::get('/report-error', 'ReportErrorController@index')->name('getReportErrors');

	Route::get('/send/report/to/development/team/{id}', 'ReportErrorController@sendReportToDevelopmentTeam')->name('sendReportToDevelopmentTeam');		

	// development team page
	Route::get('/development-team', 'DevelopmentTeamController@index')->name('getDevelopmentTeams');	

	Route::get('/development-team/create', 'DevelopmentTeamController@create')->name('createDeveloper');	
	Route::post('/development-team/post', 'DevelopmentTeamController@post')->name('postDeveloper');	

	Route::get('/development-team/edit/{slug}', 'DevelopmentTeamController@edit')->name('editDeveloper');

	Route::post('/development-team/update/{slug}', 'DevelopmentTeamController@update')->name('updateDeveloper');

	Route::get('/development-team/activate/{slug}', 'DevelopmentTeamController@activate')->name('activateDeveloper');

	Route::get('/development-team/deactivate/{slug}', 'DevelopmentTeamController@deactivate')->name('deactivateDeveloper');

	Route::get('/development-team/delete/{slug}', 'DevelopmentTeamController@delete')->name('deleteDeveloper');

	// sub modules
	Route::get('/main-module/{main_module_slug}', 'ModuleController@getSubModules')->name('getSubModules');

	Route::get('/sub-module/{main_module_slug}/overview/{sub_module_slug}', 'ModuleController@getSubModuleOverview')->name('getSubModuleOverview');

	Route::get('/sub-module/{main_module_slug}/eligibility/{sub_module_slug}/', 'ModuleController@getSubModuleEligibility')->name('getSubModuleEligibility');

	Route::get('/sub-module/{main_module_slug}/syllabus/{sub_module_slug}/', 'ModuleController@getSubModuleSyllabus')->name('getSubModuleSyllabus');

	Route::get('/sub-module/{main_module_slug}/exam-pattern/{sub_module_slug}/', 'ModuleController@getSubModuleExamPattern')->name('getSubModuleExamPattern');

	Route::get('/sub-module/{main_module_slug}/apply/{sub_module_slug}/', 'ModuleController@getSubModuleHowToApply')->name('getSubModuleHowToApply');

	Route::get('/sub-module/{main_module_slug}/discussion/{sub_module_slug}/', 'ModuleController@getSubModuleDiscussion')->name('getSubModuleDiscussion');

	Route::get('/sub-module/{main_module_slug}/discuss/{sub_module_slug}/show-answers/{slug}', 'ModuleController@showDiscussionQuestionWithAnswer')->name('showDiscussionQuestionWithAnswer');	

	Route::get('/sub-module/{main_module_slug}/study-material/{sub_module_slug}/', 'ModuleController@getSubModuleStudyMaterial')->name('getSubModuleStudyMaterial');

	Route::get('/sub-module/{main_module_slug}/model-paper/{sub_module_slug}/', 'ModuleController@getSubModuleModelPaper')->name('getSubModuleModelPaper');

	Route::get('/sub-module/{main_module_slug}/online-test/{sub_module_slug}/', 'ModuleController@getSubModuleOnlineTest')->name('getSubModuleOnlineTest');

	Route::get('/sub-module/{main_module_slug}/exam-result/{sub_module_slug}/', 'ModuleController@getSubModuleResult')->name('getSubModuleResult');

	Route::get('/{sub_module_slug}/questions/view/{exam_slug}', 'QuestionController@viewQuestions')->name('viewQuestions');

	Route::get('/{sub_module_slug}/questions/{exam_slug}', 'QuestionController@viewQuestionsForUser')->name('viewQuestionsForUser');

	Route::post('/ajaxCall', 'QuestionController@ajaxCall')->name('ajaxCall');

	Route::post('/post/answers/{exam_slug}', 'QuestionController@postAnswers')->name('postAnswers');	

	Route::get('/exam/results/{exam_slug}', 'QuestionController@showResults')->name('showResults');		

	Route::post('/post/discussion-question', 'DiscussionController@postDiscussionQuestion')->name('postDiscussionQuestion');

	Route::post('/post/discussion-answer', 'DiscussionController@postDiscussionAnswer')->name('postDiscussionAnswer');	

	// payments
	Route::get('/payment/options', 'PaymentController@showPaymentOptions')->name('showPaymentOptions');	

	Route::post('/payment/subscribe', 'PaymentController@paymentSubscribePlan')->name('paymentSubscribePlan');		

	// show message
	Route::get('/show/message/{msg_id}', 'ShowMessageController@showMessage')->name('showMessages');

	// master routes
	Route::group(['prefix' => 'master'], function(){

		Route::get('/', 'MasterController@index')->name('masterIndex');

		// users
		Route::get('register', ['as'=>'Register', 'uses'=>'Auth\RegisterController@showRegistrationForm']);
		Route::post('post/register', ['as'=>'postRegister', 'uses'=>'Auth\RegisterController@storeRegistrationFormData']);
		Route::get('/user', 'UserController@index')->name('userIndex');
		Route::get('/user-create', 'UserController@userCreate')->name('userCreate');
		Route::get('/postuser-create', 'UserController@postuserCreate')->name('postuserCreate');


		Route::get('/users-search', 'UserController@usersSearch')->name('usersSearch');

		// main module
		Route::get('/main-module', 'ModuleController@mainModule')->name('mainModuleIndex');

		Route::get('/main-module/create', 'ModuleController@createMainModule')->name('createMainModule');

		Route::post('/main-module/post', 'ModuleController@postMainModule')->name('postMainModule');

		Route::get('/main-module/edit/{slug}', 'ModuleController@editMainModule')->name('editMainModule');

		Route::post('/main-module/update/{slug}', 'ModuleController@updateMainModule')->name('updateMainModule');

		Route::get('/main-module/activate/{slug}', 'ModuleController@activateMainModule')->name('activateMainModule');

		Route::get('/main-module/deactivate/{slug}', 'ModuleController@deactivateMainModule')->name('deactivateMainModule');

		Route::get('/main-module/delete/{slug}', 'ModuleController@deleteMainModule')->name('deleteMainModule');

		// sub module
		Route::get('/sub-module', 'ModuleController@subModule')->name('subModuleIndex');

		Route::get('/sub-module/create', 'ModuleController@createSubModule')->name('createSubModule');

		Route::post('/sub-module/post', 'ModuleController@postSubModule')->name('postSubModule');

		Route::get('/sub-module/edit/{slug}', 'ModuleController@editSubModule')->name('editSubModule');

		Route::post('/sub-module/update/{slug}', 'ModuleController@updateSubModule')->name('updateSubModule');

		Route::get('/sub-module/activate/{slug}', 'ModuleController@activateSubModule')->name('activateSubModule');

		Route::get('/sub-module/deactivate/{slug}', 'ModuleController@deactivateSubModule')->name('deactivateSubModule');

		Route::get('/sub-module/delete/{slug}', 'ModuleController@deleteSubModule')->name('deleteSubModule');

		// sub module details create

		Route::get('/sub-module/{sub_module_slug}/overview/create', 'ModuleController@createSubModuleOverview')->name('createSubModuleOverview');

		Route::post('/sub-module/overview/post', 'ModuleController@postSubModuleOverview')->name('postSubModuleOverview');

		Route::get('/sub-module/{sub_module_slug}/eligibility/create', 'ModuleController@createSubModuleEligibility')->name('createSubModuleEligibility');

		Route::post('/sub-module/eligibility/post', 'ModuleController@postSubModuleEligibility')->name('postSubModuleEligibility');

		Route::get('/sub-module/{sub_module_slug}/syllabus/create', 'ModuleController@createSubModuleSyllabus')->name('createSubModuleSyllabus');

		Route::post('/sub-module/syllabus/post', 'ModuleController@postSubModuleSyllabus')->name('postSubModuleSyllabus');

		Route::get('/sub-module/{sub_module_slug}/exam-pattern/create', 'ModuleController@createSubModuleExamPattern')->name('createSubModuleExamPattern');

		Route::post('/sub-module/exam-pattern/post', 'ModuleController@postSubModuleExamPattern')->name('postSubModuleExamPattern');

		Route::get('/sub-module/{sub_module_slug}/apply/create', 'ModuleController@createSubModuleHowToApply')->name('createSubModuleHowToApply');

		Route::post('/sub-module/apply/post', 'ModuleController@postSubModuleHowToApply')->name('postSubModuleHowToApply');

		Route::get('/sub-module/{sub_module_slug}/study-material/create', 'ModuleController@createSubModuleStudyMaterial')->name('createSubModuleStudyMaterial');

		Route::post('/sub-module/study-material/post', 'ModuleController@postSubModuleStudyMaterial')->name('postSubModuleStudyMaterial');

		Route::post('/sub-module/study-material/update', 'ModuleController@updateSubModuleStudyMaterial')->name('updateSubModuleStudyMaterial');				

		// exams
		Route::get('/exam', 'ExamController@index')->name('examIndex');

		Route::get('/exam/create', 'ExamController@create')->name('examCreate');		

		Route::post('/exam/create/sub-modules/by-main-modules', 'ExamController@ajaxSubModulesByMainModules')->name('ajaxSubModulesByMainModules');		

		Route::post('/post/exam', 'ExamController@postExam')->name('postExam');

		Route::get('/edit/exam/{slug}', 'ExamController@editExam')->name('editExam');

		Route::post('/update/exam/{slug}', 'ExamController@updateExam')->name('updateExam');

		Route::get('/activate/exam/{slug}', 'ExamController@activateExam')->name('activateExam');

		Route::get('/deactivate/exam/{slug}', 'ExamController@deactivateExam')->name('deactivateExam');

		Route::get('/delete/exam/{slug}', 'ExamController@deleteExam')->name('deleteExam');

		// questions
		Route::get('/upload/questions', 'QuestionController@index')->name('questionIndex');

		Route::post('/post/upload/questions', 'QuestionController@importQuestions')->name('importQuestions');

		// model questions
		Route::get('/model/questions', 'QuestionController@sampleQuestionIndex')->name('sampleQuestionIndex');

		Route::get('/model/questions/create', 'QuestionController@sampleQuestionCreate')->name('sampleQuestionCreate');	

		Route::post('/post/model/questions', 'QuestionController@postSampleQuestion')->name('postSampleQuestion');				

		// subscribe plan
		Route::get('/subscribe-plan', 'SubscribePlanController@index')->name('subscribePlanIndex');

		Route::get('/subscribe-plan/create', 'SubscribePlanController@create')->name('subscribePlanCreate');

		Route::post('/subscribe-plan/post', 'SubscribePlanController@post')->name('subscribePlanPost');

		Route::get('/delete/subscribe-plan/{id}', 'SubscribePlanController@deleteSubscribePlan')->name('deleteSubscribePlan');
	});	

	// setting routes
	Route::group(['prefix' => 'setting'], function(){
		// change password
		Route::get('/change-password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('changePassword');

		Route::post('/change-password/post', 'Auth\ChangePasswordController@changePassword')->name('changePasswordPost');
	});	
});
