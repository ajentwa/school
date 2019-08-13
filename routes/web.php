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

// Login
Route::get('/', 'Backend\Login\LoginController@index')->name('login');
Route::post('login', 'Backend\Login\LoginController@userLogin');
Route::get('logout', 'Backend\Login\LoginController@userLogout');

// Dashboard
Route::get('dashboard', 'Backend\DashboardController@index')->middleware('auth');

// Administrator
Route::get('administrator', 'Backend\UserManagement\Admin\AdminController@index')->middleware('auth');
Route::get('administrator/create', 'Backend\UserManagement\Admin\AdminController@create')->middleware('auth');
Route::post('administrator/store', 'Backend\UserManagement\Admin\AdminController@store')->middleware('auth');
Route::get('administrator/show/{id}', 'Backend\UserManagement\Admin\AdminController@show')->middleware('auth');
Route::get('administrator/edit/{id}', 'Backend\UserManagement\Admin\AdminController@edit')->middleware('auth');
Route::post('administrator/update/{id}', 'Backend\UserManagement\Admin\AdminController@update')->middleware('auth');
Route::get('administrator/delete/{id}', 'Backend\UserManagement\Admin\AdminController@destroy')->middleware('auth');


// Officer
Route::get('officer', 'Backend\UserManagement\Officers\OfficerController@index')->middleware('auth');
Route::get('officer/create', 'Backend\UserManagement\Officers\OfficerController@create')->middleware('auth');
Route::post('officer/store', 'Backend\UserManagement\Officers\OfficerController@store')->middleware('auth');
Route::get('officer/show/{id}', 'Backend\UserManagement\Officers\OfficerController@show')->middleware('auth');
Route::get('officer/edit/{id}', 'Backend\UserManagement\Officers\OfficerController@edit')->middleware('auth');
Route::post('officer/update/{id}', 'Backend\UserManagement\Officers\OfficerController@update')->middleware('auth');
Route::get('officer/delete/{id}', 'Backend\UserManagement\Officers\OfficerController@destroy')->middleware('auth');

// Profile
Route::get('profile/show/{id}', 'Backend\UserManagement\Profile\ProfileController@show')->middleware('auth');
Route::get('profile/edit/{id}', 'Backend\UserManagement\Profile\ProfileController@edit')->middleware('auth');
Route::post('profile/update/{id}', 'Backend\UserManagement\Profile\ProfileController@update')->middleware('auth');

// Teachers
Route::get('teacher', 'Backend\UserManagement\Teachers\TeacherController@index')->middleware('auth');
Route::get('teacher/create', 'Backend\UserManagement\Teachers\TeacherController@create')->middleware('auth');
Route::post('teacher/store', 'Backend\UserManagement\Teachers\TeacherController@store')->middleware('auth');
Route::get('teacher/show/{id}', 'Backend\UserManagement\Teachers\TeacherController@show')->middleware('auth');
Route::get('teacher/edit/{id}', 'Backend\UserManagement\Teachers\TeacherController@edit')->middleware('auth');
Route::post('teacher/update/{id}', 'Backend\UserManagement\Teachers\TeacherController@update')->middleware('auth');
Route::get('teacher/delete/{id}', 'Backend\UserManagement\Teachers\TeacherController@destroy')->middleware('auth');

// Students
Route::get('student', 'Backend\UserManagement\Students\StudentController@index')->middleware('auth');
Route::get('student/nursery', 'Backend\UserManagement\Students\StudentController@nursery')->middleware('auth');
Route::get('student/primary', 'Backend\UserManagement\Students\StudentController@primary')->middleware('auth');

// BabyClass
Route::get('babyclass', 'Backend\UserManagement\Students\Nursery\BabyclassController@index')->middleware('auth');
Route::get('babyclass/create', 'Backend\UserManagement\Students\Nursery\BabyclassController@create')->middleware('auth');
Route::post('babyclass/store', 'Backend\UserManagement\Students\Nursery\BabyclassController@store')->middleware('auth');
Route::get('babyclass/show/{id}', 'Backend\UserManagement\Students\Nursery\BabyclassController@show')->middleware('auth');
Route::get('babyclass/edit/{id}', 'Backend\UserManagement\Students\Nursery\BabyclassController@edit')->middleware('auth');
Route::post('babyclass/update/{id}', 'Backend\UserManagement\Students\Nursery\BabyclassController@update')->middleware('auth');
Route::get('babyclass/delete/{id}', 'Backend\UserManagement\Students\Nursery\BabyclassController@destroy')->middleware('auth');

// Kindergateen I
Route::get('kinderone', 'Backend\UserManagement\Students\Nursery\KindergateenoneController@index')->middleware('auth');
Route::get('kinderone/create', 'Backend\UserManagement\Students\Nursery\KindergateenoneController@create')->middleware('auth');
Route::post('kinderone/store', 'Backend\UserManagement\Students\Nursery\KindergateenoneController@store')->middleware('auth');
Route::get('kinderone/show/{id}', 'Backend\UserManagement\Students\Nursery\KindergateenoneController@show')->middleware('auth');
Route::get('kinderone/edit/{id}', 'Backend\UserManagement\Students\Nursery\KindergateenoneController@edit')->middleware('auth');
Route::post('kinderone/update/{id}', 'Backend\UserManagement\Students\Nursery\KindergateenoneController@update')->middleware('auth');
Route::get('kinderone/delete/{id}', 'Backend\UserManagement\Students\Nursery\KindergateenoneController@destroy')->middleware('auth');

// Kindergateen II
Route::get('kindertwo', 'Backend\UserManagement\Students\Nursery\KindergateentwoController@index')->middleware('auth');
Route::get('kindertwo/create', 'Backend\UserManagement\Students\Nursery\KindergateentwoController@create')->middleware('auth');
Route::post('kindertwo/store', 'Backend\UserManagement\Students\Nursery\KindergateentwoController@store')->middleware('auth');
Route::get('kindertwo/show/{id}', 'Backend\UserManagement\Students\Nursery\KindergateentwoController@show')->middleware('auth');
Route::get('kindertwo/edit/{id}', 'Backend\UserManagement\Students\Nursery\KindergateentwoController@edit')->middleware('auth');
Route::post('kindertwo/update/{id}', 'Backend\UserManagement\Students\Nursery\KindergateentwoController@update')->middleware('auth');
Route::get('kindertwo/delete/{id}', 'Backend\UserManagement\Students\Nursery\KindergateentwoController@destroy')->middleware('auth');

// Standard I
Route::get('standardone', 'Backend\UserManagement\Students\Primary\StandardoneController@index')->middleware('auth');
Route::get('standardone/create', 'Backend\UserManagement\Students\Primary\StandardoneController@create')->middleware('auth');
Route::post('standardone/store', 'Backend\UserManagement\Students\Primary\StandardoneController@store')->middleware('auth');
Route::get('standardone/show/{id}', 'Backend\UserManagement\Students\Primary\StandardoneController@show')->middleware('auth');
Route::get('standardone/edit/{id}', 'Backend\UserManagement\Students\Primary\StandardoneController@edit')->middleware('auth');
Route::post('standardone/update/{id}', 'Backend\UserManagement\Students\Primary\StandardoneController@update')->middleware('auth');
Route::get('standardone/delete/{id}', 'Backend\UserManagement\Students\Primary\StandardoneController@destroy')->middleware('auth');

