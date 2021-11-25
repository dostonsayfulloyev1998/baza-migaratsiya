@extends('layouts.layout')

@section('content')

    @php
        $students = DB::select('select s.id as id, s.name as name,g.name as g_name from `student` s inner join `group` g on s.g_id = g.id');
    @endphp

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-2">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">group</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{$student->id}}</th>
                            <td>{{$student->name}}</td>
                            <td>{{$student->g_name}}</td>

                        </tr>
                    @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
