<?php

use App\Models\Country;
use App\Models\Level;
use App\Models\Student;
use Illuminate\Support\Carbon;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('student-date', function () {
    $collection = Student::get()->pluck('date_of_birth')->map(function ($item) {
        return Carbon::parse($item)->diff(Carbon::now())->y;
    });
    return view('pages.student_date',['average' => $collection->avg()]);
});

Route::get('count-country', function () {
    $collection = Country::withCount('students')->get();
    return view('pages.count_country',['collection' => $collection]);
});

Route::get('count-level', function () {
    $collection = Level::withCount('students')->get();
    return view('pages.count_level',['collection' => $collection]);
});
