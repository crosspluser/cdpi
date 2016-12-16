<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$app->get('/', function () use ($app) {
    return $app->version();
});

//*令牌
$app->get('tokens', function () {
    return "tokens get";
});

$app->put('tokens', function () {
    return "tokens put";
});

//服务

$app->get('services', function () {
    return "services get";
});

$app->post('services', function () {
    return "services post";
});

$app->get('services/{service_id}', function ($service_id) {
    return "services get " . $service_id;
});

$app->put('services/{service_id}', function ($service_id) {
    return "services put " . $service_id;
});

$app->delete('services/{service_id}', function ($service_id) {
    return "services delete " . $service_id;
});

//服务价目
$app->get('services/{service_id}/offers', function ($service_id) {
    return "services offers get " . $service_id;
});

$app->post('services/{service_id}/offers', function ($service_id) {
    return "services offers post " . $service_id;
});

$app->put('services/{service_id}/offers/{offer_id}', function ($service_id, $offer_id) {
    return "services offers put " . $service_id . " " . $offer_id;
});

$app->delete('services/{service_id}/offers/{offer_id}', function ($service_id, $offer_id) {
    return "services offers delete " . $service_id . " " . $offer_id;
});

//服务简介
$app->post('services/{service_id}/briefs', function ($service_id) {
    return "services briefs post " . $service_id;
});

$app->put('services/{service_id}/briefs/{brief_id}', function ($service_id, $brief_id) {
    return "services briefs put " . $service_id . " " . $brief_id;
});

$app->delete('services/{service_id}/briefs/{brief_id}', function ($service_id, $brief_id) {
    return "services briefs delete " . $service_id . " " . $brief_id;
});

//服务类目
$app->post('services/{service_id}/categories', function ($service_id) {
    return "services categories post " . $service_id;
});

$app->delete('services/{service_id}/categories', function ($service_id) {
    return "services categories delete " . $service_id;
});

$app->post('services/{service_id}/categories/{category_id}', function ($service_id, $category_id) {
    return "services categories post " . $service_id . " " . $category_id;
});

$app->delete('services/{service_id}/categories/{category_id}', function ($service_id, $category_id) {
    return "services categories delete " . $service_id . " " . $category_id;
});

//用户
$app->get('users', function () {
    return "users get";
});

$app->post('users', function () {
    return "users post";
});

$app->get('users/{user_id}', function ($user_id) {
    return "users get " . $user_id;
});

$app->delete('users/{user_id}', function ($user_id) {
    return "users delete " . $user_id;
});

$app->put('users/{user_id}', function ($user_id) {
    return "users put " . $user_id;
});

//相册照片
$app->post('albums/{album_id}/photos/{photo_id}', function ($album_id, $photo_id) {
    return "albums photos put " . $album_id . " " . $photo_id;
});

//照片
$app->delete('photos/{photo_id}', function ($photo_id) {
    return "photos delete " . $photo_id;
});

$app->put('photos/{photo_id}', function ($photo_id) {
    return "photos put " . $photo_id;
});

//类目
$app->get('categories', function () {
    return "categories get";
});

$app->post('categories', function () {
    return "categories post";
});

$app->get('categories/{category_id}', function ($category_id) {
    return "categories get " . $category_id;
});

$app->delete('categories/{category_id}', function ($category_id) {
    return "categories delete " . $category_id;
});

$app->put('categories/{category_id}', function ($category_id) {
    return "categories put " . $category_id;
});
