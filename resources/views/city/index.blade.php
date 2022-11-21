@extends('layouts.app')

@section('template_title')
    City
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('City') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('cities.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>#</th>

                                    <th>Title</th>
                                    <th>Country</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($cities as $city)
                                    <tr>
                                        <td>{{ $city->id }}</td>

                                        <td>{{ $city->title }}</td>
                                        <td>{{ $city->country->title }}</td>

                                        <td>
                                            <form action="{{ route('cities.destroy',$city->id) }}" method="POST">
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('cities.edit',$city->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
