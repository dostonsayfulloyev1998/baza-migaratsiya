@extends('layouts.layout')

@section('content')

    @php

      $group = \Illuminate\Support\Facades\DB::table('group')->get();

    @endphp

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-3">

                <form method="post" action="{{route('add.student')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="g_name">Select group</label>
                        <select name="g_id" id="g_name" class="form-control">
                            @foreach($group as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>




                    <button type="submit" class="btn btn-primary">add group</button>
                </form>

            </div>
        </div>
    </div>

@endsection
