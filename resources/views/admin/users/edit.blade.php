@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-sm-3">
            <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="" class="img-responsive img-rounded">
        </div>

        <div class="col-sm-9">

            <h1> Edit User </h1>
            {!! Form::model($user, ['method' => 'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! form::label('name', 'Name:') !!}
                {!! form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('email', 'Email:') !!}
                {!! form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('password', 'Password:') !!}
                {!! form::password('password', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('role_id', 'Role:') !!}
                {!! form::select('role_id', $roles , null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('is_active', 'is_active:') !!}
                {!! form::select('is_active', array(1 => 'Active' , 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('photo_id', 'file') !!}
                {!! form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>




@stop

