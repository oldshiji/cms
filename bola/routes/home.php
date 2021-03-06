<?php
Route::group(['prefix' => ''], function () {
     Route::get('/', 'Home\IndexController@index');

    Route::get('/index.html', 'Home\IndexController@index');

    //关于
    Route::get('info.html', 'Home\AbountController@index');

     //Route::get('abount/index.html', 'Home\AbountController@index');
    //发展历程milestones.html
     //Route::get('abount/milestones', 'Home\AbountController@milestones');
     Route::get('milestones.html', 'Home\AbountController@milestones');
     //荣誉

     //Route::get('abount/honor', 'Home\AbountController@honor');
     Route::get('honor.html', 'Home\AbountController@honor');
     //团队
     //Route::get('abount/team', 'Home\AbountController@team');
     Route::get('team.html', 'Home\AbountController@team');

     //服务
     //Route::get('service/index', 'Home\ServiceController@index');
     Route::get('platform.html', 'Home\ServiceController@index');
     Route::get('customer.html', 'Home\ServiceController@customer');
     Route::get('case.html', 'Home\ServiceController@case');
     //动态news.html
    //Route::get("news/index",'Home\NewsController@index');
    Route::get("news.html",'Home\NewsController@index');
    Route::get("news/newsajax",'Home\NewsController@newsajax');

    //加入博拉join.html
    //Route::get("position/index",'Home\PositionController@index');
    Route::get("join.html",'Home\PositionController@index');

    //联系我们
    //Route::get("contact/index",'Home\ContactController@index');
    Route::get("contact.html",'Home\ContactController@index');

    //详情
    //Route::get("article/details",'Home\NewsController@details');
    Route::get("news/{news}.html",'Home\NewsController@details');
    //Route::get("article/details",'Home\NewsController@details');

});
   

