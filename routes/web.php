<?php

Route::get('/','ClientController@index');

Route::get('/about','ClientController@about');

Route::get('/blog','ClientController@blog');

Route::get('/blogsingle/{id}', 'ClientController@blogsingle');

Route::get('/contact','ClientController@contact');

Route::get('/donate','ClientController@donate');

Route::post('/insert_contact','ClientController@insert_contact');

Route::post('/insert_donate', 'ClientController@insert_donate');

Route::get('login','Auth\LoginController@loginForm');
Route::post('login','Auth\LoginController@login')->name('login');

Route::get('/home', 'HomeController@index')->name('home');
//-----------------------Admin Dashboarc-----------------------------
// Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin', 'BlogController@show_blog');
    Route::get('logout','Auth\LoginController@logout');

// Blog
    // Route::get('/admin/',function(){
    //     return view('site_admin.dashboard')->with(['url'=>'dashboard']);
    // });

    Route::get('/admin/blog','BlogController@show_blog');
    Route::get('/admin/view_blog','BlogController@view_blog');
    Route::get('/admin/blog/detail/{id}', 'BlogController@detail_blog');
    // Route::post('admin/update_photos', 'BlogController@update_photos');

    Route::post('/admin/blog/insert','BlogController@create_or_edit_admin_blog');
    Route::get('admin/edit/blog/{id}','BlogController@edit_blog');
    Route::post('/admin/update_blog','BlogController@update_blog');
    Route::delete('/delete/blog/{id}','BlogController@delete_blog');

//Contact
    Route::get('/admin/contact','BlogController@contact');
    Route::get('/admin/view_contact','BlogController@view_contact');
    Route::delete('/delete/contact/{id}','BlogController@delete_contact');

//Donate
    Route::get('admin/donate','BlogController@donate_list');
    Route::post('admin/insert_donation', 'BlogController@insert_donation');
    Route::get('admin/view_donate','BlogController@view_donate');
    Route::get('admin/edit_donate/{id}','BlogController@edit_donate');
    Route::post('admin/update_donation', 'BlogController@update_donation');
    Route::delete('delete/donate/{id}','BlogController@delete_donate');
    // Route::get('/daterange','BlogController@daterange');
    Route::post('/insert_date','BlogController@insert_date');

//Office
    Route::get('/admin/office','BlogController@office');
    Route::post('/admin/get_all_office', 'BlogController@get_all_office');
    Route::post('/admin/update_office','BlogController@update_office');

//Client
    Route::get('/admin/client','BlogController@client');
    Route::get('/admin/view_client','BlogController@view_client');
    Route::post('/admin/client/insert','BlogController@create_client');
    Route::get('/edit/client/{id}','BlogController@edit_client');
    Route::post('/admin/update_client','BlogController@update_client');
    Route::delete('/delete/client/{id}','BlogController@delete_client');  

//About
    Route::get('/admin/about','BlogController@admin_about'); 
    Route::post('/admin/about/insert','BlogController@insert_about');
    Route::get('/admin/view_about','BlogController@view_about');
    Route::get('/edit/about/{id}','BlogController@edit_about');
    Route::post('/admin/update_about','BlogController@update_about');
    Route::delete('/delete/about/{id}','BlogController@delete_about');  

// });

// use Illuminate\Support\Facades\Hash;
// Route::get('test',function(){
//     echo Hash::make("11111111");
// });

    // ->format('M d-Y')