<?php

Route::get('/', function () {
    return redirect()->route('login.index');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/adminhome', 'AdminHomeController@index')->name('adminhome.index');

Route::get('/adminhome/studentsinfo', 'AdminHomeController@studentsinfo')->name('adminhome.studentsinfo');
Route::post('/adminhome/studentsinfo', 'AdminHomeController@updatestdstatus');

Route::get('/adminhome/teachersinfo', 'AdminHomeController@teachersinfo')->name('adminhome.teachersinfo');
Route::post('/adminhome/teachersinfo', 'AdminHomeController@updateteacherstatus');

Route::get('/adminhome/search', 'AdminHomeController@search')->name('adminhome.search');
Route::post('/adminhome/search', 'AdminHomeController@postsearch');

Route::get('/adminhome/subject', 'AdminHomeController@subject')->name('adminhome.subject');
Route::post('/adminhome/subject', 'AdminHomeController@insertsubject');

Route::get('/adminhome/assignteacher', 'AdminHomeController@assignteacher')->name('adminhome.assignteacher');
Route::post('/adminhome/assignteacher', 'AdminHomeController@insertteachertosubject');
Route::post('/adminhome/allsubjects', 'AdminHomeController@allsubjects');
Route::post('/adminhome/allteachers', 'AdminHomeController@allteachers');

Route::get('/adminhome/sendnotice', 'AdminHomeController@sendnotice')->name('adminhome.sendnotice');
Route::post('/adminhome/sendnotice', 'AdminHomeController@inserttnotice');

Route::get('/adminhome/studentreport', 'AdminHomeController@studentreport')->name('adminhome.studentreport');
Route::post('/adminhome/studentreport', 'AdminHomeController@poststudentreport');
