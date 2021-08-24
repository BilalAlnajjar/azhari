@extends('layouts.admin')

@section('title')
    {{ $title }}
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
        <li class="breadcrumb-item active">Edit {{$user->name}}</li>
    </ol>
@stop

@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include('admin.users._form',[
        'button'=>'Update'
                ])
    </form>


@stop


