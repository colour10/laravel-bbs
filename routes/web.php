<?php

Route::get('/', 'PagesController@root')->name('root');

// 启用验证
Auth::routes(['verify' => true]);
