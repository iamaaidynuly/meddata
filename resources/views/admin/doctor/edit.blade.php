@extends('layouts.app')

@section('template_title')
    Update doctor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update doctor</span>
                        <div class="float-right">
                            <a href="{{ route('doctors.index') }}" class="btn btn-success btn-sm"
                               data-placement="left">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('doctors.update', $user->id) }}" role="form"
                              enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.doctor.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
