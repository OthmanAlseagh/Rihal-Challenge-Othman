@extends('layout.master')


@section('content')
    <br>
    <br>
    <div align="center">
        <a class="btn btn-danger" href="{{ url('/') }}">Back Home</a>
    </div>
    <footer>
        <div >
            <div id="site_content">
                <li><a title="" width="600" height="300" alt="photo_one">Students Average Date Of Birth
                        = {{$average}}</a></li>
            </div>
        </div>
    </footer>

@endsection