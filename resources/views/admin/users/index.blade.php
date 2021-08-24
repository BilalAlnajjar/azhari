@extends('layouts.admin')

@section('title')
     users
        <a class="btn btn-outline-success" href="{{route('users.create')}}">Create</a>
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">users</li>
    </ol>
@stop

@section('content')
<x-alert name="error"></x-alert>
<x-alert name="success"></x-alert>

    <table class="table">

        <thead>
        <tr>

            <th>Count</th>
            <th style="width: 10%">Name</th>
            <th>Image</th>
            <th class="w-25">Email</th>
            <th>Created at</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    <a href="{{$user->path_image}}" data-lity data-lity-desc="Photo of a flower">
                        <img src="{{$user->path_image}}" width="70" height="70" alt="">
                    </a>
                </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->type }}</td>
                <td>

                  <form action="{{ route('users.destroy', $user->id) }}" class="d-inline" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>


            </tr>
        @endforeach
        </tbody>
    </table>
    {{$users->links()}}

@stop