// Standard II
Route::get('standardtwo', 'Backend\UserManagement\Students\Primary\StandardtwoController@index')->middleware('auth');
Route::get('standardtwo/create', 'Backend\UserManagement\Students\Primary\StandardtwoController@create')->middleware('auth');
Route::post('standardtwo/store', 'Backend\UserManagement\Students\Primary\StandardtwoController@store')->middleware('auth');
Route::get('standardtwo/show/{id}', 'Backend\UserManagement\Students\Primary\StandardtwoController@show')->middleware('auth');
Route::get('standardtwo/edit/{id}', 'Backend\UserManagement\Students\Primary\StandardtwoController@edit')->middleware('auth');
Route::post('standardtwo/update/{id}', 'Backend\UserManagement\Students\Primary\StandardtwoController@update')->middleware('auth');
Route::get('standardtwo/delete/{id}', 'Backend\UserManagement\Students\Primary\StandardtwoController@destroy')->middleware('auth');

// Standard III
Route::get('standardthree', 'Backend\UserManagement\Students\Primary\StandardthreeController@index')->middleware('auth');
Route::get('standardthree/create', 'Backend\UserManagement\Students\Primary\StandardthreeController@create')->middleware('auth');
Route::post('standardthree/store', 'Backend\UserManagement\Students\Primary\StandardthreeController@store')->middleware('auth');
Route::get('standardthree/show/{id}', 'Backend\UserManagement\Students\Primary\StandardthreeController@show')->middleware('auth');
Route::get('standardthree/edit/{id}', 'Backend\UserManagement\Students\Primary\StandardthreeController@edit')->middleware('auth');
Route::post('standardthree/update/{id}', 'Backend\UserManagement\Students\Primary\StandardthreeController@update')->middleware('auth');
Route::get('standardthree/delete/{id}', 'Backend\UserManagement\Students\Primary\StandardthreeController@destroy')->middleware('auth');

// Standard IV
Route::get('standardfour', 'Backend\UserManagement\Students\Primary\StandardfourController@index')->middleware('auth');
Route::get('standardfour/create', 'Backend\UserManagement\Students\Primary\StandardfourController@create')->middleware('auth');
Route::post('standardfour/store', 'Backend\UserManagement\Students\Primary\StandardfourController@store')->middleware('auth');
Route::get('standardfour/show/{id}', 'Backend\UserManagement\Students\Primary\StandardfourController@show')->middleware('auth');
Route::get('standardfour/edit/{id}', 'Backend\UserManagement\Students\Primary\StandardfourController@edit')->middleware('auth');
Route::post('standardfour/update/{id}', 'Backend\UserManagement\Students\Primary\StandardfourController@update')->middleware('auth');
Route::get('standardfour/delete/{id}', 'Backend\UserManagement\Students\Primary\StandardfourController@destroy')->middleware('auth');

// Standard V
Route::get('standardfive', 'Backend\UserManagement\Students\Primary\StandardfiveController@index')->middleware('auth');
Route::get('standardfive/create', 'Backend\UserManagement\Students\Primary\StandardfiveController@create')->middleware('auth');
Route::post('standardfive/store', 'Backend\UserManagement\Students\Primary\StandardfiveController@store')->middleware('auth');
Route::get('standardfive/show/{id}', 'Backend\UserManagement\Students\Primary\StandardfiveController@show')->middleware('auth');
Route::get('standardfive/edit/{id}', 'Backend\UserManagement\Students\Primary\StandardfiveController@edit')->middleware('auth');
Route::post('standardfive/update/{id}', 'Backend\UserManagement\Students\Primary\StandardfiveController@update')->middleware('auth');
Route::get('standardfive/delete/{id}', 'Backend\UserManagement\Students\Primary\StandardfiveController@destroy')->middleware('auth');

// Standard VI
Route::get('standardsix', 'Backend\UserManagement\Students\Primary\StandardsixController@index')->middleware('auth');
Route::get('standardsix/create', 'Backend\UserManagement\Students\Primary\StandardsixController@create')->middleware('auth');
Route::post('standardsix/store', 'Backend\UserManagement\Students\Primary\StandardsixController@store')->middleware('auth');
Route::get('standardsix/show/{id}', 'Backend\UserManagement\Students\Primary\StandardsixController@show')->middleware('auth');
Route::get('standardsix/edit/{id}', 'Backend\UserManagement\Students\Primary\StandardsixController@edit')->middleware('auth');
Route::post('standardsix/update/{id}', 'Backend\UserManagement\Students\Primary\StandardsixController@update')->middleware('auth');
Route::get('standardsix/delete/{id}', 'Backend\UserManagement\Students\Primary\StandardsixController@destroy')->middleware('auth');

// Standard VII
Route::get('standardseven', 'Backend\UserManagement\Students\Primary\StandardsevenController@index')->middleware('auth');
Route::get('standardseven/create', 'Backend\UserManagement\Students\Primary\StandardsevenController@create')->middleware('auth');
Route::post('standardseven/store', 'Backend\UserManagement\Students\Primary\StandardsevenController@store')->middleware('auth');
Route::get('standardseven/show/{id}', 'Backend\UserManagement\Students\Primary\StandardsevenController@show')->middleware('auth');
Route::get('standardseven/edit/{id}', 'Backend\UserManagement\Students\Primary\StandardsevenController@edit')->middleware('auth');
Route::post('standardseven/update/{id}', 'Backend\UserManagement\Students\Primary\StandardsevenController@update')->middleware('auth');
Route::get('standardseven/delete/{id}', 'Backend\UserManagement\Students\Primary\StandardsevenController@destroy')->middleware('auth');

// Parents
Route::get('parent', 'Backend\UserManagement\Parents\ParentController@index')->middleware('auth');

// Workers
Route::get('worker', 'Backend\UserManagement\Workers\WorkerController@index')->middleware('auth');
Route::get('worker/create', 'Backend\UserManagement\Workers\WorkerController@create')->middleware('auth');
Route::post('worker/store', 'Backend\UserManagement\Workers\WorkerController@store')->middleware('auth');
Route::get('worker/show/{id}', 'Backend\UserManagement\Workers\WorkerController@show')->middleware('auth');
Route::get('worker/edit/{id}', 'Backend\UserManagement\Workers\WorkerController@edit')->middleware('auth');
Route::post('worker/update/{id}', 'Backend\UserManagement\Workers\WorkerController@update')->middleware('auth');
Route::get('worker/delete/{id}', 'Backend\UserManagement\Workers\WorkerController@destroy')->middleware('auth');


// Subjects
Route::get('subject', 'Backend\Subjects\SubjectController@index')->middleware('auth');
Route::get('subject/create', 'Backend\Subjects\SubjectController@create')->middleware('auth');
Route::post('subject/store', 'Backend\Subjects\SubjectController@store')->middleware('auth');
Route::get('subject/show/{subject_id}', 'Backend\Subjects\SubjectController@show')->middleware('auth');
Route::get('subject/edit/{subject_id}', 'Backend\Subjects\SubjectController@edit')->middleware('auth');
Route::post('subject/update/{subject_id}', 'Backend\Subjects\SubjectController@update')->middleware('auth');
Route::get('subject/delete/{subject_id}', 'Backend\Subjects\SubjectController@destroy')->middleware('auth');

