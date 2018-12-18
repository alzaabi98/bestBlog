<?php



Route::get('/', 'PagesController@index' );
Route::get('/about', 'PagesController@about' );
Route::get('/services', 'PagesController@services' );

//posts routes

Route::get('/posts','PostsController@index')->name('posts.index');

// Route::get('/posts/{id}/{author}', function ($id, $author) {
//     return "The post with id ". $id . ' has author name ' . $author ;
// });






