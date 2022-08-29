@extends('pages.head')

<div align="center" style="padding-top: 50px">
    <a class="btn btn-danger" href="{{ url('/') }}">Back Home</a>
</div>
<br>
<br>
<br>
<body>
    {!! $chart->container() !!}
    {!! $chart->script() !!}
</body>
<script type="text/javascript" src="js/switchTheme.js"></script>

