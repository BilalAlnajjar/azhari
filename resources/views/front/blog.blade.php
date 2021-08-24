@extends('layouts.front')

@section('content')

<div class="mx-auto">
    <!-- Staet channel -->

    <div class="channel">
        <h4 class="channel-title text-center">الرئيسية/نبذة قصيرة عن الخبر نبذة قصيرة عن الخبر</h4>
        <!-- <hr style="
            width: 110px;
            margin-left: 730px;
            color: rgba(6, 30, 57, 1);
            border: 1px solid #000;
            margin-top: -5px;
        "> -->
</div>

    <!-- container-->
    <div class="contain">
        <div class="container">
            <div class="row">
                <h1>{{$blog->title}}</h1>

                <div class="col-md-4  contain-vi">
                    <p>اخر الاخبار <i class="far fa-newspaper"></i></p>
                    @foreach($blogs as $item)
                    <div class=" contain-vi1">
                        <span>{{$item->title}}</span>
                        <img src="{{$item->image}}" width="20%" alt="">
{{--                      <span>{{$item->created_at}}</span>--}}
                    </div>
                    @endforeach
                </div>
                @if(!is_null($blog->chunkImages))
                <div class="col-md-8  contain-new">
                    @foreach($blog->chunkImages as $image)
                    <div class="col-md-4">
                        @foreach($image as $item)
                        <div class="contain-new{{($loop->iteration%2==0)?'2':'1'}}"><img height="100%" width="100%" src="{{$item->path_image}}" alt=""></div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                @else
                    <img src="{{$blog->}}" alt="">
                @endif

                <div class="contain-poitn ">
                    <i class="fas fa-circle "></i>
                    <i class="far fa-circle "></i>
                    <i class="fas fa-circle "></i>
                    <h4>{!!$blog->details!!}</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>

@stop
