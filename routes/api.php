<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['api','cors']], function () {

    Route::post('register', 'Api\ApiController@register');

    Route::get('get-states', 'Api\ApiController@getAllStates');

    Route::get('get-boards', 'Api\ApiController@getAllBoards');

    Route::get('get-mediums', 'Api\ApiController@getAllMediums'); 

    Route::get('get/main-modules/{state_id}/{board_id}/{medium_id}', 'Api\ApiController@getMainModules');    

    Route::post('login', 'Api\ApiController@login');   

    Route::get('get/app-version', 'Api\ApiController@getAppVersion');

    Route::post('refresh-token', 'Api\ApiController@refreshToken');

    Route::post('user-details', 'Api\ApiController@getUserDetails');

    Route::get('get/main-modules', 'Api\ApiMainModuleController@getActivatedMainModules');

    Route::get('get/sub-modules/{user_id}', 'Api\ApiSubModuleController@getActivatedSubModulesByUser');

    Route::get('get/exams/{sub_module}', 'Api\ApiExamController@getActivatedExamsBySubModule');

    Route::get('get/exam/by-id/{exam_id}', 'Api\ApiExamController@getExamByID');

    Route::get('get/exam-results/{user_id}', 'Api\ApiExamController@getExamsWithMarks');
    
    Route::get('get/questions/{exam_id}', 'Api\ApiQuestionController@getAllQuestions');

    Route::get('get/marks/{exam_id}/{user_id}', 'Api\ApiMarkController@getMarks');

    Route::post('validate/answers', 'Api\ApiQuestionController@validateQuestionAndAnswer');

    Route::post('payment/upgrade-plan', 'Api\ApiPaymentController@upgradePlan');

    Route::post('validate/plan-subscribe', 'Api\ApiPaymentController@validatePlan');

    Route::get('get/subscribe-plans', 'Api\ApiSubscribePlanController@getAllSubscribePlans');

    Route::get('get/sub-module/overview/details/{sub_module}', 'Api\ApiSubModuleDetailController@getSubModuleOverview');

    Route::get('get/sub-module/eligibility/details/{sub_module}', 'Api\ApiSubModuleDetailController@getSubModuleEligibility');

    Route::get('get/sub-module/syllabus/details/{sub_module}', 'Api\ApiSubModuleDetailController@getSubModuleSyllabus');

    Route::get('get/sub-module/exam-pattern/details/{sub_module}', 'Api\ApiSubModuleDetailController@getSubModuleExamPattern');

    Route::get('get/sub-module/apply/details/{sub_module}', 'Api\ApiSubModuleDetailController@getSubModuleHowToApply');

    Route::get('get/sub-module/sample-papers/details/{sub_module}', 'Api\ApiSubModuleDetailController@getSampleQuestionPapers');

    Route::get('get/sub-module/study-material/details/{sub_module}', 'Api\ApiSubModuleDetailController@getStudyMaterials');

    Route::post('change-password', 'Api\ApiPasswordController@changePassword');

    Route::post('forgot-password', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    
    Route::get('get/plan-usage/{user_id}', 'Api\ApiPlanUsageController@getPlanUsage');

    // Route::get('get/notify-count/{module_id}/{user_id}', 'Api\ApiNotificationController@getNotificationCount');

    Route::get('get/notify-count/{user_id}', 'Api\ApiNotificationController@getNotificationCountFromUserTable');

    Route::get('get/notifications/{module_id}/{user_id}', 'Api\ApiNotificationController@getNotifications');

    Route::get('get/notification-details/{user_id}/{id}', 'Api\ApiNotificationController@getNotificationDetails');

    Route::get('get/chart-details/{user_id}', 'Api\ApiChartController@getChartDetails');

    Route::group(['middleware' => 'jwt-auth'], function () {
        // enable for jwt-auth
        // Route::post('user-details', 'Api\ApiController@getUserDetails');
        // Route::get('validate-token', 'Api\ApiController@validateToken');
        // Route::get('get/exams', 'Api\ApiExamController@getAllExams');
        // Route::get('get/exams-marks/{user_id}', 'Api\ApiExamController@getExamsWithMarks');    
        // Route::get('get/questions/{exam_id}', 'Api\ApiQuestionController@getAllQuestions');
        // Route::get('get/marks/{exam_id}/{user_id}', 'Api\ApiMarkController@getMarks');
        // Route::post('validate/answers', 'Api\ApiQuestionController@validateQuestionAndAnswer');
        // Route::post('payment/upgrade-plan', 'Api\ApiPaymentController@upgradePlan');
        // Route::post('validate/plan-subscribe', 'Api\ApiPaymentController@validatePlan');
        // Route::get('get/subscribe-plans', 'Api\ApiSubscribePlanController@getAllSubscribePlans');
    });
});
