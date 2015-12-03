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

use App\Entities\Xavier;

$app->get('/', function () use ($app) {
    return view('index');
});

$app->get('/', function () use ($app) {
    return view('index');
});

$app->get('/list', function () use ($app) {
    $list = [
        [
            'title' => 'This is title',
            'body'  => 'This is body'
        ],
        [
            'title' => 'This is title2',
            'body'  => 'This is body2'
        ],
        [
            'title' => 'This is title3',
            'body'  => 'This is body3'
        ]
    ];

    return $list;
});

$app->post('/list', function () use ($app) {
    return ['response'=>'completed', 'data'=> [
                "Michael Phelps",
                "Liu Xiang",
                "Yao Ming",
                "Allyson Felix",
                "Shawn Johnson",
                "Roman Sebrle",
                "Guo Jingjing",
                "Tyson Gay",
                "Asafa Powell",
                "Usain Bolt"
            ]];
});

