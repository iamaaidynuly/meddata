@extends('layouts.app')

@section('template_title')
    Clinics
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clinic') }}
                            </span>
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
                                    <th>Manager</th>
                                    <th>License</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($clinics as $clinic)
                                    <tr>
                                        <td>{{ $clinic->id }}</td>
                                        <td>{{ $clinic->title }}</td>
                                        <td>{{ $clinic->manager->name }}</td>
                                        <td>{{ $clinic->license }}</td>
                                        <td>
                                            <form action="{{ route('clinics.destroy',$clinic->id) }}" method="POST">
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('clinics.edit',$clinic->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm(&quot;Are you sure for deleting?&quot;)">
                                                    <i
                                                        class="fa fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
