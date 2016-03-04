<?php


Route::group(['prefix'=>'forum', 'middleware' => ['web']], function () {
    Route::get('/', '\CodeEdu\CodeForum\Controllers\ForumController@index');
    Route::get('topic/{id}', '\CodeEdu\CodeForum\Controllers\ForumController@topic');
});
