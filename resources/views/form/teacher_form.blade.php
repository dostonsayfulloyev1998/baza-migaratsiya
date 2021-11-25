@extends('layouts.layout')

@section('content')

    @php
        $subject = \Illuminate\Support\Facades\DB::table('subject')->get();
    @endphp

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="g_name">Select Subject</label>
                        <select name="g_id" id="g_name" class="form-control">
                            <option value=" ">  select subject  </option>
                            @foreach($subject as $item)
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
