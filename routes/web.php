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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('student/home', 'HomeController@studentHome')->name('student.home')->middleware('is_student');
Route::get('faculty/home', 'HomeController@facultyHome')->name('faculty.home')->middleware('is_faculty');

Route::get('auther/home','HomeController@AutherHome')->name('auther.home');
//=========================Admin Dashboard=================================//


Route::get('admin/register','HomeController@example')->name('admin.register')->middleware('admin');

Route::get('Student/Detail','Admin\AddmissionController@StudentDetail')->name('Student.Detail')->middleware('admin');
Route::get('Student/Admission/','Admin\AddmissionController@Student_Adminssion')->name('Student.Admission')->middleware('admin');


Route::get('All_student/list','Admin\AddmissionController@All_Student_list')->name('All_student.list')->middleware('admin');
Route::get('Student/Attendence','Admin\AdminController@Studen_attendence')->name('Student.Attendence')->middleware('admin');
Route::get('Student/message','Admin\AdminController@Student_Message')->name('Student.Message')->middleware('admin');

Route::get('Student/Promotion/','Admin\AdminController@Student_Promotion')->name('Student.Promotion')->middleware('admin');
Route::get('Student/Contact/','Admin\AdminController@Student_Contact')->name('Student.Contact')->middleware('admin');
Route::get('All_Post/Admin/','Admin\AdminController@all_Post_Admin')->name('all_post.admin')->middleware('admin');

//==============================student fees section ===============//
Route::get('admin/make_fee/structure/','Admin\AdminController@make_fees_structure')->name('fee.structure')->middleware('admin');
Route::post('admin/add_fee/structure/','Admin\StudentFeeController@Add_fee_structure')->name('make.fee.structure')->middleware('admin');

//==============================Sujects section====================//

Route::get('add/admin/subject/','Admin\SubjectController@open_suject_form')->name('subject.form')->middleware('admin');
Route::post('add/new/subject/','Admin\SubjectController@add_subject')->name('add.subject')->middleware('admin');
//=============================add Classess==================//
Route::get('/add/classes/','Admin\ClassController@OpenAdd_new_class_from')->name('class.form')->middleware('admin');

//==============================All users =================================//

Route::get('all/users','Admin\UsersController@show_users')->name('all.users')->middleware('admin');
//=================================Hostel =====================================
Route::get('admin_by/hostel','HostelController@hostel');
