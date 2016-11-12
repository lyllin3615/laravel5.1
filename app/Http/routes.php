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

// 基本路由
Route::get('/', function () {
    return view('welcome');
});

Route::get('basic1', function(){
    return 'Hi,lin3615';
});

Route::post('basic2',function(){
    return 'basic2';
});

// 多请求路由
// Route::match(['get','post'],'multy1', function(){
//     return 'multy1';
// });

// Route::any('multy2', function(){
//     return "multy2";
// });

// 路由参数
// Route::get('user/{id}',function($id){
//     return 'user-id-' . $id;
// });

// Route::get('user/{name?}', function($name=null){
//    return 'User-name-' . $name; 
// });

// Route::get('user/{name?}',function($name='hi'){
//     return 'user-name-hi-' . $name;
// })->where('name','[A-Za-z]+');

// Route::get('user/{id}/{name?}', function($id, $name=null){
//     return 'user-id-' . $id . '-name-' . $name;
// })->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

// 路由别名
// Route::get('user/center',['as'=>'center', function(){
//     return 'user/center';
// }]);
// Route::get('user/center',['as'=>'center',function(){
//     return route('center');
// }]);

//路由群组
// Route::group(['prefix'=>'member'], function(){
//     Route::get("user/center",['as'=>'center',function(){
//         return route('center');
//     }]);
//     Route::any('multy2',function(){
//         return 'member-multy2';
//     });
// });

// 路由中输出视图
Route::get('view',function(){
    return view('welcome');
});
Route::any('student/test1',['uses'=>'StudentController@test1']);
Route::any('student/query1',['uses'=>'StudentController@query1']);
Route::any('student/query2',['uses'=>'StudentController@query2']);

Route::any('student/query3',['uses'=>'StudentController@query3']);
Route::any('student/query4',['uses'=>'StudentController@query4']);
Route::any('student/query5',['uses'=>'StudentController@query5']);
Route::any('student/orm1',['uses'=>'StudentController@orm1']);

Route::any('student/orm2',['uses'=>'StudentController@orm2']);
Route::any('student/orm3',['uses'=>'StudentController@orm3']);
Route::any('student/orm4',['uses'=>'StudentController@orm4']);

Route::any('student/myDisplay', ['uses'=>'StudentController@myDisplay']);
Route::any('student/testModel', ['uses'=>'StudentController@testModel']);

Route::any('student/request1',['uses'=>'StudentController@request1']);
Route::any('student/session1',['uses'=>'StudentController@session1']);
Route::any('student/session2',['uses'=>'StudentController@session2']);
Route::any('student/response1',['uses'=>'StudentController@response1']);




Route::any('member/{id}',['uses'=>'MemberController@info'])->where('id','[0-9]+');
// Route::get('member/info','memberController@info');
Route::get('member/info',['uses'=>'memberController@info']);

// Route::get('member/info',['uses'=>'memberController@info','as'=>'memberinfo']);
// Route::any('member/info',['uses'=>'memberController@info']);
