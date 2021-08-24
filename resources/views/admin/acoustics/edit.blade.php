@extends('layouts.admin')

@section('title')
    {{ $title }}
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('acoustics.index')}}">Acoustics</a></li>
        <li class="breadcrumb-item active">Edit {{$acoustic->title}}</li>
    </ol>
@stop

@section('content')
    <form action="{{route('acoustics.update',$acoustic->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include('admin.acoustics._form',[
        'button'=>'Update'
                ])
    </form>


@stop


