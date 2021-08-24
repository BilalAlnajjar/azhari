@extends('layouts.admin')

@section('title')
     visuals
        <a class="btn btn-outline-success" href="{{route('visuals.create')}}">Create</a>
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">visuals</li>
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
            <th>Thumbnail</th>
            <th class="w-25">Brief Details</th>
            <th>Created at</th>
            <th>status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visuals as $visual)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{ $visual->title }}</td>
                <td>
                    <a href="{{$visual->thumbnail}}" data-lity data-lity-desc="Photo of a flower">
                        <img src="{{$visual->thumbnail}}" width="70" height="70" alt="">
                    </a>
                </td>
                <td>{!! $visual->brief_details !!}</td>
                <td>{{ $visual->created_at }}</td>
                <td>{{ $visual->status }}</td>
                <td>
                        <a href="{{ route('visuals.edit', $visual->id) }}" class="btn btn-sm d-inline btn-dark">Edit</a>

                  <form action="{{ route('visuals.destroy', $visual->id) }}" class="d-inline" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$visuals->links()}}

@stop
