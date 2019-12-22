<?php


Route::get('/ index' ,function () {
    return view('index');
});
Route::get('/ signin' ,function () {
    return view('signin');
});
Route::get('/ signup' ,function () {
    return view('signup');
});

Route::get('/ contact' ,function () {
    return view('contact');
});

Route::get('/ page' ,function () {
    return view('page');
});

Route::get('/ view' ,function () {
    return view('view');
});

Route::get('/ account' ,function () {
    return view('account');
});

Route::get('/ pass' ,function () {
    return view('pass');
});

Route::get('/ login' ,function () {
    return view('login');
});



