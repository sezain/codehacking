@extends('layouts.admin')
@section('content')
    <h1>All Posts</h1>

    {{--@if(Session::has('deleted_user'))--}}

        {{--<p class="bg-danger">{{ session('deleted_user') }}</p>--}}
    {{--@endif--}}

    <h1> Users </h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Update</th>
        </tr>
        </thead>

        <tbody>
        @if($post)
            @foreach($post as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo_id ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""> </td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : "UnCategorized"}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop