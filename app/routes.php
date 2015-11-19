<?php
Route::model('post', 'Post');
Route::put('/{post}/edit-post', function(Post $post){
    $post->update(Input::all());
    return Redirect::to('/'.$post->id);
//    return Response::make('HELLO');
});
Route::delete('/{post}/delete-post', function(Post $post){
    if($post->title == Input::get('title')){
        $post->delete();
        return Redirect::to('/');
    }else{
        return Redirect::to('/'.$post->id.'/delete-post')->with('message', "Post title mismatch");
    }
//    return Response::make('HELLO');
});
Route::post('/login', function(){
    if(Auth::attempt(Input::only('username', 'password'))){
        return Redirect::intended('/');
    }else {
        return Redirect::back()->with('message', 'Invalid Credentials');
    }
});
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});

Route::post('/create-post', function(){
    $post = Post::create(Input::all());
    return Redirect::to('/'.$post->id);
});
Route::group(array('before'=>'auth'), function(){
    Route::post('/', function(){
        return View::make('create-post');
    });
    Route::post('/{post}', function(){
        return Redirect::to('create-post');
    });
    Route::get('/create-post', function(){
        return View::make('create-post');
    });
    Route::get('/{post}/edit-post', function(Post $post){
        return View::make('edit-post')->with('post', $post)->with('method', 'put');
    });
    Route::get('/{post}/delete-post', function(Post $post){
        return View::make('delete-post')->with('post', $post)->with('method', 'delete');
    });
});



Route::get('/login', function(){
    return View::make('login');
});
Route::get('/', function(){
    $posts = Post::all();
    return View::make('main-page')->with('posts', $posts);
});
Route::get('/{post}', function($post){
    return View::make('single-post')->with('post', $post);
});



