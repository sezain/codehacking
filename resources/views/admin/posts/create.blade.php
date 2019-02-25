@extends('layouts.admin')

@section('content')


    <h1> Create New Post </h1>
    {{--<div class="row">--}}

        {!! Form::open(['method' => 'post', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

            <div class="form-group">
                {!! form::label('title', 'Title:') !!}
                {!! form::text('title', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('category_id', 'Category:') !!}
                {!! form::select('category_id', ['' => 'Choose a Category'] + $categories, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('photo_id', 'Photo:') !!}
                {!! form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('body', 'Body:') !!}
                {!! form::textarea('body', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    {{--</div>--}}

    {{--<div class="row">--}}
        @include('includes.form_error')
    {{--</div>--}}

@stop

