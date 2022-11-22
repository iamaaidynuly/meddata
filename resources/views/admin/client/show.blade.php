@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? 'Show Client' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $client->name }}
                        </div>
                        <div class="form-group">
                            <strong>Surname:</strong>
                            {{ $client->surname }}
                        </div>
                        <div class="form-group">
                            <strong>Login:</strong>
                            {{ $client->login }}
                        </div>
                        <div class="form-group">
                            <strong>Birthday:</strong>
                            {{ $client->birthday }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $client->gender }}
                        </div>
                        <div class="form-group">
                            <strong>City Id:</strong>
                            {{ $client->city_id }}
                        </div>
                        <div class="form-group">
                            <strong>Contact:</strong>
                            {{ $client->contact }}
                        </div>
                        <div class="form-group">
                            <strong>App:</strong>
                            {{ $client->app }}
                        </div>
                        <div class="form-group">
                            <strong>Height:</strong>
                            {{ $client->height }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $client->age }}
                        </div>
                        <div class="form-group">
                            <strong>Weight:</strong>
                            {{ $client->weight }}
                        </div>
                        <img class="profile-user-img img-fluid img-circle" src="{{url("$client->image")}}" alt="User profile picture">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
