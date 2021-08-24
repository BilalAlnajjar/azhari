@extends('layouts.admin')

@section('title')
    {{ $title }}
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('stages.index')}}">Stages</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@stop

@section('content')

    <form action="{{route('stages.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.stages._form',[
        'button'=>'add',

                ])

@stop
