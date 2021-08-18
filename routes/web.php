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

// Category Route
Route::get('/category', 'CategoryController@Category')->name('Category');
Route::post('/category-store', 'CategoryController@CategoryStore')->name('CategoryStore');
Route::post('/category-update', 'CategoryController@CategoryUpdate')->name('CategoryUpdate');
Route::get('/category-delete/{id}', 'CategoryController@CategoryDelete')->name('CategoryDelete');
Route::get('/category-restore/{id}', 'CategoryController@CategoryRestore')->name('CategoryRestore');
Route::get('/category-permanent/delete/{id}', 'CategoryController@CategoryPermanentDelete')->name('CategoryPermanentDelete');
Route::post('/subcategory-store', 'CategoryController@SubCategoryStore')->name('SubCategoryStore');
Route::post('/subcategory-update', 'CategoryController@SubCategoryUpdate')->name('SubCategoryUpdate');
Route::get('/subcategory-delete/{id}', 'CategoryController@SubCategoryDelete')->name('SubCategoryDelete');
Route::get('/subcategory-restore/{id}', 'CategoryController@SubCategoryRestore')->name('SubCategoryRestore');
Route::get('/subcategory-permanent-delete/{id}', 'CategoryController@SubCategoryPermanentDelete')->name('SubCategoryPermanentDelete');

// Color Route
Route::get('/colors', 'ColorController@Colors')->name('Colors');
Route::post('/color-store', 'ColorController@ColorStore')->name('ColorStore');
Route::post('/color-update', 'ColorController@ColorUpdate')->name('ColorUpdate');
Route::get('/color-delete/{id}', 'ColorController@ColorDelete')->name('ColorDelete');
Route::get('/color-restore/{id}', 'ColorController@ColorRestore')->name('ColorRestore');
Route::get('/color-permanent-delete/{id}', 'ColorController@ColorParmanentDelete')->name('ColorParmanentDelete');

// Color Route
Route::get('/sizes', 'SizeController@Sizes')->name('Sizes');
Route::post('/size-store', 'SizeController@SizeStore')->name('SizeStore');
Route::post('/size-update', 'SizeController@SizeUpdate')->name('SizeUpdate');
Route::get('/size-delete/{id}', 'SizeController@SizeDelete')->name('SizeDelete');
Route::get('/size-restore/{id}', 'SizeController@SizeRestore')->name('SizeRestore');
Route::get('/size-parmanent-delete/{id}', 'SizeController@SizePermanentDelete')->name('SizePermanentDelete');

// Brand Route
Route::get('/brands', 'BrandController@Brands')->name('Brands');
Route::post('/brand-store', 'BrandController@BrandStore')->name('BrandStore');
Route::post('/brand-update', 'BrandController@BrandUpdate')->name('BrandUpdate');
Route::get('/brand-delete/{id}', 'BrandController@BrandDelete')->name('BrandDelete');
Route::get('/brand-restore/{id}', 'BrandController@BrandRestore')->name('BrandRestore');
Route::get('/brand-parmanent-delete/{id}', 'BrandController@BrandPermanentDelete')->name('BrandPermanentDelete');

// Brand Route
Route::get('/products-lists', 'ProductController@ProducstLists')->name('ProducstLists');
Route::get('/add-products', 'ProductController@AddProducts')->name('AddProducts');
