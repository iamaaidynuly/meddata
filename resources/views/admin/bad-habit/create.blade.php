@extends('layouts.app')

@section('template_title')
    Create Bad Habit
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Bad Habit</span>
                        <div class="float-right">
                            <a href="{{ route('bad-habits.index') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bad-habits.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.bad-habit.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
