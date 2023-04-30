<?php

use App\Models\Product;
use App\Models\News;
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

Route::get('/', function () {
    $LastCourses = Product::orderBy('id','DESC')->take(4)->get();
    $LastNews = News::orderBy('id','DESC')->take(6)->get();
    return view('welcome',compact('LastCourses','LastNews'));
});



Route::get('/home', function () {
    $LastCourses = Product::orderBy('id','DESC')->take(4)->get();
    $LastNews = News::orderBy('id','DESC')->take(6)->get();
    return view('welcome',compact('LastCourses','LastNews'));
})->name('home');
Route::get('/about', function () {
    return view('about');
});

// Route::get('/presentation', function () {
//     return view('presentation');
// });
// Route::get('/show-pdf', function() {
//     return response()->file(public_path().'/Presentation.pdf');
// })->name('show-pdf');


Route::get('/training_plan_trainers', function () {
    return view('training_plan_trainers');
});
Route::get('/training_plan_trainers-pdf', function() {
    return response()->file(public_path().'/Training_plan.pdf');
})->name('training_plan_trainers-pdf');
//--------------------------------------------------------------------------
Route::get('/training_manual', function () {
    return view('training_manual');
});
Route::get('/TrainingManual-pdf', function() {
    return response()->file(public_path().'/TrainingManual.pdf');
})->name('TrainingManual-pdf');

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/consultation', function () {
    return view('consultation');
});

// Route::get('/Mycourses', function () {
//     return view('mycourses');
// });//mina


Route::get('/MyLessons', function () {
    return view('lessonsDetials');
});//mina

Route::get('/languages', function () {
    return view('languages');
});
// Route::get('/gallery', function () {
//     return view('gallery');
// });
Route::get('/ielts_test', function () {
    return view('ielts_test');
});
Route::get('/our_courses', function () {
    return view('our_courses');
});
Route::get('/academic_rules', function () {
    return view('academic_rules');
});
Route::get('/check_activities', function () {
    return view('check_activities');
});
Route::get('/copyright', function () {
    return view('copyright');
});
Route::get('/attendance', function () {
    return view('attendance');
});
Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/view_attachments', function () {
    return view('view_attachments');
});
Route::get('languages/send-data', function () {
    return view('data');
});
// Route::get('trainee_questionnaire', function () {
//     return view('trainee_questionnaire');
// });
// Route::get('trainers_questionnaire', function () {
//     return view('trainers_questionnaire');
// });
Route::get('rapporteur_plan', function () {
    return view('rapporteur_plan');
});
Route::get('support', function () {
    return view('support');
});
Route::get('rapporteur_plan', function () {
    return view('rapporteur_plan');
});
Route::get('trainees_guides', function () {
    return view('trainees_guides');
});
Route::get('complaints_suggestions', function () {
    return view('complaints_suggestions');
});

Route::get('Home_mina', function () {
    return view('homesubscripecourse');
});


Route::prefix('traineeGuides')->group(function (){
    Route::get('new_registration',function (){
       return view('traineeGuides.new_registration');
    });
    Route::get('signIn_verification',function (){
        return view('traineeGuides.signIn_verification');
    });
    Route::get('find_trainee_questionnaire',function (){
        return view('traineeGuides.find_trainee_questionnaire');
    });
    Route::get('technical_requirements',function (){
        return view('traineeGuides.technical_requirements');
    });
    Route::get('browsers_support',function (){
        return view('traineeGuides.browsers_support');
    });
});



Route::group([ 'namespace' => 'App\Http\Controllers\Front' ],function(){

    Route::get('/certifications/{student}/{course}', 'CoursesController@certifications')->name("certifications");


    Route::get('/gallery', 'HomeController@gallery')->name('gallery');
    Route::get('/trainee_questionnaire', 'HomeController@trainee_questionnaire')->name('trainee_questionnaire');
    Route::get('/trainers_questionnaire', 'HomeController@trainers_questionnaire')->name('trainers_questionnaire');
    Route::get('/presentation', 'HomeController@presentation')->name('presentation');

    Route::get('courses/{id}', 'CoursesController@courses')->name('courses');
    Route::post('course/register', 'CoursesController@register')->name('course/register');
    Route::get('course/details/{id}', 'CoursesController@course_details')->name('course/details');

    // Route::post('course/register/{id}', 'CoursesController@course_register')->name('course/register');

    Route::get('level_test', 'StudentController@test_level')->name('level_test');
    Route::get('test-level-save', 'StudentController@test_level_save')->name('test-level-save');

    // reset password
    Route::get('reset-password', 'AuthController@reset_password')->name('user/reset-password');
    Route::post('reset-password', 'AuthController@send_code')->name('user/send-sode');
    Route::get('form/reset-password', 'AuthController@reset_password_last')->name('user/form/reset-password');
    Route::post('reset-password/update', 'AuthController@password_update')->name('user/reset-password/update');

    Route::get('login', 'AuthController@login')->name('user/login');
    Route::post('login', 'AuthController@check_login')->name('user/check-login');

    Route::get('sign-in', 'AuthController@sign_in')->name('user/sign-in');
    Route::post('sign-in', 'AuthController@check_sign_in')->name('user/check-sign-in');

    Route::group(['middleware' => 'auth:web'],function(){

        Route::get('course/Mycourses','CoursesController@student_courses')->name('course/mycourses');

        Route::get('course/quiz/{id}','CoursesController@student_courses_quiz')->name('course/mycourses/quiz');
        Route::get('course/student/courses/rate/{id}','CoursesController@student_courses_rate')->name('course/student/courses/rate');
        Route::post('course/quiz/answer/{id}','CoursesController@student_courses_quiz_answer')->name('course/mycourses/quiz/answer');

        Route::get('lesson/details/{id}', 'CoursesController@lesson_details')->name('lesson/details');
        Route::get('lesson/download/file/{id}', 'CoursesController@downloadVideo')->name('lesson/download/file');
        Route::get('lesson/next/{id}', 'CoursesController@nextlesson')->name('lesson/next');
        Route::get('lesson/prev/{id}', 'CoursesController@prevlesson')->name('lesson/prev');
        Route::get('lesson/checkmore', 'CoursesController@checkmore')->name('lesson/checkmore');

        Route::get('logout', 'AuthController@logout')->name('user/logout');
        Route::get('student/notifications', 'StudentController@getNotifications')->name('get/student/notifications');
        Route::get('student/notifications/get-more', 'StudentController@getMoreNotifications')->name('get/student/notifications/get-more');
        Route::get('student/new/notifications', 'StudentController@getNewNotifications')->name('get/student/new/notifications');

        Route::get('student/file/{id}', 'StudentController@getFile')->name('get/student/file');
        Route::get('student/file/download/{id}', 'StudentController@getFileDownload')->name('get/student/file/download');

    });
});
