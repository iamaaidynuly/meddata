@extends('layouts.app')

@section('template_title')
    Create schedule for {{$user->name}}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Adding schedule for {{$user->name}} </span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doctors.show', $user->id) }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user-schedules.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="day">Choose day:</label>
                                <select name="day" id="day" class="form-control" required>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="start_time">Start time:</label>
                                <input type="text" class="form-control" id="start_time" name="start_time" placeholder="9:00" required>
                            </div>
                            <div class="form-group">
                                <label for="end_time">End time:</label>
                                <input type="text" class="form-control" id="end_time" name="end_time" placeholder="9:00" required>
                            </div>
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <button class="btn btn-sm btn-success" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