// Classes
Route::get('class', 'Backend\Classes\ClassController@index')->middleware('auth');
Route::get('class/create', 'Backend\Classes\ClassController@create')->middleware('auth');
Route::post('class/store', 'Backend\Classes\ClassController@store')->middleware('auth');
Route::get('class/show/{class_id}', 'Backend\Classes\ClassController@show')->middleware('auth');
Route::get('class/edit/{class_id}', 'Backend\Classes\ClassController@edit')->middleware('auth');
Route::post('class/update/{class_id}', 'Backend\Classes\ClassController@update')->middleware('auth');
Route::get('class/delete/{class_id}', 'Backend\Classes\ClassController@destroy')->middleware('auth');

// Fee Payment
Route::get('feepayment', 'Backend\Fees\FeepaymentController@index')->middleware('auth');

// Make Payment
Route::get('maketuitionpayment', 'Backend\Fees\Makepayment\MaketuitionpaymentController@index')->middleware('auth');
Route::get('makeremedialpayment', 'Backend\Fees\Makepayment\MakeremedialpaymentController@index')->middleware('auth');
Route::get('maketeaandlunchpayment', 'Backend\Fees\Makepayment\MaketeaandlunchpaymentController@index')->middleware('auth');
Route::get('makeuniformpayment', 'Backend\Fees\Makepayment\MakeuniformpaymentController@index')->middleware('auth');
Route::get('makemalambapayment', 'Backend\Fees\Makepayment\MakemalambapaymentController@index')->middleware('auth');

// Tuition fee
Route::get('tuitionfee', 'Backend\Fees\Tuitionfee\TuitionfeeController@index')->middleware('auth');

// Tuition fee for babyclass
Route::get('tuitionfeebabyclass', 'Backend\Fees\Tuitionfee\TuitionfeebabyclassController@index')->middleware('auth');
Route::get('tuitionfeebabyclass/create', 'Backend\Fees\Tuitionfee\TuitionfeebabyclassController@create')->middleware('auth');
Route::post('tuitionfeebabyclass/store', 'Backend\Fees\Tuitionfee\TuitionfeebabyclassController@store')->middleware('auth');
Route::get('tuitionfeebabyclass/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeebabyclassController@show')->middleware('auth');
Route::get('tuitionfeebabyclass/edit/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeebabyclassController@edit')->middleware('auth');
Route::post('tuitionfeebabyclass/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeebabyclassController@update')->middleware('auth');
Route::get('tuitionfeebabyclass/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeebabyclassController@destroy')->middleware('auth');

// Tuition fee for Kindergateen one
Route::get('tuitionfeekinderone', 'Backend\Fees\Tuitionfee\TuitionfeekinderoneController@index')->middleware('auth');
Route::get('tuitionfeekinderone/create', 'Backend\Fees\Tuitionfee\TuitionfeekinderoneController@create')->middleware('auth');
Route::post('tuitionfeekinderone/store', 'Backend\Fees\Tuitionfee\TuitionfeekinderoneController@store')->middleware('auth');
Route::get('tuitionfeekinderone/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeekinderoneController@show')->middleware('auth');
Route::get('tuitionfeekinderone/edit/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeekinderoneController@edit')->middleware('auth');
Route::post('tuitionfeekinderone/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeekinderoneController@update')->middleware('auth');
Route::get('tuitionfeekinderone/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeekinderoneController@destroy')->middleware('auth');

// Tuition fee for Kindergateen two
Route::get('tuitionfeekindertwo', 'Backend\Fees\Tuitionfee\TuitionfeekindertwoController@index')->middleware('auth');
Route::get('tuitionfeekindertwo/create', 'Backend\Fees\Tuitionfee\TuitionfeekindertwoController@create')->middleware('auth');
Route::post('tuitionfeekindertwo/store', 'Backend\Fees\Tuitionfee\TuitionfeekindertwoController@store')->middleware('auth');
Route::get('tuitionfeekindertwo/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeekindertwoController@show')->middleware('auth');
Route::get('tuitionfeekindertwo/edit/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeekindertwoController@edit')->middleware('auth');
Route::post('tuitionfeekindertwo/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeekindertwoController@update')->middleware('auth');
Route::get('tuitionfeekindertwo/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeekindertwoController@destroy')->middleware('auth');

// Tuition fee for Standard one
Route::get('tuitionfeestandardone', 'Backend\Fees\Tuitionfee\TuitionfeestandardoneController@index')->middleware('auth');
Route::get('tuitionfeestandardone/create', 'Backend\Fees\Tuitionfee\TuitionfeestandardoneController@create')->middleware('auth');
Route::post('tuitionfeestandardone/store', 'Backend\Fees\Tuitionfee\TuitionfeestandardoneController@store')->middleware('auth');
Route::get('tuitionfeestandardone/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardoneController@show')->middleware('auth');
Route::get('tuitionfeestandardone/edit/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardoneController@edit')->middleware('auth');
Route::post('tuitionfeestandardone/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardoneController@update')->middleware('auth');
Route::get('tuitionfeestandardone/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardoneController@destroy')->middleware('auth');

// Tuition fee for Standard two
Route::get('tuitionfeestandardtwo', 'Backend\Fees\Tuitionfee\TuitionfeestandardtwoController@index')->middleware('auth');
Route::get('tuitionfeestandardtwo/create', 'Backend\Fees\Tuitionfee\TuitionfeestandardtwoController@create')->middleware('auth');
Route::post('tuitionfeestandardtwo/store', 'Backend\Fees\Tuitionfee\TuitionfeestandardtwoController@store')->middleware('auth');
Route::get('tuitionfeestandardtwo/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardtwoController@show')->middleware('auth');
Route::get('tuitionfeestandardtwo/edit/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardtwoController@edit')->middleware('auth');
Route::post('tuitionfeestandardtwo/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardtwoController@update')->middleware('auth');
Route::get('tuitionfeestandardtwo/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardtwoController@destroy')->middleware('auth');

// Tuition fee for Standard three
Route::get('tuitionfeestandardthree', 'Backend\Fees\Tuitionfee\TuitionfeestandardthreeController@index')->middleware('auth');
Route::get('tuitionfeestandardthree/create', 'Backend\Fees\Tuitionfee\TuitionfeestandardthreeController@create')->middleware('auth');
Route::post('tuitionfeestandardthree/store', 'Backend\Fees\Tuitionfee\TuitionfeestandardthreeController@store')->middleware('auth');
Route::get('tuitionfeestandardthree/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardthreeController@show')->middleware('auth');
Route::get('tuitionfeestandardthree/edit/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardthreeController@edit')->middleware('auth');
Route::post('tuitionfeestandardthree/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardthreeController@update')->middleware('auth');
Route::get('tuitionfeestandardthree/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardthreeController@destroy')->middleware('auth');

