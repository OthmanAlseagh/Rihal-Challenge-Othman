<!DOCTYPE html>
<html>
@extends('pages.head')
<style>
    .container {
        height: 70px;
        position: relative;
        border: 0px solid green;
    }

    .vertical-center {
        margin: 0;
        position: center;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
</style>
<body>
<header>
</header>
<div class="container">
    <div class="vertical-center">
        <nav>
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox"/>
                    <div class="slider round"></div>
                </label>
                <em>Enable Dark Mode!</em>
            </div>
        </nav>
    </div>
</div>
<br>
<div class="container">
    <div class="vertical-center">
        <ul class="nav nav-pills">
            <li>
                <a class="btn btn-primary" href="{{ url('/count-level') }}" role="button">Count Of Students Per Level</a>
            </li>
            <li>
                <a class="btn btn-primary" href="{{ url('/count-country') }}" role="button">Count Of Students Per Country</a>
            </li>
            <li>
                <a class="btn btn-primary" href="{{ url('/student-date') }}" role="button">Students Average Date Of Birth</a>
            </li>
        </ul>
    </div>
</div>


@yield('content')

<script type="text/javascript" src="js/switchTheme.js"></script>
</body>
</html>
