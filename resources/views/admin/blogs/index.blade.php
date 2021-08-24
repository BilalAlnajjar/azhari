@extends('layouts.admin')

@section('title')
     Blogs
        <a class="btn btn-outline-success" href="{{route('blogs.create')}}">Create</a>
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">Blogs</li>
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
        @foreach($blogs as $blog)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td >{{ $blog->title }}</td>
                <td>
                    <a href="{{$blog->image}}" data-lity data-lity-desc="Photo of a flower">
                        <img src="{{$blog->image}}" width="70" height="70" alt="">
                    </a>
                </td>
                <td class="w-25">{!!   $blog->brief_details!!}</td>
                <td>{{ $blog->created_at }}</td>
                <td>{{ $blog->status }}</td>
                <td>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm d-inline btn-dark">Edit</a>

                  <form action="{{ route('blogs.destroy', $blog->id) }}" class="d-inline" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$blogs->links()}}

@stop
