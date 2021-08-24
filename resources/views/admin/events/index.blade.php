@extends('layouts.admin')

@section('title')
     Events
        <a class="btn btn-outline-success" href="{{route('events.create')}}">Create</a>
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">Events</li>
    </ol>
@stop

@section('content')
<x-alert name="error"></x-alert>
<x-alert name="success"></x-alert>

    <table class="table">

        <thead>
        <tr>

            <th>Count</th>
            <th style="width: 10%"> Title</th>
            <th>Image</th>
            <th class="w-25">Brief Details</th>
            <th>Created at</th>
            <th>status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td >{{ $event->title }}</td>
                <td>
                    <a href="{{$event->path_image}}" data-lity data-lity-desc="">
                        <img src="{{$event->path_image}}" width="70" height="70" alt="">
                    </a>
                </td>
                <td class="w-25">{!! $event->brief_details !!}</td>
                <td>{{ $event->created_at }}</td>
                <td>{{ $event->status }}</td>
                <td>
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm d-inline btn-dark">Edit</a>

                  <form action="{{ route('events.destroy', $event->id) }}" class="d-inline" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$events->links()}}

@stop
