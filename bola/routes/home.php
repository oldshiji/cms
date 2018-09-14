<?php
Route::group(['prefix' => ''], function () {


     Route::get('/', 'Home\IndexController@index');
     Route::get('/index.html', 'Home\IndexController@index');

     //医院模块
     Route::get('/hospitals.html', 'Home\HospitalController@hospitals');
     Route::get('/hospital/detail/{id}.html', 'Home\HospitalController@hospitalsDetails');


     Route::get('/doctorlist.html', 'Home\IndexController@doctors');
     Route::get('/doctordetail.html', 'Home\IndexController@doctorsDetails');
     Route::get('/referralapplication.html', 'Home\IndexController@referralapplication');
     Route::get('/submitsuccess.html', 'Home\IndexController@submitsuccess');
     Route::get('/teachtrain.html', 'Home\IndexController@teachtrain');
     Route::get('/teachtraindetail.html', 'Home\IndexController@teachtraindetail');
     Route::get('/information.html', 'Home\IndexController@information');
     Route::get('/informationdetail.html', 'Home\IndexController@informationdetail');
     Route::get('/personalcenter.html', 'Home\IndexController@personalcenter');
     Route::get('/alterpsw.html', 'Home\IndexController@alterpsw');
     Route::get('/referralrecord.html', 'Home\IndexController@referralrecord');
     Route::get('/bed.html', 'Home\IndexController@bed');
     Route::get('/jinxiuapplication.html', 'Home\IndexController@jinxiuapplication');
     Route::get('/joinpccm.html', 'Home\IndexController@joinpccm');
     Route::get('/joinpccmorocess.html', 'Home\IndexController@joinpccmorocess');
     Route::get('/joinprocess.html', 'Home\IndexController@joinprocess');
     Route::get('/joinylt.html', 'Home\IndexController@joinylt');
     Route::get('/referralapplicationprocess.html', 'Home\IndexController@referralapplicationprocess');
     Route::get('/aboutus.html', 'Home\IndexController@aboutus');
     Route::get('/register.html', 'Home\IndexController@register');
     Route::get('/login.html', 'Home\IndexController@login');



    Route::get('/region/city', 'Home\IndexController@getCityData');


//     //获取验证码
//     Route::post('verifycode', 'Home\VerifycodeController@code');
//
//    //关于
//     Route::get('info.html', 'Home\AbountController@index');
//
//     //Route::get('abount/honor', 'Home\HospitalController@index');
//     Route::get('honor.html', 'Home\AbountController@honor');
//     //医院联盟
//     Route::get('hospitals.html', 'Home\HospitalController@index');
//     Route::get('hospitals-details-{hospitalid}.html', 'Home\HospitalController@hospitalDetails');
//     //获取指定地区的医院列表
//     Route::get('gethospitals', 'Home\HospitalController@hospitals');
//
//     //医生联盟
//     Route::get('physicians.html', 'Home\DoctorsController@index');
//     Route::get('physicians-details-{doctorid}.html', 'Home\DoctorsController@doctorsDetails');
//
//     //加入医联体
//     Route::get('joinhospital.html', 'Home\JoinhospitalController@index');
//     Route::post('joinhospital.html', 'Home\JoinhospitalController@joinrecord');
//
//     //咨询
//     Route::get('news.html', 'Home\ArticleController@index');
//     Route::get('news-details-{articleid}.html', 'Home\ArticleController@Details');
//     Route::get('train.html', 'Home\TrainController@index');
//     Route::get('train-details-{articleid}.html', 'Home\TrainController@Details');
//     //Route::get('physicians-details-{doctorid}.html', 'Home\DoctorsController@doctorsDetails');
//
//     //注册
//     //Route::get('register.html', 'Home\UserController@register');
//     //Route::get('login.html', 'Home\UserController@login')->name("login.html");
//     Route::post('register.html', 'Home\UserController@doRegister');
//     Route::get('login.html', 'Home\UserController@doLogin');
//
//     //个人中心
//     Route::group(['middleware'=>'auth.index'],function(){
//            Route::get("user-profile.html","Home\MemberController@userProfile");
//            //注册医生信息完善
//            Route::get("profile","Home\MemberController@profile");
//            //转诊申请
//            Route::get("referral.html","Home\MemberController@referral");
//            Route::any("referral.html","Home\MemberController@referralApplication");
//            Route::get("referral-record.html","Home\MemberController@referrRecord");
//            //医院床位更新
//            Route::get("hospital-bed-update.html","Home\MemberController@updateHospitalBedinfo");
//     });
//

});
   

