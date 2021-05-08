<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\lecturer\LessonController;
use App\Http\Controllers\lecturer\MassageController;
use App\Http\Controllers\lecturer\LecturerController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdmincourseController;
use App\Http\Controllers\lecturer\TestController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;

use App\Http\Controllers\TagController;
use App\Http\Controllers\PaypalController;
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



Route::get('/adminlogin', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
Route::post('/adminlogin', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::get('/adminlogout', [AdminAuthController::class, 'logout'])->name('adminLogout');



Route::group(['middleware' => ['auth:admin']], function () {
	// Admin Dashboard AdminController
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/clientuser', [AdminController::class, 'home'])->name('clientuser');
    Route::get('/addmin/lecturer', [AdminController::class, 'addminlecturer'])->name('addminlecturer');
    Route::get('/client', [AdminController::class, 'client'])->name('client');
    Route::get('/usershow/{id}', [AdminController::class, 'usershow'])->name('usershow');
    Route::get('/lecturershow/{id}', [AdminController::class, 'lecturershow'])->name('lecturershow');
    Route::get('/tags', [AdminController::class, 'tags'])->name('tags');
    Route::get('/storetag', [AdminController::class, 'storetag'])->name('storetag');
    Route::get('/deltag/{tag}', [TagController::class, 'deltag'])->name('deltag');


    //setting controller
    Route::get('/delete/setting/{setting}', [SettingController::class, 'deletsetting'])->name('delete.setting');
    Route::get('/settings', [SettingController::class, 'settings'])->name('settings');
    Route::post('/add/to/links', [SettingController::class, 'addtolinks'])->name('addtolinks');
    Route::post('/addtoservices', [SettingController::class, 'addtoservices'])->name('addtoservices');
    Route::post('/update/setting/{id}', [SettingController::class, 'updatesetting'])->name('updatesetting');
    Route::get('/course/show/{id}', [AdminController::class, 'courseshow'])->name('courseshow');
    Route::post('/admin/user/register', [AdminController::class, 'userstore'])->name('admin.user.register');
    Route::post('/admin/lecturer/register', [AdminController::class, 'lecturerstore'])->name('admin.lecturer.register');
 //admin corsecontroller
    Route::get('/Financial', [AdmincourseController::class, 'Financial'])->name('Financial');
    Route::post('/admin/add/course', [AdmincourseController::class, 'adminaddcourse'])->name('admin.add.course');
    Route::get('/admin/add/lesson/{id}', [AdmincourseController::class, 'adminaddlesson'])->name('admin.add.lesson');
    Route::get('/admin/show/certification', [AdmincourseController::class, 'adminshowcert'])->name('admin.show.certification');
    Route::get('/changeStatus',  [AdmincourseController::class, 'changeStatus'])->name('changeStatus');
    Route::get('/admin/show/test/{id}', [AdmincourseController::class, 'adminshowtest'])->name('admin.show.test');
    Route::get('/admin/show/lassons/{id}', [AdmincourseController::class, 'adminshowlassons'])->name('admin.show.lassons');
    Route::get('/admin/add/question/{id}', [AdmincourseController::class, 'adminaddquestion'])->name('admin.add.question');
    Route::get('/addmin/courses', [AdmincourseController::class, 'admincourse'])->name('courses2');
    Route::get('/admin/order', [AdmincourseController::class, 'adminorder'])->name('order2');

    Route::get('/admin/store/test', [TestController::class, 'adminstoretest'])->name('adminstoretest');
    Route::POST('admin/add/lesson/{id}', [LessonController::class, 'adminaddlesson'])->name('adminaddlesson');

    Route::get('/setting/table', function () { return view('admin.settingtable');})->name('settingtable');
    Route::get('/setting/table/links', function () {return view('admin.linksettings');})->name('settingtablelinks');
    Route::get('/admin/add/course', function () {return view('admin.course.addcourse');})->name('admincourse');
});
/*
Route::group(['prefix' => LaravelLocalization::setLocale(),
 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
*/
    
        Route::group(['middleware' => ['auth']], function () {

            Route::post('/paypal',[PaypalController::class,'index'])->middleware(['auth'])->name('paypal_call');
            Route::get('/paypal/return',[PaypalController::class,'paypalReturn'])->name('paypal_return');
            Route::get('/paypal/cancel',[PaypalController::class,'paypalCancel'])->name('paypal_cancel');
            Route::get('/certif/{id}', [CertificateController::class, 'certif'])->name('certif');
            Route::get('/certorder', [CertificateController::class, 'certorder'])->name('certorder');
            Route::get('/course_intro/{id}', [CourseController::class, 'courseintro'])->name('course_intro');
            Route::get('/video/{id}', [CourseController::class, 'video'])->name('video');
            Route::get('/mycourses', [CourseController::class, 'mycourses'])->name('mycourses');
            Route::get('/addusertag', [TagController::class, 'addusertag'])->name('addusertag');
            Route::get('/del/user/tag/{tag}', [TagController::class, 'delusertag'])->name('delusertag');
            Route::get('/cert/{course_id}/{score}', [CertificateController::class, 'cert'])->name('cert');
            Route::get('/alartcourse/{id}', [CourseController::class, 'alart'])->name('alartcourse');

            Route::get('/completed/{lesson_id}', [CourseController::class, 'completed'])->name('completed');
            Route::get('/test/{id}', [TestController::class, 'test'])->name('test');
            Route::get('/course/checout/{price}', [CourseController::class, 'coursechecout'])->name('coursecheckout');
            Route::get('/course/page/{id}', [CourseController::class, 'coursepage'])->name('course_page');
            Route::get('/mytags', function () { return view('mytags'); })->name('mytags');
            Route::get('/mycertifications', function () { return view('mycertifications'); })->name('mycertifications');

        });
        Route::group(['middleware' => ['auth:lecturer']], function () {
            
            Route::resource('lessons', LessonController::class);

            Route::get('/storecourse', [CourseController::class, 'storecourse'])->name('storecourse');
            Route::get('/addtag', [TagController::class, 'addtag'])->name('addtag');
            Route::get('/del/lecturer/tag/{tag}', [TagController::class, 'dellecturertag'])->name('dellecturertag');

            Route::POST('/addlesson/{id}', [LessonController::class, 'addlesson'])->name('addlesson');
            Route::get('/mail/{id}', [MassageController::class, 'send'])->name('mail');
            Route::get('/alart/{id}', [CourseController::class, 'alart'])->name('alart');
            Route::get('/course/lessons/{id}', [CourseController::class, 'coursepage2'])->name('course_lesson');
            Route::get('/addtest/{id}', [TestController::class, 'addtest'])->name('addtest');
            Route::get('/storetest', [TestController::class, 'storetest'])->name('storetest');
            Route::get('/addqu/{id}', [TestController::class, 'addqu'])->name('addquestion');
            Route::get('/lecturer/home', function () { return view('lecturerhome'); })->name('lecturerhome');
            Route::get('/addlec/{id}', function ($id) { return view('add-lecture')->with('id',$id);})->name('addlec');

        });

        Route::resource('courses', CourseController::class);
        Route::get('/', [CourseController::class, 'index'])->name('/');
        Route::get('/about-us', [AdminController::class, 'aboutus'])->name('about-us');

   //});

Route::get('/lec/register', [LecturerController::class, 'create'])->name('lectuer.register');
Route::get('/lec/log', [LecturerController::class, 'leclogin'])->name('lecturer.login');
Route::post('/saveleclog', [LecturerController::class, 'savelogin'])->name('save.lecturer.login');
Route::get('/lecturer/logou', [LecturerController::class, 'logout'])->name('lecturerLogout');
Route::get('/search', [CourseController::class, 'search'])->name('search');
Route::post('/lec/store/gister', [LecturerController::class, 'store'])->name('storeregister');

Route::get('/regist', function () {
    return view('register');
})->name('regist');
Route::get('/registuser', function () {
    return view('admin.auth.regesteruser');
})->name('registuser');

Route::get('/regist/lectuer', function () {
    return view('admin.auth.regesterlecturer');
})->name('registlectuer');



Route::get('/contact-us', function () {
    return view('contact-us');

})->name('contact-us');
Route::get('/add/course', function () {
    return view('addcourse');
})->name('addcourse');





      
    
             
     
     



require __DIR__.'/auth.php';
