<?php

Route::impersonate();

Route::get('/', '\Wave\Http\Controllers\ProductController@index')->name('wave.home');
Route::get('/category/{slug}', '\Wave\Http\Controllers\CategoryController@index')->name('wave.category');
Route::get('/detail/{slug}', '\Wave\Http\Controllers\CategoryController@detailProduct')->name('wave.detail.product');
Route::get('/products/all', '\Wave\Http\Controllers\ProductController@allProduct')->name('wave.all.product');
Route::get('/news-detail/{slug}', '\Wave\Http\Controllers\ProductController@newsDetail')->name('wave.news.detail');
Route::get('/search/', '\Wave\Http\Controllers\ProductController@search')->name('wave.search.product');
Route::get('/news', '\Wave\Http\Controllers\ProductController@news')->name('wave.news.product');
Route::get('/contact', '\Wave\Http\Controllers\ProductController@contact')->name('wave.contact');
Route::post('/contact', '\Wave\Http\Controllers\ProductController@createContact')->name('wave.create.contact');
Route::get('/order/product', '\Wave\Http\Controllers\ProductController@orderProduct')->name('wave.order.product');
Route::get('/order/', '\Wave\Http\Controllers\ProductController@viewOrder')->name('wave.order');
Route::post('/add/cart', '\Wave\Http\Controllers\ProductController@addCart')->name('wave.add.cart');
Route::get('@{username}', '\Wave\Http\Controllers\ProfileController@index')->name('wave.profile');

// Documentation routes
Route::view('docs/{page?}', 'docs::index')->where('page', '(.*)');

// Additional Auth Routes
Route::get('logout', 'Auth\LoginController@logout')->name('wave.logout');
Route::get('user/verify/{verification_code}', 'Auth\RegisterController@verify')->name('verify');
Route::post('register/complete', '\Wave\Http\Controllers\Auth\RegisterController@complete')->name('wave.register-complete');

Route::get('blog', '\Wave\Http\Controllers\BlogController@index')->name('wave.blog');
Route::get('blog/{category}', '\Wave\Http\Controllers\BlogController@category')->name('wave.blog.category');
Route::get('blog/{category}/{post}', '\Wave\Http\Controllers\BlogController@post')->name('wave.blog.post');

Route::view('install', 'wave::install')->name('wave.install');

/***** Pages *****/
Route::get('p/{page}', '\Wave\Http\Controllers\PageController@page');

/***** Pricing Page *****/
Route::view('pricing', 'theme::pricing')->name('wave.pricing');

/***** Billing Routes *****/
Route::post('/billing/webhook', '\Wave\Http\Controllers\WebhookController@handleWebhook');
Route::post('paddle/webhook', '\Wave\Http\Controllers\SubscriptionController@hook');
Route::post('checkout', '\Wave\Http\Controllers\SubscriptionController@checkout')->name('checkout');

Route::get('test', '\Wave\Http\Controllers\SubscriptionController@test');

Route::group(['middleware' => 'wave'], function () {
	Route::get('dashboard', '\Wave\Http\Controllers\DashboardController@index')->name('wave.dashboard');
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('settings/{section?}', '\Wave\Http\Controllers\SettingsController@index')->name('wave.settings');

	Route::post('settings/profile', '\Wave\Http\Controllers\SettingsController@profilePut')->name('wave.settings.profile.put');
	Route::put('settings/security', '\Wave\Http\Controllers\SettingsController@securityPut')->name('wave.settings.security.put');

	Route::post('settings/api', '\Wave\Http\Controllers\SettingsController@apiPost')->name('wave.settings.api.post');
	Route::put('settings/api/{id?}', '\Wave\Http\Controllers\SettingsController@apiPut')->name('wave.settings.api.put');
	Route::delete('settings/api/{id?}', '\Wave\Http\Controllers\SettingsController@apiDelete')->name('wave.settings.api.delete');

	Route::get('settings/invoices/{invoice}', '\Wave\Http\Controllers\SettingsController@invoice')->name('wave.invoice');

	Route::get('notifications', '\Wave\Http\Controllers\NotificationController@index')->name('wave.notifications');
	Route::get('announcements', '\Wave\Http\Controllers\AnnouncementController@index')->name('wave.announcements');
	Route::get('announcement/{id}', '\Wave\Http\Controllers\AnnouncementController@announcement')->name('wave.announcement');
	Route::post('announcements/read', '\Wave\Http\Controllers\AnnouncementController@read')->name('wave.announcements.read');
	Route::get('notifications', '\Wave\Http\Controllers\NotificationController@index')->name('wave.notifications');
	Route::post('notification/read/{id}', '\Wave\Http\Controllers\NotificationController@delete')->name('wave.notification.read');

    /********** Checkout/Billing Routes ***********/
    Route::post('cancel', '\Wave\Http\Controllers\SubscriptionController@cancel')->name('wave.cancel');
    Route::view('checkout/welcome', 'theme::welcome');

    Route::post('subscribe', '\Wave\Http\Controllers\SubscriptionController@subscribe')->name('wave.subscribe');
	Route::view('trial_over', 'theme::trial_over')->name('wave.trial_over');
	Route::view('cancelled', 'theme::cancelled')->name('wave.cancelled');
    Route::post('switch-plans', '\Wave\Http\Controllers\SubscriptionController@switchPlans')->name('wave.switch-plans');
});

Route::group(['middleware' => 'admin.user'], function(){
    Route::view('admin/do', 'wave::do');
});

