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
                        <span class="card-title">Update doctor specialization</span>
                        <div class="float-right">
                            <a href="{{ route('doctors.index') }}" class="btn btn-success btn-sm"
                               data-placement="left">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('doctor-specializations.update', $user->id) }}" role="form"
                              enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="form-group">
                                        {{ Form::label('branch_id') }}
                                        {{ Form::text('branch_id', $user->branch_id, ['class' => 'form-control' . ($errors->has('branch_id') ? ' is-invalid' : ''), 'placeholder' => 'Branch']) }}
                                        {!! $errors->first('branch_id', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('specialization') }}
                                        {{ Form::text('specialization', $user->specialization, ['class' => 'form-control' . ($errors->has('specialization') ? ' is-invalid' : ''), 'placeholder' => 'specialization']) }}
                                        {!! $errors->first('specialization', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('category_id') }}
                                        {{ Form::text('category_id', $user->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'category_id']) }}
                                        {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('work_place') }}
                                        {{ Form::text('work_place', $user->work_place, ['class' => 'form-control' . ($errors->has('work_place') ? ' is-invalid' : ''), 'placeholder' => 'work_place']) }}
                                        {!! $errors->first('work_place', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('experience') }}
                                        {{ Form::text('experience', $user->experience, ['class' => 'form-control' . ($errors->has('experience') ? ' is-invalid' : ''), 'placeholder' => 'experience']) }}
                                        {!! $errors->first('experience', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