// Tuition fee for Standard four
Route::get('tuitionfeestandardfour', 'Backend\Fees\Tuitionfee\TuitionfeestandardfourController@index')->middleware('auth');
Route::get('tuitionfeestandardfour/create', 'Backend\Fees\Tuitionfee\TuitionfeestandardfourController@create')->middleware('auth');
Route::post('tuitionfeestandardfour/store', 'Backend\Fees\Tuitionfee\TuitionfeestandardfourController@store')->middleware('auth');
Route::get('tuitionfeestandardfour/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardfourController@show')->middleware('auth');
Route::get('tuitionfeestandardfour/edit/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardfourController@edit')->middleware('auth');
Route::post('tuitionfeestandardfour/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardfourController@update')->middleware('auth');
Route::get('tuitionfeestandardfour/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardfourController@destroy')->middleware('auth');

// Tuition fee for Standard five
Route::get('tuitionfeestandardfive', 'Backend\Fees\Tuitionfee\TuitionfeestandardfiveController@index')->middleware('auth');
Route::get('tuitionfeestandardfive/create', 'Backend\Fees\Tuitionfee\TuitionfeestandardfiveController@create')->middleware('auth');
Route::post('tuitionfeestandardfive/store', 'Backend\Fees\Tuitionfee\TuitionfeestandardfiveController@store')->middleware('auth');
Route::get('tuitionfeestandardfive/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardfiveController@show')->middleware('auth');
Route::get('tuitionfeestandardfive/edit/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardfiveController@edit')->middleware('auth');
Route::post('tuitionfeestandardfive/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardfiveController@update')->middleware('auth');
Route::get('tuitionfeestandardfive/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardfiveController@destroy')->middleware('auth');

// Tuition fee for Standard six
Route::get('tuitionfeestandardsix', 'Backend\Fees\Tuitionfee\TuitionfeestandardsixController@index')->middleware('auth');
Route::get('tuitionfeestandardsix/create', 'Backend\Fees\Tuitionfee\TuitionfeestandardsixController@create')->middleware('auth');
Route::post('tuitionfeestandardsix/store', 'Backend\Fees\Tuitionfee\TuitionfeestandardsixController@store')->middleware('auth');
Route::get('tuitionfeestandardsix/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardsixController@show')->middleware('auth');
Route::get('tuitionfeestandardsix/edit/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardsixController@edit')->middleware('auth');
Route::post('tuitionfeestandardsix/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardsixController@update')->middleware('auth');
Route::get('tuitionfeestandardsix/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardsixController@destroy')->middleware('auth');

// Tuition fee for Standard seven
Route::get('tuitionfeestandardseven', 'Backend\Fees\Tuitionfee\TuitionfeestandardsevenController@index')->middleware('auth');
Route::get('tuitionfeestandardseven/create', 'Backend\Fees\Tuitionfee\TuitionfeestandardsevenController@create')->middleware('auth');
Route::post('tuitionfeestandardseven/store', 'Backend\Fees\Tuitionfee\TuitionfeestandardsevenController@store')->middleware('auth');
Route::get('tuitionfeestandardseven/show/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardsevenController@show')->middleware('auth');
Route::get('tuitionfeestandardseven/edit/{fee_id}', 'Backend\fees\Tuitionfee\TuitionfeestandardsevenController@edit')->middleware('auth');
Route::post('tuitionfeestandardseven/update/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardsevenController@update')->middleware('auth');
Route::get('tuitionfeestandardseven/delete/{fee_id}', 'Backend\Fees\Tuitionfee\TuitionfeestandardsevenController@destroy')->middleware('auth');

// Remedial fee 
Route::get('remedialfee', 'Backend\fees\Remedialfee\RemedialfeeController@index')->middleware('auth');

// Remedial fee for babyclass
Route::get('remedialfeebabyclass', 'Backend\fees\Remedialfee\RemedialfeebabyclassController@index')->middleware('auth');
Route::get('remedialfeebabyclass/create', 'Backend\fees\Remedialfee\RemedialfeebabyclassController@create')->middleware('auth');
Route::post('remedialfeebabyclass/store', 'Backend\fees\Remedialfee\RemedialfeebabyclassController@store')->middleware('auth');
Route::get('remedialfeebabyclass/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeebabyclassController@show')->middleware('auth');
Route::get('remedialfeebabyclass/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeebabyclassController@edit')->middleware('auth');
Route::post('remedialfeebabyclass/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeebabyclassController@update')->middleware('auth');
Route::get('remedialfeebabyclass/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeebabyclassController@destroy')->middleware('auth');

// Remedial fee for kindergateen one
Route::get('remedialfeekinderone', 'Backend\fees\Remedialfee\RemedialfeekinderoneController@index')->middleware('auth');
Route::get('remedialfeekinderone/create', 'Backend\fees\Remedialfee\RemedialfeekinderoneController@create')->middleware('auth');
Route::post('remedialfeekinderone/store', 'Backend\fees\Remedialfee\RemedialfeekinderoneController@store')->middleware('auth');
Route::get('remedialfeekinderone/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeekinderoneController@show')->middleware('auth');
Route::get('remedialfeekinderone/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeekinderoneController@edit')->middleware('auth');
Route::post('remedialfeekinderone/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeekinderoneController@update')->middleware('auth');
Route::get('remedialfeekinderone/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeekinderoneController@destroy')->middleware('auth');

// Remedial fee for kindergateen two
Route::get('remedialfeekindertwo', 'Backend\fees\Remedialfee\RemedialfeekindertwoController@index')->middleware('auth');
Route::get('remedialfeekindertwo/create', 'Backend\fees\Remedialfee\RemedialfeekindertwoController@create')->middleware('auth');
Route::post('remedialfeekindertwo/store', 'Backend\fees\Remedialfee\RemedialfeekindertwoController@store')->middleware('auth');
Route::get('remedialfeekindertwo/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeekindertwoController@show')->middleware('auth');
Route::get('remedialfeekindertwo/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeekindertwoController@edit')->middleware('auth');
Route::post('remedialfeekindertwo/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeekindertwoController@update')->middleware('auth');
Route::get('remedialfeekindertwo/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeekindertwoController@destroy')->middleware('auth');

// Remedial fee for Standard one
Route::get('remedialfeestandardone', 'Backend\fees\Remedialfee\RemedialfeestandardoneController@index')->middleware('auth');
Route::get('remedialfeestandardone/create', 'Backend\fees\Remedialfee\RemedialfeestandardoneController@create')->middleware('auth');
Route::post('remedialfeestandardone/store', 'Backend\fees\Remedialfee\RemedialfeestandardoneController@store')->middleware('auth');
Route::get('remedialfeestandardone/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardoneController@show')->middleware('auth');
Route::get('remedialfeestandardone/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardoneController@edit')->middleware('auth');
Route::post('remedialfeestandardone/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardoneController@update')->middleware('auth');
Route::get('remedialfeestandardone/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardoneController@destroy')->middleware('auth');

