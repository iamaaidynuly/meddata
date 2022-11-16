@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                @if($type == 2)
                                    {{ __('Doctors') }}
                                @elseif($type == 3)
                                    {{__('Managers')}}
                                @endif
                            </span>

                            <div class="float-right">

                                <form method="get" action="{{route('users.create')}}">
                                    @csrf
                                    <input type="hidden" value="{{$type}}" name="type">
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
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('users.show',$user->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('users.edit',$user->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-fw fa-trash"></i> Delete
                                                </button>
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
