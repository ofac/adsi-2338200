<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return '<h1> Hello Laravel</h1>';
});


Route::get('showuser/{id}', function (Request $request) {
    $id = $request->id;
    $user = App\Models\User::find($id);
    dd($user->toArray());
});

Route::get('showallusers', function () {
    $users = App\Models\User::all();
    return view('showallusers')->with('users', $users);
});


Route::get('challenge', function () {
    $users = App\Models\User::take(10)->get();
    foreach ($users as $user) {
        $years     = Carbon::createFromDate($user->birthdate)->diff()->format('%y years old');
        $since     = Carbon::parse($user->created_at);
        $results[] = $user->fullname . '|' . $years . ' | created ' . $since->diffForHumans();
    }
    dd($results);
});

Route::get('locale/{lang}', function(Request $request) {
    session()->put('locale', $request->lang);
    return redirect()->back();
});

Route::get('examplesblade', function() {
    return view('examples');
});


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

