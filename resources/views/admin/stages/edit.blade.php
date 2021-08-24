@extends('layouts.admin')

@section('title')
    {{ $title }}
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('stages.index')}}">Stages</a></li>
        <li class="breadcrumb-item active">Edit {{$stage->name}}</li>
    </ol>
@stop

@section('content')

    <form action="{{route('stages.update',$stage->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include('admin.stages._form',[
        'button'=>'Update'
                ])
    </form>

@stop


