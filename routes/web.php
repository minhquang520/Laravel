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

Route::get('MinhQuang', function() {
    return "Hello May Cung";
});

Route::get('MinhQuang/ABC', function() {
    echo "Hello May Cung Nhe";
});

// Truyền Tham Số
Route::get('HoTen/{ten}', function($ten) {
    echo "Ten cua ban la: " .$ten; 
});

Route::get('HoTen/', function() {
    echo "Chua nhap ten"; 
});

Route::get('Laravel/{ngay}', function($ngay) {
    echo"Minh Quang: " .$ngay;
})->where (['ngay'=>'[a-zA-Z ]+']);

// Định Danh Route

Route::get('Route1',['as'=>'MyRoute', function() {
    echo "Xin chao cac ban";
}]);

Route::get('Route2', function() {
    echo "Day la route 2";
});

Route::get('GoiTen', function() {
    return redirect()->route('MyRoute');
});

//Goi dinh danh co truyen tham so
Route::get('PhuongThucCoThamSo/{name}', ['as' => 'RouteNamed', function($name) {
    echo "Name is: " . $name;
}]);

Route::get('GoiPhuongThucTinh', function() {
    return redirect()->route('RouteNamed', ['name' => 'Tinh']);
});

Route::get('GoiPhuongThucDong/{name}', function($name) {
    return redirect()->route('RouteNamed', ['name' => $name]);
});

//Tao group route

Route::group(['prefix' => 'MyGroup'], function() {  
    Route::get('User1', function() {
        return 'User1';
    });

    Route::get('User2', function() {
        return 'User2';
    });

    Route::get('User3', function() {
        return 'User3';
    });
    
});

//Goi controller
Route::get('GoiController', 'MyController@XinChao');

//Truyen du lieu controller
Route::get('ThamSo/{ten}','MyController@KhoaHoc');

//Làm việc với URL trên Request
Route::get('MyRequest','MyController@GetURL');

//Gửi nhận tham số trên request
Route::get('getForm', function() {
    return view("postForm");
});

Route::post('postForm',['as'=>'postForm1', 'uses'=>'MyController@postForm']);

