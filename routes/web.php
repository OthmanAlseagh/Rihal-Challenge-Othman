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
    $collection = Student::query()->pluck('date_of_birth')->all();

    $collection = collect($collection)->map(function ($item) {
        return Carbon::parse($item)->diff(Carbon::now())->y;
    });

    return view('pages.student_date', ['average' => $collection->avg()]);
});

Route::get('count-country', function () {
    $data = Country::withCount('students')->pluck('students_count', 'name')->all();

    return view('pages.showResult', ['chart' => getChart($data, 'Country', 'line')]);
});

Route::get('count-level', function () {
    $data = Level::withCount('students')->pluck('students_count', 'name')->all();

    return view('pages.showResult',['chart' => getChart($data, 'Level', 'column')]);
});

