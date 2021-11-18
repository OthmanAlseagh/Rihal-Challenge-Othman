@extends('layout.master')


@section('content')
    <br>
    <br>
    <div align="center">
        <a class="btn btn-danger" href="{{ url('/') }}">Back Home</a>
    </div>
    <footer>
        <div style="padding-left: 350px">
            <div id="site_content">
                <table style="margin-top: -17.5%">
                    <thead style="margin-bottom: 10%">
                    <tr>
                        <th>Level Name</th>
                        <br> <br>
                        <th>Count Of Students</th>
                        <br> <br>
                    </tr>
                    </thead>
                    @foreach($collection as $level)
                        <tr>
                            <td style="padding-top: 10px ; width: 35%" class="text-center">
                                {{$level->name}}
                            </td>
                            <td style="padding-top: 10px ; width: 35%" class="text-center">
                                {{$level->students_count}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </footer>

@endsection