// Remedial fee for Standard two
Route::get('remedialfeestandardtwo', 'Backend\fees\Remedialfee\RemedialfeestandardtwoController@index')->middleware('auth');
Route::get('remedialfeestandardtwo/create', 'Backend\fees\Remedialfee\RemedialfeestandardtwoController@create')->middleware('auth');
Route::post('remedialfeestandardtwo/store', 'Backend\fees\Remedialfee\RemedialfeestandardtwoController@store')->middleware('auth');
Route::get('remedialfeestandardtwo/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardtwoController@show')->middleware('auth');
Route::get('remedialfeestandardtwo/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardtwoController@edit')->middleware('auth');
Route::post('remedialfeestandardtwo/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardtwoController@update')->middleware('auth');
Route::get('remedialfeestandardtwo/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardtwoController@destroy')->middleware('auth');

// Remedial fee for Standard three
Route::get('remedialfeestandardthree', 'Backend\fees\Remedialfee\RemedialfeestandardthreeController@index')->middleware('auth');
Route::get('remedialfeestandardthree/create', 'Backend\fees\Remedialfee\RemedialfeestandardthreeController@create')->middleware('auth');
Route::post('remedialfeestandardthree/store', 'Backend\fees\Remedialfee\RemedialfeestandardthreeController@store')->middleware('auth');
Route::get('remedialfeestandardthree/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardthreeController@show')->middleware('auth');
Route::get('remedialfeestandardthree/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardthreeController@edit')->middleware('auth');
Route::post('remedialfeestandardthree/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardthreeController@update')->middleware('auth');
Route::get('remedialfeestandardthree/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardthreeController@destroy')->middleware('auth');

// Remedial fee for Standard four
Route::get('remedialfeestandardfour', 'Backend\fees\Remedialfee\RemedialfeestandardfourController@index')->middleware('auth');
Route::get('remedialfeestandardfour/create', 'Backend\fees\Remedialfee\RemedialfeestandardfourController@create')->middleware('auth');
Route::post('remedialfeestandardfour/store', 'Backend\fees\Remedialfee\RemedialfeestandardfourController@store')->middleware('auth');
Route::get('remedialfeestandardfour/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardfourController@show')->middleware('auth');
Route::get('remedialfeestandardfour/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardfourController@edit')->middleware('auth');
Route::post('remedialfeestandardfour/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardfourController@update')->middleware('auth');
Route::get('remedialfeestandardfour/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardfourController@destroy')->middleware('auth');

// Remedial fee for Standard five
Route::get('remedialfeestandardfive', 'Backend\fees\Remedialfee\RemedialfeestandardfiveController@index')->middleware('auth');
Route::get('remedialfeestandardfive/create', 'Backend\fees\Remedialfee\RemedialfeestandardfiveController@create')->middleware('auth');
Route::post('remedialfeestandardfive/store', 'Backend\fees\Remedialfee\RemedialfeestandardfiveController@store')->middleware('auth');
Route::get('remedialfeestandardfive/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardfiveController@show')->middleware('auth');
Route::get('remedialfeestandardfive/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardfiveController@edit')->middleware('auth');
Route::post('remedialfeestandardfive/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardfiveController@update')->middleware('auth');
Route::get('remedialfeestandardfive/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardfiveController@destroy')->middleware('auth');

// Remedial fee for Standard six
Route::get('remedialfeestandardsix', 'Backend\fees\Remedialfee\RemedialfeestandardsixController@index')->middleware('auth');
Route::get('remedialfeestandardsix/create', 'Backend\fees\Remedialfee\RemedialfeestandardsixController@create')->middleware('auth');
Route::post('remedialfeestandardsix/store', 'Backend\fees\Remedialfee\RemedialfeestandardsixController@store')->middleware('auth');
Route::get('remedialfeestandardsix/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardsixController@show')->middleware('auth');
Route::get('remedialfeestandardsix/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardsixController@edit')->middleware('auth');
Route::post('remedialfeestandardsix/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardsixController@update')->middleware('auth');
Route::get('remedialfeestandardsix/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardsixController@destroy')->middleware('auth');

// Remedial fee for Standard seven
Route::get('remedialfeestandardseven', 'Backend\fees\Remedialfee\RemedialfeestandardsevenController@index')->middleware('auth');
Route::get('remedialfeestandardseven/create', 'Backend\fees\Remedialfee\RemedialfeestandardsevenController@create')->middleware('auth');
Route::post('remedialfeestandardseven/store', 'Backend\fees\Remedialfee\RemedialfeestandardsevenController@store')->middleware('auth');
Route::get('remedialfeestandardseven/show/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardsevenController@show')->middleware('auth');
Route::get('remedialfeestandardseven/edit/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardsevenController@edit')->middleware('auth');
Route::post('remedialfeestandardseven/update/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardsevenController@update')->middleware('auth');
Route::get('remedialfeestandardseven/delete/{fee_id}', 'Backend\fees\Remedialfee\RemedialfeestandardsevenController@destroy')->middleware('auth');

// Tea and lunch fee 
Route::get('teaandlunchfee', 'Backend\fees\Teaandlunchfee\TeaandlunchfeeController@index')->middleware('auth');

// Tea and lunch fee for babyclass
Route::get('teaandlunchfeebabyclass', 'Backend\fees\Teaandlunchfee\TeaandlunchfeebabyclassController@index')->middleware('auth');
Route::get('teaandlunchfeebabyclass/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeebabyclassController@create')->middleware('auth');
Route::post('teaandlunchfeebabyclass/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeebabyclassController@store')->middleware('auth');
Route::get('teaandlunchfeebabyclass/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeebabyclassController@show')->middleware('auth');
Route::get('teaandlunchfeebabyclass/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeebabyclassController@edit')->middleware('auth');
Route::post('teaandlunchfeebabyclass/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeebabyclassController@update')->middleware('auth');
Route::get('teaandlunchfeebabyclass/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeebabyclassController@destroy')->middleware('auth');

