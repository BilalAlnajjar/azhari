@extends('layouts.admin')

@section('title')
    {{ $title }}
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('advertisements.index')}}">Advertisements</a></li>
        <li class="breadcrumb-item active">Edit {{$advertisement->title}}</li>
    </ol>
@stop

@section('content')
    <form action="{{route('advertisements.update',$advertisement->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include('admin.advertisements._form',[
        'button'=>'Update'
                ])
    </form>

@stop
@section('scripts')

@stop

