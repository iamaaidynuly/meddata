@extends('layouts.app')

@section('template_title')
    Client
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clients') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm float-right"
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Login</th>
                                    <th>Birthday</th>
                                    <th>Gender</th>
                                    <th>City</th>
                                    <th>Contact</th>
                                    <th>App</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>
                                            @if(isset($client->image))
                                                <img class="profile-user-img img-fluid img-circle" src="{{url("$client->image")}}" alt="User profile picture">
                                            @else
                                                <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                                            @endif
                                        </td>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->surname }}</td>
                                        <td>{{ $client->login }}</td>
                                        <td>{{ $client->birthday }}</td>
                                        <td>{{ $client->gender }}</td>
                                        <td>{{ $client->city_id }}</td>
                                        <td>{{ $client->contact }}</td>
                                        <td>
                                            @if($client->app = 'getwell')
                                                Get Well
                                            @else
                                                Wallit
                                            @endif
                                        </td>

                                        <td>
                                            <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                   href="{{ route('clients.show',$client->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('clients.edit',$client->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-fw fa-trash"></i>
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
