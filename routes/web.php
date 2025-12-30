<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Like\LikeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/customer-profile', [CustomerController::class, 'index']);

Route::get('/profile',[ProfileController::class,'index']);

Route::get('/customer-post',[CustomerController::class, 'postList']);

Route::get('/post-customer',[PostController::class,'postedUser']);

Route::get('/user/likes', [LikeController::class, 'showLikedPosts']);

Route::get('/post/likers', [LikeController::class, 'showPostLikers']);

Route::get('/customer/{id}/latest-comment', [CustomerController::class, 'showLatestComment']);