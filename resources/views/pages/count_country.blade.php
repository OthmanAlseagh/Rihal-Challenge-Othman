@extends('layout.master')


@section('content')
    <br>
    <br>
    <div align="center">
        <a class="btn btn-danger" href="{{ url('/home') }}">Back Home</a>
    </div>
    <footer>
        <div style="padding-left: 150px">
            <div id="site_content">
                <table style="margin-top: -15.5%">
                    <thead style="margin-bottom: 10%">
                    <tr>
                        <th>Country Name</th>
                        <br> <br>
                        <th>Count Of Students</th>
                        <br> <br>
                    </tr>
                    </thead>
                    @foreach($collection as $country)
                        <tr>
                            <td style="padding-top: 10px ; width: 35%" class="text-center">
                                {{$country->name}}
                            </td>
                            <td style="padding-top: 10px ; width: 35%" class="text-center">
                                {{$country->students_count}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </footer>

@endsection