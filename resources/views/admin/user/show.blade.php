@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Full Name:</strong>
                            {{ $user->name }} {{$user->surname}} {{$user->patronymic}}
                        </div>
                        <div class="form-group">
                            <strong>IIN:</strong>
                            {{ $user->iin }}
                        </div>
                        <div class="form-group">
                            <strong>Birthday:</strong>
                            {{ $user->birthday }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $user->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Country && city:</strong>
                            {{ isset($user->city_id) ? $user->city->title : "-" }}
                        </div>

                        <div class="form-group">
                            <strong>Street && house && floor && apartment && index:</strong>
                            {{ $user->street }}  {{ $user->house }} {{ $user->floor }}  {{ $user->apartment }} {{ $user->index }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $user->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            @if(isset($user->image))
                                <img src="{{url("$user->image")}}" width="300px" height="250px">
                            @else
                                -
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
