@extends('pages.head')

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