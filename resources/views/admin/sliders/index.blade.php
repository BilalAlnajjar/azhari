@extends('layouts.admin')

@section('title')
     sliders
        <a class="btn btn-outline-success" href="{{route('sliders.create')}}">Create</a>
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">sliders</li>
    </ol>
@stop

@section('content')
<x-alert name="error"></x-alert>
<x-alert name="success"></x-alert>

    <table class="table">

        <thead>
        <tr>

            <th>Count</th>
            <th>Image</th>
            <th>Created at</th>
            <th>status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sliders as $slider)
            <tr>
                <td>{{  $loop->iteration }}</td>
               \
                <td>
                    <a href="{{$slider->path_image}}" data-lity data-lity-desc="Photo of a flower">
                        <img src="{{$slider->path_image}}" width="70" height="70" alt="">
                    </a>
                </td>
                <td>{{ $slider->created_at }}</td>
                <td>{{ $slider->status }}</td>
                <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-sm d-inline btn-dark">Edit</a>

                  <form action="{{ route('sliders.destroy', $slider->id) }}" class="d-inline" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$sliders->links()}}

@stop
