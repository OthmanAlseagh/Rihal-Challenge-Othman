<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="website description"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Rihal Challenge</title>
    <link rel="stylesheet" href='css/bootstrap.css'>
    <link rel="stylesheet" href='css/master.css'>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/responod.min.js"></script>
    <meta name="keywords" content="website keywords, website keywords"/>
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>
<body >
<header>
</header>
<div style=" padding-right: 400px">
    <nav>
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
            </label>
            <em>Enable Dark Mode!</em>
        </div>

    </nav>
    <ul class="nav nav-pills">
        <li>
        <li><a class="btn btn-primary" href="{{ url('/count-level') }}" role="button">Count Of Students Per Level</a>
        </li>
        <li><a class="btn btn-primary" href="{{ url('/count-country') }}" role="button">Count Of Students Per
                Country</a></li>
        <li><a class="btn btn-primary" href="{{ url('/student-date') }}" role="button">Students Average Date Of
                Birth</a></li>
    </ul>
</div>


@yield('content')

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
<script type="text/javascript" src="js/jquery.sooperfish.js"></script>
<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
<script type="text/javascript">
    const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
    const currentTheme = localStorage.getItem('theme');

    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);

        if (currentTheme === 'dark') {
            toggleSwitch.checked = true;
        }
    }

    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        }
        else {        document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
        }
    }

    toggleSwitch.addEventListener('change', switchTheme, false);
</script>
</body>
</html>
