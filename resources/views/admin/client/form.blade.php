<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $client->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surname') }}
            {{ Form::text('surname', $client->surname, ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'placeholder' => 'Surname']) }}
            {!! $errors->first('surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('login') }}
            {{ Form::text('login', $client->login, ['class' => 'form-control' . ($errors->has('login') ? ' is-invalid' : ''), 'placeholder' => 'Login']) }}
            {!! $errors->first('login', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birthday') }}
            {{ Form::text('birthday', $client->birthday, ['class' => 'form-control' . ($errors->has('birthday') ? ' is-invalid' : ''), 'placeholder' => 'Birthday']) }}
            {!! $errors->first('birthday', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="app">App</label>
            <select class="form-control" id="app" name="app">
                <option value="getwell" @if($client->app == 'getwell') selected @endif>Get well</option>
                <option value="wellit" @if($client->app == 'wellit') selected @endif>Wellit</option>
            </select>
        </div>
        <div class="form-group">
            <label for="city_id">City</label>
            <select class="form-control" id="city_id" name="city_id">
                @foreach($cities as $city)
                    <option value="{{$city->id}}" @if($client->city_id == $city->id) selected @endif>{{$city->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender">
                <option value="male" @if($client->gender == 'male') selected @endif>Male</option>
                <option value="female" @if($client->gender == 'female') selected @endif>Female</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('contact') }}
            {{ Form::text('contact', $client->contact, ['class' => 'form-control' . ($errors->has('contact') ? ' is-invalid' : ''), 'placeholder' => 'Contact']) }}
            {!! $errors->first('contact', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('height') }}
            {{ Form::text('height', $client->height, ['class' => 'form-control' . ($errors->has('height') ? ' is-invalid' : ''), 'placeholder' => 'Height']) }}
            {!! $errors->first('height', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('age') }}
            {{ Form::text('age', $client->age, ['class' => 'form-control' . ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('weight') }}
            {{ Form::text('weight', $client->weight, ['class' => 'form-control' . ($errors->has('weight') ? ' is-invalid' : ''), 'placeholder' => 'Weight']) }}
            {!! $errors->first('weight', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="image">Choose image:</label>
            <input type="file" class="form-control" id="image" name="image">
            <br>
            @if(isset($client->image))
                <img class="profile-user-img img-fluid img-circle" src="{{url("$client->image")}}" alt="User profile picture">
            @endif
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
