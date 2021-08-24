@extends('layouts.admin')

@section('title')
    {{ $title }}
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('events.index')}}">Events</a></li>
        <li class="breadcrumb-item active">Edit {{$event->title}}</li>
    </ol>
@stop

@section('content')

    <form action="{{route('events.update',$event->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include('admin.events._form',[
        'button'=>'Update'
                ])
    </form>

@stop


