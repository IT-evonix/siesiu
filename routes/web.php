<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\ContactController;

Route::get('clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
});
Route::get('/', function () {
    $data_arr = array();
    $data_arr['title'] = "SIE | Homepage";
    $data_arr['keywords'] = "SIE";
    $data_arr['description'] = "SIE";
    $data_arr['canonical'] = "";
    return view('index', ['data_arr' => $data_arr]);
});
// -----ABOUT-US-START
Route::get('/our-legacy', function () {
    $data_arr = array();
    $data_arr['title'] = "Our Legacy";
    $data_arr['keywords'] = "Our Legacy";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us.our-legacy', ['data_arr' => $data_arr]);
});
Route::get('/about-siu', function () {
    $data_arr = array();
    $data_arr['title'] = "About SIU";
    $data_arr['keywords'] = "About SIU";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us.about-siu', ['data_arr' => $data_arr]);
});
Route::get('/about-institute', function () {
    $data_arr = array();
    $data_arr['title'] = "About Institute";
    $data_arr['keywords'] = "About Institute";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us.about-institute', ['data_arr' => $data_arr]);
});
Route::get('/about-sie', function () {
    $data_arr = array();
    $data_arr['title'] = "About SIE";
    $data_arr['keywords'] = "About SIE";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us.about-sie', ['data_arr' => $data_arr]);
});
Route::get('/chancellor', function () {
    $data_arr = array();
    $data_arr['title'] = "Chancellor";
    $data_arr['keywords'] = "Chancellor";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us/chancellor', ['data_arr' => $data_arr]);
});
Route::get('/pro-chancellor', function () {
    $data_arr = array();
    $data_arr['title'] = "Pro-Chancellor";
    $data_arr['keywords'] = "Pro-Chancellor";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us/pro-chancellor', ['data_arr' => $data_arr]);
});
Route::get('/vice-chancellor', function () {
    $data_arr = array();
    $data_arr['title'] = "Vice-Chancellor";
    $data_arr['keywords'] = "Vice-Chancellor";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us/vice-chancellor', ['data_arr' => $data_arr]);
});
Route::get('/dean-FacultyofEducation', function () {
    $data_arr = array();
    $data_arr['title'] = "Vice-Chancellor";
    $data_arr['keywords'] = "Vice-Chancellor";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us/dean-FacultyofEducation', ['data_arr' => $data_arr]);
});
Route::get('/director-SIE', function () {
    $data_arr = array();
    $data_arr['title'] = "Director - SIE";
    $data_arr['keywords'] = "Director - SIE";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us/director-SIE', ['data_arr' => $data_arr]);
});
Route::get('/faculty-member', function () {
    $data_arr = array();
    $data_arr['title'] = "Faculty Member";
    $data_arr['keywords'] = "Faculty Member";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('about-us/faculty-member', ['data_arr' => $data_arr]);
});
Route::get('/life-at-sie', function () {
    $data_arr = array();
    $data_arr['title'] = "Life at SIE";
    $data_arr['keywords'] = "Life at SIE";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('life-at-sie', ['data_arr' => $data_arr]);
});
Route::get('/events', function () {
    $data_arr = array();
    $data_arr['title'] = "Event";
    $data_arr['keywords'] = "Event";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('events', ['data_arr' => $data_arr]);
});
Route::get('/contact-us', function () {
    $data_arr = array();
    $data_arr['title'] = "Contact Us";
    $data_arr['keywords'] = "Contact Us";
    $data_arr['description'] = "Symbiosis Institute of Education (SIE)";
    $data_arr['canonical'] = "";
    return view('contact-us', ['data_arr' => $data_arr]);
});