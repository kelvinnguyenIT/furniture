<?php

use App\Mail\CheckoutMail;
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

// Route::get('/', 'Home\HomeController@index');
Route::get('/','Home\HomeController@index')->name('home');

Route::get('/login','Home\HomeController@viewLogin')->name('login');

Route::post('/processLogin','Auth\LoginController@processLogin');

Route::get('/register','Home\HomeController@viewRegister')->name('register');

Route::get('/blog','Home\HomeController@viewBlogPage')->name('blogPage');

Route::get('/blog/{post:slug}','Home\HomeController@viewBlogDetail')->name('newsdetail');

Route::get('/blog/tag/{tag:slug}','Home\HomeController@viewBlogPageTag')->name('blogPageTag');

Route::get('/product/group','Home\HomeController@viewProductPage')->name('productAllPage');

Route::get('/product/group/{group:slug}','Home\HomeController@viewProductPage')->name('productPage');

Route::get('/product/detail/{product:slug}','Home\HomeController@viewProductDetail')->name('productdetail');

Route::get('/product/category/{category:slug}','Home\HomeController@viewProductCategory')->name('productCategory');

Route::get('/product/brand/{brand:slug}','Home\HomeController@viewProductBrand')->name('productBrand');

Route::get('/about-us','Home\HomeController@viewAboutUs')->name('aboutus');

Route::get('/contact','Home\HomeController@viewContact')->name('contact');

Route::post('/processContact','Home\HomeController@processContact')->name('processContact');

Route::post('/addtocart','Home\HomeController@addCart')->name('addCart');

Route::get('/cart','Home\HomeController@viewCart')->name('cart');

Route::get('/checkout',function(){
    return view('home.collections.checkout');
})->name('checkout');

Route::post('/payment','Home\HomeController@viewPayment')->name('payment');

Route::post('/removecartitem','Home\HomeController@removeCartItem')->name('removeCartItem');

Route::post('/addCheckout','Home\HomeController@addCheckout')->name('addCheckout');

Route::get('/product/search','Home\HomeController@searchProduct')->name('searchproduct');

Route::group(['middleware' => ['usercheck']], function () {

    Route::resource('/product', 'Admin\ProductController');

    Route::resource('/image-product', 'Admin\ImageProductController');

    Route::resource('/category', 'Admin\CategoryController');

    Route::resource('/brand', 'Admin\BrandController');

    Route::resource('/group', 'Admin\GroupController');

    Route::resource('/product-group', 'Admin\ProductGroupController');

    Route::resource('/post', 'Admin\PostController');

    Route::resource('/tag', 'Admin\TagController');

    Route::resource('/post-tag', 'Admin\PostTagController');

    Route::resource('/order', 'Admin\OrderController');

    Route::resource('/feedback', 'Admin\ContactController');

    Route::get('/admin/dropzone', function () {
        return view('admin.sample.dropzone');
    });

    Route::post('/logout','Auth\LoginController@logout')->name('logout');

});

