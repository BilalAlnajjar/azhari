@extends('layouts.admin')

@section('title')
Dashboard
@stop
@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
</ol>
@stop

@section('content')
<x-alert name="error"></x-alert>
<x-alert name="success"></x-alert>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <x-small-box name="Blogs" value="{{$count_blogs}}" color="info"></x-small-box>
                <x-small-box name="Advertisements" value="{{$count_advertisement}}" color="success"></x-small-box>
                <x-small-box name="Acoustics" value="{{$count_acoustic}}" color="warning"></x-small-box>
                <x-small-box name="Visuals" value="{{$count_visual}}" color="danger"></x-small-box>
                <x-small-box name="Users" value="{{$count_user}}" color="info"></x-small-box>
                <x-small-box name="Admins" value="{{$count_admin}}" color="success"></x-small-box>
                <x-small-box name="Sliders" value="{{$count_slider}}" color="warning"></x-small-box>
                <x-small-box name="Stages" value="{{$count_stages}}" color="danger"></x-small-box>
                <x-small-box name="Subjects" value="{{$count_subjects}}" color="info"></x-small-box>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@stop
