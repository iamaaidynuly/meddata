<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" value="{{isset($user) ? $user->password : null}}">
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surname') }}
            {{ Form::text('surname', $user->surname, ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'placeholder' => 'surname']) }}
            {!! $errors->first('surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('patronymic') }}
            {{ Form::text('patronymic', $user->patronymic, ['class' => 'form-control' . ($errors->has('patronymic') ? ' is-invalid' : ''), 'placeholder' => 'patronymic']) }}
            {!! $errors->first('patronymic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iin') }}
            {{ Form::text('iin', $user->iin, ['class' => 'form-control' . ($errors->has('iin') ? ' is-invalid' : ''), 'placeholder' => 'iin']) }}
            {!! $errors->first('iin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('street') }}
            {{ Form::text('street', $user->street, ['class' => 'form-control' . ($errors->has('street') ? ' is-invalid' : ''), 'placeholder' => 'street']) }}
            {!! $errors->first('street', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('house') }}
            {{ Form::text('house', $user->house, ['class' => 'form-control' . ($errors->has('house') ? ' is-invalid' : ''), 'placeholder' => 'house']) }}
            {!! $errors->first('house', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('floor') }}
            {{ Form::text('floor', $user->floor, ['class' => 'form-control' . ($errors->has('floor') ? ' is-invalid' : ''), 'placeholder' => 'floor']) }}
            {!! $errors->first('floor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apartment') }}
            {{ Form::text('apartment', $user->apartment, ['class' => 'form-control' . ($errors->has('apartment') ? ' is-invalid' : ''), 'placeholder' => 'apartment']) }}
            {!! $errors->first('apartment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('index') }}
            {{ Form::text('index', $user->index, ['class' => 'form-control' . ($errors->has('index') ? ' is-invalid' : ''), 'placeholder' => 'index']) }}
            {!! $errors->first('index', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $user->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="gender">Choose gender for doctor:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="male" @if($user->gender == 'male') selected @endif>Male</option>
                <option value="female" @if($user->gender == 'female') selected @endif>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="city_id">Choose city for doctor:</label>
            <select class="form-control" id="city_id" name="city_id">
                @foreach($cities as $city)
                    <option value="{{$city->id}}" @if($user->city_id == $city->id) selected @endif>{{$city->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Choose image:</label>
            <input type="file" name="image" class="form-control" id="image">
            @if(isset($user->image))
                <img src="{{url("$user->image")}}" height="400px" width="300px">
            @endif
        </div>

        <input type="hidden" name="user_role_id" value="2">

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
