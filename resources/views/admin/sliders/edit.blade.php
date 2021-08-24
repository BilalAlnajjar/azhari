@extends('layouts.admin')

@section('title')
    {{ $title }}
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('sliders.index')}}">Sliders</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@stop

@section('content')

    <form action="{{route('sliders.update',$slider->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include('admin.sliders._form',[
        'button'=>'Update'
                ])
    </form>
@stop

