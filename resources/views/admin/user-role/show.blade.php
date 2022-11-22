@extends('layouts.app')

@section('template_title')
    {{ $userRole->name ?? 'Show User Role' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User Role</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('user-roles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $userRole->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $userRole->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
