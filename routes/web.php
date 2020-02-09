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

use App\Events\TaskEvent;
use App\Jobs\SendEmailJob;
use App\Notifications\TaskCompletedNotification;
use App\User;
use Carbon\Carbon;


Route::get('/', function () {

    return view('welcome');
});

// Route::get('/', function () {
//     // User::find(1)->notify(new TaskCompletedNotification);
//     $user = User::find(1);
//     User::find(1)->notify(new TaskCompletedNotification);
//     // Notification::route('mail', 'taylor@example.com')
//     //     ->notify(new TaskCompletedNotification($user));
//     return view('welcome');
// });


Route::get('subs', function () {
    if (Gate::allows('subs-only', Auth::user())) {
        return view('subs');
        // The current user can edit settings
    } else {
        return 'U r not Subscriber :(';
    }
});





Route::get('form', 'FormController@index')->name('form');
Route::post('form', 'FormController@store');
// Route::get('localize', 'LocalizationController@index');
Route::get('/locale/{lang?}', function ($lang = null) {
    App::setlocale($lang);
    return view('loalize');
});

Route::get('sendEmail', function () {
    $job =  (new SendEmailJob())->delay(Carbon::now()->addSeconds(5));
    dispatch($job);
    return 'Email is send properly';
});

Route::get('event', function () {
    event(new TaskEvent('Hey how r u?'));
    // event(new MyEvent('hello world'));

});

Route::get('listen', function () {
    return view('listenBroadcast');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
