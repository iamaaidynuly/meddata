@extends('layouts.app')

@section('template_title')
    Create Client
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Client</span>
                        <div class="float-right">
                            <a href="{{ route('clients.index') }}" class="btn btn-success btn-sm"
                               data-placement="left">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clients.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.client.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
