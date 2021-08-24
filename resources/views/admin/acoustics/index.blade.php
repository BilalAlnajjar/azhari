@extends('layouts.admin')

@section('title')
     Acoustics
        <a class="btn btn-outline-success" href="{{route('acoustics.create')}}">Create</a>
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">Acoustics</li>
    </ol>
@stop

@section('content')
<x-alert name="error"></x-alert>
<x-alert name="success"></x-alert>

    <table class="table">

        <thead>
        <tr>

            <th>Count</th>
            <th style="width: 10%">Title</th>
            <th>Image</th>
            <th class="w-25">Brief Details</th>
            <th>Created at</th>
            <th>status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($acoustics as $acoustic)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{ $acoustic->title }}</td>
                <td>
                    <a href="{{$acoustic->path_image}}" data-lity data-lity-desc="Photo of a flower">
                        <img src="{{$acoustic->path_image}}" width="70" height="70" alt="">
                    </a>
                </td>
                <td class="w-25">{{ $acoustic->brief_details }}</td>
                <td>{{ $acoustic->created_at }}</td>
                <td>{{ $acoustic->status }}</td>
                <td>
                        <a href="{{ route('acoustics.edit', $acoustic->id) }}" class="btn btn-sm d-inline btn-dark">Edit</a>

                  <form action="{{ route('acoustics.destroy', $acoustic->id) }}" class="d-inline" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$acoustics->links()}}

@stop
