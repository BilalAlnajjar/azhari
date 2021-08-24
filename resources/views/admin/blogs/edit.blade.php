@extends('layouts.admin')

@section('title')
    {{ $title }}
@stop
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('blogs.index')}}">Blogs</a></li>
        <li class="breadcrumb-item active">Edit {{$blog->title}}</li>
    </ol>
@stop

@section('content')
    <style>
        div.show-image {
            position: relative;
            float:left;
            margin-bottom: 10px;
        }
        div.show-image:hover img{
            opacity:0.5;
        }
        div.show-image:hover button {
            display: block;
        }
        div.show-image button {
            position:absolute;
            display:none;
        }
        div.show-image button.update {
            top:0;
            left:0;
        }
        div.show-image button.delete {
            top: 0;
            font-size: 33px;
            color: #c82929;
            left: 86%;
        }
    </style>
    <form action="{{route('blogs.update',$blog->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        @include('admin.blogs._form',[
        'button'=>'Update'
                ])
    </form>
    <label for="">Upload Multi Image</label>
        </form>
    <div class="row mb-5">
    @foreach($blog->images as $image)
            <div class="col-3 show-image" id="col-{{$image->id}}"" >
                <img src="{{$image->path_image}}" height="150px" alt="">
                <button class="delete" id="{{'delete'.$image->id}}" image_id="{{$image->id}}"><i class="fas fa-ban"></i></button>
            </div>
    @endforeach
    </div>

    <form action="{{route('blogs.images')}}"
              class="dropzone"
              id="myDropzoneForm">
            @csrf
            <input type="hidden" name="blog_id" value="{{$blog->id}}">
        </form>
@stop
@section('scripts')
    <script>
        @foreach($blog->images as $image)
        document.getElementById('delete'+{{$image->id}}).addEventListener('click',function (){

            $.ajax({
                type: 'post',
                url: "{{route('blogs.images.delete')}}",
                data:{
                    '_token':"{{csrf_token()}}",
                    'image_id': document.getElementById('delete'+{{$image->id}}).getAttribute('image_id'),
                },

                success: function(data) {
                   if (data.status==200){
                    document.getElementById('col-'+{{$image->id}}).remove();
                   }
                }

            });
        });
        @endforeach

            Dropzone.options.myDropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            acceptedFiles:'image/*',
            init:function (){
              this.on('success',function (){
                  if (this.getQueuedFiles().length==0&&this.getUploadingFiles()==0){
                      location.reload();
                  }
              })
            }
        };
    </script>
@stop

