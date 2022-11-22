@extends('layouts.app')

@section('template_title')
    Update Lifestyle
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Lifestyle</span>
                        <div class="float-right">
                            <a href="{{ route('lifestyles.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lifestyles.update', $lifestyle->id) }}" role="form"
                              enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.lifestyle.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
