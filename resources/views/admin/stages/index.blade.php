@extends('layouts.admin')

@section('title')
     stages
        <a class="btn btn-outline-success" href="{{route('stages.create')}}">Create</a>
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">Stages</li>
    </ol>
@stop

@section('content')
<x-alert name="error"></x-alert>
<x-alert name="success"></x-alert>

    <table class="table">

        <thead>
        <tr>

            <th>Count</th>
            <th style="width: 10%"> Name</th>
            <th>Image</th>
            <th>Main Stage</th>
            <th>Created at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($stages as $stage)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td >{{ $stage->name }}</td>
                <td>
                    <a href="{{$stage->path_image}}" data-lity data-lity-desc="">
                        <img src="{{$stage->path_image}}" width="70" height="70" alt="">
                    </a>
                </td>
                <td class="w-25">{{ $stage->main_stage }}</td>
                <td>{{ $stage->created_at }}</td>
                <td>
                        <a href="{{ route('stages.edit', $stage->id) }}" class="btn btn-sm d-inline btn-dark">Edit</a>

                  <form action="{{ route('stages.destroy', $stage->id) }}" class="d-inline" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$stages->links()}}

@stop
