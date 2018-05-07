<?php

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

Auth::routes();

Route::get('/','songInTrack@getIndex');

Route::get('/musicworld/{nameGenre}','orderByGenre@getIndex');

Route::get('musicworld/listen/{nameSong}-{idSong}','listenAudio@getIndex');

Route::get('/getPlaylist', 'PlaylistController@get')->name('playlist');

Route::post('/createPlaylist', 'PlaylistController@create')->name('playlist');

Route::delete('/getPlaylist', 'PlaylistController@delete')->name('playlist');

Route::get('/deletePlaylist-{id}','PlaylistController@delete');


Route::post('insert', 'PlaylistController@insertTracktoList')->name('listtrack');

Route::get('/getTrackInList-{playlistId}','PlaylistController@getTracktoList');

Route::delete('list_track/{playlist_id}/track_id/{track_id}/delete', 'PlaylistController@deleteTrackfromList')->name('listtrack');

Route::get('deleteTrackInPlaylist/{track_id}-{playlist_id}','PlaylistController@deleteTrackfromList');

Route::get('upload', 'TrackController@getUploadForm')->middleware('auth');

Route::post('upload', 'TrackController@uploadFile') -> name('upload');

Route::get('download/{name}-{id}', 'TrackController@downloadFile')->middleware('auth');

Route::post('/payment', 'TrackController@paid')->middleware('auth');

Route::put('/payment', 'TrackController@payment')->middleware('auth');

Route::get('admin', 'AdminController@getView');

Route::get('admin/user/', 'AdminController@getUserView');

Route::get('admin/track/', 'AdminController@getTrackView');

Route::get('admin/playlist', 'AdminController@getPlaylistView');

Route::put('admin/user', 'AdminController@updateUser');

Route::delete('admin/user', 'AdminController@deleteUser');

Route::put('admin/track', 'AdminController@updateTrack');

Route::delete('admin/track', 'AdminController@deleteTrack');

Route::put('admin/playlist', 'AdminController@updatePlaylist');

Route::delete('admin/playlist', 'AdminController@deletePlaylist');

Route::get('track_id/{track_id}/{time_played}/pay', 'PayController@pay')->name('pay');

Route::get('search', function(){
    return view('musicWorld.searchPage');
});

Route::post('search', 'controllerSearch@search');

Route::get('createPlaylist', function(){
    return view('musicWorld.createPlaylist');   
});