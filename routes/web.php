<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function (Request $request) {
    if (request('search')) {
        $contacts =   Contact::with('category')->latest()->where('user_id', Auth()->id())->where('name', 'like', '%' . request('search') . '%')->get()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE);
    } else {
        $contacts = Contact::with(['user', 'category'])
            ->where('user_id', Auth()->id())->get()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE);
    }

    return view('pages.home', [
        'contacts' => $contacts,
        'filter' => 'semua'
    ]);
})->middleware('auth')->name('all');
Route::get('/favorit', function (Request $request) {
    if (request('search')) {
        $contacts =   Contact::latest()->where('user_id', Auth()->id())->where('category_id', 1)->where('name', 'like', '%' . request('search') . '%')->get()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE);
    } else {
        $contacts = User::with('contacts')->find(Auth::id())->contacts->where('category_id', 1)->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE);
    }
    return view('pages.home', [
        'contacts' => $contacts,
        'filter' => 'favorit'
    ]);
})->middleware('auth')->name('fav');
// Route::get('/blokir', function (Request $request) {
//     if (request('search')) {
//         $contacts =   Contact::latest()->where('user_id', Auth()->id())->where('category_id', 2)->where('name', 'like', '%' . request('search') . '%')->get()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE);
//     } else {
//         $contacts = User::with('contacts')->find(Auth::id())->contacts->where('category_id', 2)->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE);
//     }
//     return view('pages.home', [
//         'contacts' => $contacts,
//         'filter' => 'favorit'
//     ]);
// })->middleware('auth')->name('blok');

Route::resource('contact', ContactController::class);
Route::get('/login', function () {
    return view('pages.login');
})->name('login')->middleware(['guest']);

Route::post('/login', function (Request $request) {

    $user =   User::where('username', $request->username)->first();
    if (!$user) {
        $user =  User::create([
            'username' => $request->username
        ]);
    }

    Auth::login($user);
    return redirect()->intended('/');
});


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
