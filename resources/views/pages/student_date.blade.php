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
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>

{{--@section('content')--}}
<div align="center" style="padding-top: 50px">
    <a class="btn btn-danger" href="{{ url('/') }}">Back Home</a>
</div>
<br>
<br>
<br>
<body>
<div>
    <div id="site_content">
        <li>
            <a title="" width="600" height="300" alt="photo_one">Students Average Date Of Birth = {{$average}}</a>
        </li>
    </div>
</div>
</body>
<script type="text/javascript" src="js/switchTheme.js"></script>
{{--@endsection--}}