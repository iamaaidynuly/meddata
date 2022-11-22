@extends('layouts.app')

@section('template_title')
    Create doctor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create manager </span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('managers.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('managers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.manager.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
