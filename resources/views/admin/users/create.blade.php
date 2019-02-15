@extends('layouts.admin')

@section('content')

    <h1> Create User </h1>
    {!! Form::open(['method' => 'post', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

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
        {!! form::select('role_id', ['' => 'Choose a Role'] + $roles , null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! form::label('is_active', 'is_active:') !!}
        {!! form::select('is_active', array(1 => 'Active' , 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! form::label('photo_id', 'file') !!}
        {!! form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}


    @include('includes.form_error')

@stop

