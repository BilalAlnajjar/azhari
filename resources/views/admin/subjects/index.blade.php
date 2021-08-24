@extends('layouts.admin')

@section('title')
     Subjects
        <a class="btn btn-outline-success" href="{{route('subjects.create')}}">Create</a>
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active">Subjects</li>
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
            <th>PDF</th>
            <th>Created at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td >{{ $subject->name }}</td>
                <td>
                    <a href="{{$subject->path_image}}" data-lity data-lity-desc="">
                        <img src="{{$subject->path_image}}" width="70" height="70" alt="">
                    </a>
                </td>
                <td class="w-25"><a href="{{$subject->pdf}}" target="_blank"><i class="fas fa-eye"></i></a></td>
                <td>{{ $subject->created_at }}</td>
                <td>
                        <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-sm d-inline btn-dark">Edit</a>

                  <form action="{{ route('subjects.destroy', $subject->id) }}" class="d-inline" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$subjects->links()}}

@stop