// Tea and lunch fee for kindergateen one
Route::get('teaandlunchfeekinderone', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekinderoneController@index')->middleware('auth');
Route::get('teaandlunchfeekinderone/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekinderoneController@create')->middleware('auth');
Route::post('teaandlunchfeekinderone/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekinderoneController@store')->middleware('auth');
Route::get('teaandlunchfeekinderone/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekinderoneController@show')->middleware('auth');
Route::get('teaandlunchfeekinderone/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekinderoneController@edit')->middleware('auth');
Route::post('teaandlunchfeekinderone/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekinderoneController@update')->middleware('auth');
Route::get('teaandlunchfeekinderone/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekinderoneController@destroy')->middleware('auth');

// Tea and lunch fee for kindergateen two
Route::get('teaandlunchfeekindertwo', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekindertwoController@index')->middleware('auth');
Route::get('teaandlunchfeekindertwo/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekindertwoController@create')->middleware('auth');
Route::post('teaandlunchfeekindertwo/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekindertwoController@store')->middleware('auth');
Route::get('teaandlunchfeekindertwo/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekindertwoController@show')->middleware('auth');
Route::get('teaandlunchfeekindertwo/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekindertwoController@edit')->middleware('auth');
Route::post('teaandlunchfeekindertwo/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekindertwoController@update')->middleware('auth');
Route::get('teaandlunchfeekindertwo/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeekindertwoController@destroy')->middleware('auth');

// Tea and lunch fee for Standard One
Route::get('teaandlunchfeestandardone', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardoneController@index')->middleware('auth');
Route::get('teaandlunchfeestandardone/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardoneController@create')->middleware('auth');
Route::post('teaandlunchfeestandardone/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardoneController@store')->middleware('auth');
Route::get('teaandlunchfeestandardone/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardoneController@show')->middleware('auth');
Route::get('teaandlunchfeestandardone/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardoneController@edit')->middleware('auth');
Route::post('teaandlunchfeestandardone/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardoneController@update')->middleware('auth');
Route::get('teaandlunchfeestandardone/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardoneController@destroy')->middleware('auth');

// Tea and lunch fee for Standard Two
Route::get('teaandlunchfeestandardtwo', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardtwoController@index')->middleware('auth');
Route::get('teaandlunchfeestandardtwo/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardtwoController@create')->middleware('auth');
Route::post('teaandlunchfeestandardtwo/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardtwoController@store')->middleware('auth');
Route::get('teaandlunchfeestandardtwo/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardtwoController@show')->middleware('auth');
Route::get('teaandlunchfeestandardtwo/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardtwoController@edit')->middleware('auth');
Route::post('teaandlunchfeestandardtwo/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardtwoController@update')->middleware('auth');
Route::get('teaandlunchfeestandardtwo/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardtwoController@destroy')->middleware('auth');

// Tea and lunch fee for Standard Three
Route::get('teaandlunchfeestandardthree', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardthreeController@index')->middleware('auth');
Route::get('teaandlunchfeestandardthree/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardthreeController@create')->middleware('auth');
Route::post('teaandlunchfeestandardthree/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardthreeController@store')->middleware('auth');
Route::get('teaandlunchfeestandardthree/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardthreeController@show')->middleware('auth');
Route::get('teaandlunchfeestandardthree/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardthreeController@edit')->middleware('auth');
Route::post('teaandlunchfeestandardthree/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardthreeController@update')->middleware('auth');
Route::get('teaandlunchfeestandardthree/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardthreeController@destroy')->middleware('auth');

// Tea and lunch fee for Standard Four
Route::get('teaandlunchfeestandardfour', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfourController@index')->middleware('auth');
Route::get('teaandlunchfeestandardfour/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfourController@create')->middleware('auth');
Route::post('teaandlunchfeestandardfour/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfourController@store')->middleware('auth');
Route::get('teaandlunchfeestandardfour/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfourController@show')->middleware('auth');
Route::get('teaandlunchfeestandardfour/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfourController@edit')->middleware('auth');
Route::post('teaandlunchfeestandardfour/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfourController@update')->middleware('auth');
Route::get('teaandlunchfeestandardfour/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfourController@destroy')->middleware('auth');

// Tea and lunch fee for Standard Five
Route::get('teaandlunchfeestandardfive', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfiveController@index')->middleware('auth');
Route::get('teaandlunchfeestandardfive/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfiveController@create')->middleware('auth');
Route::post('teaandlunchfeestandardfive/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfiveController@store')->middleware('auth');
Route::get('teaandlunchfeestandardfive/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfiveController@show')->middleware('auth');
Route::get('teaandlunchfeestandardfive/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfiveController@edit')->middleware('auth');
Route::post('teaandlunchfeestandardfive/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfiveController@update')->middleware('auth');
Route::get('teaandlunchfeestandardfive/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardfiveController@destroy')->middleware('auth');

// Tea and lunch fee for Standard Six
Route::get('teaandlunchfeestandardsix', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsixController@index')->middleware('auth');
Route::get('teaandlunchfeestandardsix/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsixController@create')->middleware('auth');
Route::post('teaandlunchfeestandardsix/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsixController@store')->middleware('auth');
Route::get('teaandlunchfeestandardsix/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsixController@show')->middleware('auth');
Route::get('teaandlunchfeestandardsix/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsixController@edit')->middleware('auth');
Route::post('teaandlunchfeestandardsix/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsixController@update')->middleware('auth');
Route::get('teaandlunchfeestandardsix/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsixController@destroy')->middleware('auth');

// Tea and lunch fee for Standard Seven
Route::get('teaandlunchfeestandardseven', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsevenController@index')->middleware('auth');
Route::get('teaandlunchfeestandardseven/create', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsevenController@create')->middleware('auth');
Route::post('teaandlunchfeestandardseven/store', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsevenController@store')->middleware('auth');
Route::get('teaandlunchfeestandardseven/show/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsevenController@show')->middleware('auth');
Route::get('teaandlunchfeestandardseven/edit/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsevenController@edit')->middleware('auth');
Route::post('teaandlunchfeestandardseven/update/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsevenController@update')->middleware('auth');
Route::get('teaandlunchfeestandardseven/delete/{fee_id}', 'Backend\fees\Teaandlunchfee\TeaandlunchfeestandardsevenController@destroy')->middleware('auth');

// Uniform fee menu
Route::get('uniformfee', 'Backend\fees\Uniformfee\UniformfeeController@index')->middleware('auth');

// Uniform fee for babyclass
Route::get('uniformfeebabyclass', 'Backend\fees\Uniformfee\UniformfeebabyclassController@index')->middleware('auth');
Route::get('uniformfeebabyclass/create', 'Backend\fees\Uniformfee\UniformfeebabyclassController@create')->middleware('auth');
Route::post('uniformfeebabyclass/store', 'Backend\fees\Uniformfee\UniformfeebabyclassController@store')->middleware('auth');
Route::get('uniformfeebabyclass/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeebabyclassController@show')->middleware('auth');
Route::get('uniformfeebabyclass/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeebabyclassController@edit')->middleware('auth');
Route::post('uniformfeebabyclass/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeebabyclassController@update')->middleware('auth');
Route::get('uniformfeebabyclass/delete/{fee_id}', 'Backend\fees\Uniformfee\UniformfeebabyclassController@destroy')->middleware('auth');

// Uniform fee for kindergateen one
Route::get('uniformfeekinderone', 'Backend\fees\Uniformfee\UniformfeekinderoneController@index')->middleware('auth');
Route::get('uniformfeekinderone/create', 'Backend\fees\Uniformfee\UniformfeekinderoneController@create')->middleware('auth');
Route::post('uniformfeekinderone/store', 'Backend\fees\Uniformfee\UniformfeekinderoneController@store')->middleware('auth');
Route::get('uniformfeekinderone/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeekinderoneController@show')->middleware('auth');
Route::get('uniformfeekinderone/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeekinderoneController@edit')->middleware('auth');
Route::post('uniformfeekinderone/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeekinderoneController@update')->middleware('auth');
Route::get('uniformfeekinderone/delete/{fee_id}', 'Backend\fees\Uniformfee\Uniformfee\UniformfeekinderoneController@destroy')->middleware('auth');

// Uniform fee for kindergateen two
Route::get('uniformfeekindertwo', 'Backend\fees\Uniformfee\UniformfeekindertwoController@index')->middleware('auth');
Route::get('uniformfeekindertwo/create', 'Backend\fees\Uniformfee\UniformfeekindertwoController@create')->middleware('auth');
Route::post('uniformfeekindertwo/store', 'Backend\fees\Uniformfee\UniformfeekindertwoController@store')->middleware('auth');
Route::get('uniformfeekindertwo/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeekindertwoController@show')->middleware('auth');
Route::get('uniformfeekindertwo/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeekindertwoController@edit')->middleware('auth');
Route::post('uniformfeekindertwo/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeekindertwoController@update')->middleware('auth');
Route::get('uniformfeekindertwo/delete/{fee_id}', 'Backend\fees\Uniformfee\UniformfeekindertwoController@destroy')->middleware('auth');

// Uniform fee for standard one
Route::get('uniformfeestandardone', 'Backend\fees\Uniformfee\UniformfeestandardoneController@index')->middleware('auth');
Route::get('uniformfeestandardone/create', 'Backend\fees\Uniformfee\UniformfeestandardoneController@create')->middleware('auth');
Route::post('uniformfeestandardone/store', 'Backend\fees\Uniformfee\UniformfeestandardoneController@store')->middleware('auth');
Route::get('uniformfeestandardone/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardoneController@show')->middleware('auth');
Route::get('uniformfeestandardone/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardoneController@edit')->middleware('auth');
Route::post('uniformfeestandardone/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardoneController@update')->middleware('auth');
Route::get('uniformfeestandardone/delete/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardoneController@destroy')->middleware('auth');

// Uniform fee for standard two
Route::get('uniformfeestandardtwo', 'Backend\fees\Uniformfee\UniformfeestandardtwoController@index')->middleware('auth');
Route::get('uniformfeestandardtwo/create', 'Backend\fees\Uniformfee\UniformfeestandardtwoController@create')->middleware('auth');
Route::post('uniformfeestandardtwo/store', 'Backend\fees\Uniformfee\UniformfeestandardtwoController@store')->middleware('auth');
Route::get('uniformfeestandardtwo/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardtwoController@show')->middleware('auth');
Route::get('uniformfeestandardtwo/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardtwoController@edit')->middleware('auth');
Route::post('uniformfeestandardtwo/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardtwoController@update')->middleware('auth');
Route::get('uniformfeestandardtwo/delete/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardtwoController@destroy')->middleware('auth');

// Uniform fee for standard three
Route::get('uniformfeestandardthree', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@index')->middleware('auth');
Route::get('uniformfeestandardthree/create', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@create')->middleware('auth');
Route::post('uniformfeestandardthree/store', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@store')->middleware('auth');
Route::get('uniformfeestandardthree/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@show')->middleware('auth');
Route::get('uniformfeestandardthree/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@edit')->middleware('auth');
Route::post('uniformfeestandardthree/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@update')->middleware('auth');
Route::get('uniformfeestandardthree/delete/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@destroy')->middleware('auth');

// Uniform fee for standard four
Route::get('uniformfeestandardfour', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@index')->middleware('auth');
Route::get('uniformfeestandardfour/create', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@create')->middleware('auth');
Route::post('uniformfeestandardfour/store', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@store')->middleware('auth');
Route::get('uniformfeestandardfour/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@show')->middleware('auth');
Route::get('uniformfeestandardfour/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@edit')->middleware('auth');
Route::post('uniformfeestandardfour/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@update')->middleware('auth');
Route::get('uniformfeestandardfour/delete/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardthreeController@destroy')->middleware('auth');

// Uniform fee for standard five
Route::get('uniformfeestandardfive', 'Backend\fees\Uniformfee\UniformfeestandardfiveController@index')->middleware('auth');
Route::get('uniformfeestandardfive/create', 'Backend\fees\Uniformfee\UniformfeestandardfiveController@create')->middleware('auth');
Route::post('uniformfeestandardfive/store', 'Backend\fees\Uniformfee\UniformfeestandardfiveController@store')->middleware('auth');
Route::get('uniformfeestandardfive/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardfiveController@show')->middleware('auth');
Route::get('uniformfeestandardfive/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardfiveController@edit')->middleware('auth');
Route::post('uniformfeestandardfive/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardfiveController@update')->middleware('auth');
Route::get('uniformfeestandardfive/delete/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardfiveController@destroy')->middleware('auth');

// Uniform fee for standard six
Route::get('uniformfeestandardsix', 'Backend\fees\Uniformfee\UniformfeestandardsixController@index')->middleware('auth');
Route::get('uniformfeestandardsix/create', 'Backend\fees\Uniformfee\UniformfeestandardsixController@create')->middleware('auth');
Route::post('uniformfeestandardsix/store', 'Backend\fees\Uniformfee\UniformfeestandardsixController@store')->middleware('auth');
Route::get('uniformfeestandardsix/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardsixController@show')->middleware('auth');
Route::get('uniformfeestandardsix/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardsixController@edit')->middleware('auth');
Route::post('uniformfeestandardsix/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardsixController@update')->middleware('auth');
Route::get('uniformfeestandardsix/delete/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardsixController@destroy')->middleware('auth');

// Uniform fee for standard seven
Route::get('uniformfeestandardseven', 'Backend\fees\Uniformfee\UniformfeestandardsevenController@index')->middleware('auth');
Route::get('uniformfeestandardseven/create', 'Backend\fees\Uniformfee\UniformfeestandardsevenController@create')->middleware('auth');
Route::post('uniformfeestandardseven/store', 'Backend\fees\Uniformfee\UniformfeestandardsevenController@store')->middleware('auth');
Route::get('uniformfeestandardseven/show/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardsevenController@show')->middleware('auth');
Route::get('uniformfeestandardseven/edit/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardsevenController@edit')->middleware('auth');
Route::post('uniformfeestandardseven/update/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardsevenController@update')->middleware('auth');
Route::get('uniformfeestandardseven/delete/{fee_id}', 'Backend\fees\Uniformfee\UniformfeestandardsevenController@destroy')->middleware('auth');

// Malamba fee menu
Route::get('malambafee', 'Backend\fees\Malambafee\MalambafeeController@index')->middleware('auth');

// Malamba fee for babyclass
Route::get('malambafeebabyclass', 'Backend\fees\Malambafee\MalambafeebabyclassController@index')->middleware('auth');
Route::get('malambafeebabyclass/create', 'Backend\fees\Malambafee\MalambafeebabyclassController@create')->middleware('auth');
Route::post('malambafeebabyclass/store', 'Backend\fees\Malambafee\MalambafeebabyclassController@store')->middleware('auth');
Route::get('malambafeebabyclass/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeebabyclassController@show')->middleware('auth');
Route::get('malambafeebabyclass/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeebabyclassController@edit')->middleware('auth');
Route::post('malambafeebabyclass/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeebabyclassController@update')->middleware('auth');
Route::get('malambafeebabyclass/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeebabyclassController@destroy')->middleware('auth');

// Malamba fee for kindergateen one
Route::get('malambafeekinderone', 'Backend\fees\Malambafee\MalambafeekinderoneController@index')->middleware('auth');
Route::get('malambafeekinderone/create', 'Backend\fees\Malambafee\MalambafeekinderoneController@create')->middleware('auth');
Route::post('malambafeekinderone/store', 'Backend\fees\Malambafee\MalambafeekinderoneController@store')->middleware('auth');
Route::get('malambafeekinderone/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeekinderoneController@show')->middleware('auth');
Route::get('malambafeekinderone/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeekinderoneController@edit')->middleware('auth');
Route::post('malambafeekinderone/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeekinderoneController@update')->middleware('auth');
Route::get('malambafeekinderone/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeekinderoneController@destroy')->middleware('auth');

// Malamba fee for kindergateen two
Route::get('malambafeekindertwo', 'Backend\fees\Malambafee\MalambafeekindertwoController@index')->middleware('auth');
Route::get('malambafeekindertwo/create', 'Backend\fees\Malambafee\MalambafeekindertwoController@create')->middleware('auth');
Route::post('malambafeekindertwo/store', 'Backend\fees\Malambafee\MalambafeekindertwoController@store')->middleware('auth');
Route::get('malambafeekindertwo/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeekindertwoController@show')->middleware('auth');
Route::get('malambafeekindertwo/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeekindertwoController@edit')->middleware('auth');
Route::post('malambafeekindertwo/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeekindertwoController@update')->middleware('auth');
Route::get('malambafeekindertwo/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeekindertwoController@destroy')->middleware('auth');

// Malamba fee for standard one
Route::get('malambafeestandardone', 'Backend\fees\Malambafee\MalambafeestandardoneController@index')->middleware('auth');
Route::get('malambafeestandardone/create', 'Backend\fees\Malambafee\MalambafeestandardoneController@create')->middleware('auth');
Route::post('malambafeestandardone/store', 'Backend\fees\Malambafee\MalambafeestandardoneController@store')->middleware('auth');
Route::get('malambafeestandardone/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardoneController@show')->middleware('auth');
Route::get('malambafeestandardone/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardoneController@edit')->middleware('auth');
Route::post('malambafeestandardone/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardoneController@update')->middleware('auth');
Route::get('malambafeestandardone/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardoneController@destroy')->middleware('auth');

// Malamba fee for standard two
Route::get('malambafeestandardtwo', 'Backend\fees\Malambafee\MalambafeestandardtwoController@index')->middleware('auth');
Route::get('malambafeestandardtwo/create', 'Backend\fees\Malambafee\MalambafeestandardtwoController@create')->middleware('auth');
Route::post('malambafeestandardtwo/store', 'Backend\fees\Malambafee\MalambafeestandardtwoController@store')->middleware('auth');
Route::get('malambafeestandardtwo/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardtwoController@show')->middleware('auth');
Route::get('malambafeestandardtwo/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardtwoController@edit')->middleware('auth');
Route::post('malambafeestandardtwo/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardtwoController@update')->middleware('auth');
Route::get('malambafeestandardtwo/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardtwoController@destroy')->middleware('auth');

// Malamba fee for standard three
Route::get('malambafeestandardthree', 'Backend\fees\Malambafee\MalambafeestandardthreeController@index')->middleware('auth');
Route::get('malambafeestandardthree/create', 'Backend\fees\Malambafee\MalambafeestandardthreeController@create')->middleware('auth');
Route::post('malambafeestandardthree/store', 'Backend\fees\Malambafee\MalambafeestandardthreeController@store')->middleware('auth');
Route::get('malambafeestandardthree/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardthreeController@show')->middleware('auth');
Route::get('malambafeestandardthree/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardthreeController@edit')->middleware('auth');
Route::post('malambafeestandardthree/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardthreeController@update')->middleware('auth');
Route::get('malambafeestandardthree/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardthreeController@destroy')->middleware('auth');

// Malamba fee for standard four
Route::get('malambafeestandardfour', 'Backend\fees\Malambafee\MalambafeestandardfourController@index')->middleware('auth');
Route::get('malambafeestandardfour/create', 'Backend\fees\Malambafee\MalambafeestandardfourController@create')->middleware('auth');
Route::post('malambafeestandardfour/store', 'Backend\fees\Malambafee\MalambafeestandardfourController@store')->middleware('auth');
Route::get('malambafeestandardfour/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardfourController@show')->middleware('auth');
Route::get('malambafeestandardfour/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardfourController@edit')->middleware('auth');
Route::post('malambafeestandardfour/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardfourController@update')->middleware('auth');
Route::get('malambafeestandardfour/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardfourController@destroy')->middleware('auth');

// Malamba fee for standard five
Route::get('malambafeestandardfive', 'Backend\fees\Malambafee\MalambafeestandardfiveController@index')->middleware('auth');
Route::get('malambafeestandardfive/create', 'Backend\fees\Malambafee\MalambafeestandardfiveController@create')->middleware('auth');
Route::post('malambafeestandardfive/store', 'Backend\fees\Malambafee\MalambafeestandardfiveController@store')->middleware('auth');
Route::get('malambafeestandardfive/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardfiveController@show')->middleware('auth');
Route::get('malambafeestandardfive/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardfiveController@edit')->middleware('auth');
Route::post('malambafeestandardfive/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardfiveController@update')->middleware('auth');
Route::get('malambafeestandardfive/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardfiveController@destroy')->middleware('auth');

// Malamba fee for standard six
Route::get('malambafeestandardsix', 'Backend\fees\Malambafee\MalambafeestandardsixController@index')->middleware('auth');
Route::get('malambafeestandardsix/create', 'Backend\fees\Malambafee\MalambafeestandardsixController@create')->middleware('auth');
Route::post('malambafeestandardsix/store', 'Backend\fees\Malambafee\MalambafeestandardsixController@store')->middleware('auth');
Route::get('malambafeestandardsix/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardsixController@show')->middleware('auth');
Route::get('malambafeestandardsix/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardsixController@edit')->middleware('auth');
Route::post('malambafeestandardsix/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardsixController@update')->middleware('auth');
Route::get('malambafeestandardsix/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardsixController@destroy')->middleware('auth');

// Malamba fee for standard seven
Route::get('malambafeestandardseven', 'Backend\fees\Malambafee\MalambafeestandardsevenController@index')->middleware('auth');
Route::get('malambafeestandardseven/create', 'Backend\fees\Malambafee\MalambafeestandardsevenController@create')->middleware('auth');
Route::post('malambafeestandardseven/store', 'Backend\fees\Malambafee\MalambafeestandardsevenController@store')->middleware('auth');
Route::get('malambafeestandardseven/show/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardsevenController@show')->middleware('auth');
Route::get('malambafeestandardseven/edit/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardsevenController@edit')->middleware('auth');
Route::post('malambafeestandardseven/update/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardsevenController@update')->middleware('auth');
Route::get('malambafeestandardseven/delete/{fee_id}', 'Backend\fees\Malambafee\MalambafeestandardsevenController@destroy')->middleware('auth');

// Settings
Route::get('setting', 'Backend\Settings\SettingController@index')->middleware('auth');
Route::get('setting/create', 'Backend\Settings\SettingController@create')->middleware('auth');
Route::post('setting/store', 'Backend\Settings\SettingController@store')->middleware('auth');
Route::get('setting/edit/{setting_id}', 'Backend\Settings\SettingController@edit')->middleware('auth');
Route::post('setting/update/{setting_id}', 'Backend\Settings\SettingController@update')->middleware('auth');