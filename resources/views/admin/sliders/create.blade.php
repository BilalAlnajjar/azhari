@extends('layouts.admin')

@section('title')
    {{ $title }}
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('sliders.index')}}">Sliders</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@stop

@section('content')

    <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.sliders._form',[
        'button'=>'add',

                ])
@stop

