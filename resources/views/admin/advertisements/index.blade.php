@extends('layouts.admin')

@section('title')
    Advertisements
        <a class="btn btn-outline-success" href="{{route('advertisements.create')}}">Create</a>
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">Advertisements</li>
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
            <th class="w-25">Text</th>
            <th>Created at</th>
            <th>status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($advertisements as $advertisement)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{ $advertisement->title }}</td>
                <td>
                    <a href="{{$advertisement->path_image}}" data-lity data-lity-desc="Photo of a flower">
                        <img src="{{$advertisement->path_image}}" width="70" height="70" alt="">
                    </a>
                </td>
                <td>{{ $advertisement->text }}</td>
                <td>{{ $advertisement->created_at }}</td>
                <td>{{ $advertisement->status }}</td>
                <td>
                        <a href="{{ route('advertisements.edit', $advertisement->id) }}" class="btn btn-sm d-inline btn-dark">Edit</a>

                  <form action="{{ route('advertisements.destroy', $advertisement->id) }}" class="d-inline" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$advertisements->links()}}

@stop
