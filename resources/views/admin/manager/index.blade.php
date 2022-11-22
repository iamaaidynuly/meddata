@extends('layouts.app')

@section('template_title')
    Managers
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Managers
                            </span>

                            <div class="float-right">

                                <form method="get" action="{{route('managers.create')}}">
                                    @csrf
                                    <button class="btn btn-sm btn-success" type="submit">
                                        Create New
                                    </button>
                                </form>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form action="{{ route('managers.destroy',$user->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('managers.show',$user->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('managers.edit',$user->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm(&quot;Are you sure for deleting?&quot;)">
                                                    <i
                                                        class="fa fa-fw fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
