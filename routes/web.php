<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// User Permissions Route

Route::post('/role-store', 'RolePermssionController@RoleStore')->name('RoleStore');
Route::post('/role-update', 'RolePermssionController@RoleUpdate')->name('RoleUpdate');
Route::get('/role-list', 'RolePermssionController@RoleList')->name('RoleList');
Route::post('/permission-store', 'RolePermssionController@PermissionStore')->name('PermissionStore');
Route::post('/update-permission', 'RolePermssionController@UpdatePermission')->name('UpdatePermission');
Route::post('/role-add-to-permission', 'RolePermssionController@RoleAddToPermission')->name('RoleAddToPermission');
Route::post('/role-add-to-user', 'RolePermssionController@RoleAddToUser')->name('RoleAddToUser');
Route::post('/update-role-add-to-user', 'RolePermssionController@UpdateRoleAddToUser')->name('UpdateRoleAddToUser');
Route::post('/user-delete/{id}', 'RolePermssionController@UserDelete')->name('UserDelete');
Route::get('/user-restore/{id}', 'RolePermssionController@UserRestore')->name('UserRestore');
Route::get('/user-permanent-delete/{id}', 'RolePermssionController@UserPermanentDelete')->name('UserPermanentDelete');
