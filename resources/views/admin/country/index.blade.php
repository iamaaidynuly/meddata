@extends('layouts.app')

@section('template_title')
    Country
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Country') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('countries.create') }}" class="btn btn-primary btn-sm float-right"
                                   data-placement="left">
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

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($countries as $country)
                                    <tr>
                                        <td>{{ $country->id  }}</td>

                                        <td>{{ $country->title }}</td>

                                        <td>
                                            <form action="{{ route('countries.destroy',$country->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('cities.show',$country->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i>Cities</a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('countries.edit',$country->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Are you sure for deleting?&quot;)">
                                                    <i class="fa fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $countries->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
