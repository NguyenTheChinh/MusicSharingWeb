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

Route::get('/playlist', 'PlaylistController@get')->name('playlist');

Route::post('/playlist', 'PlaylistController@create')->name('playlist');

Route::delete('/playlist/{id}', 'PlaylistController@delete')->name('playlist');

Route::post('list_track/{playlist_id}/track_id/{track_id}/', 'PlaylistController@insertTracktoList')->name('listtrack');

Route::delete('list_track/{playlist_id}/track_id/{track_id}/delete', 'PlaylistController@deleteTrackfromList')->name('listtrack');

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