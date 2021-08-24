@extends('layouts.front')

@section('content')
<div class="mx-auto">
    <div class="channel">
        <h4 class="channel-title text-center">المناهج و الخطط الدراسية</h4>
        <!-- <hr style="
            width: 110px;
            margin-left: 730px;
            color: rgba(6, 30, 57, 1);
            border: 1px solid #000;
            margin-top: -5px;
        "> -->
</div>
    <div class="laern d-flex flex-column align-items-center">
            <div class="d-flex flex-sm-row flex-column justify-content-center">
                <div class="w-40 laern-3 d-flex justify-sm-content-end justify-content-center">
                    <div class="dropdown ">
                        <label for="">مرحلة الثانوية</label>
                        <select name="" id="high_school">
                            <option value=""></option>
                        @foreach($high_school as $tran)
                                <option value="{{$tran->id}}">{{$tran->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-40  laern-3 d-flex justify-content-center">
                    <div class="dropdown">
                        <label for="">مرحلة النقل</label>
                        <select name=""  id="transport_stage">
                            <option value=""></option>
                            @foreach($transport_stage as $tran)
                                <option value="{{$tran->id}}">{{$tran->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
            <hr class="laern-hr">
    </div>

    <div class="manageg">
        <div class="container">
            <div class="row" id="stage">


            </div>
        </div>

    </div>

    <div class="d-flex flex-column align-items-center">
        <h1 class="manageg-title text-center">الخطط الدراسية للمواد المقررة </h1>
        <hr class="laern-hr">
</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 laern-2">
                    <div class="nav-menu">
                        <ul >
                            <li class="drop-down" id="subjects">

                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
</div>


@stop

@section('scripts')
    <script>
        (function ($){


        $(document).ready(function (){

           $('#high_school').on('change',function (){
               document.getElementById("transport_stage").selectedIndex = 0;

               const value=this.value;
               const urlString='http://localhost:8000/stages/subject/'+value;
               $.ajax({
                   type: 'get',
                   url: urlString,
                   success: function(data) {
                       console.log(data.stage.subjects);
                       $('#stage').find('h1').remove();
                       $('#stage').find('div').remove();
                       $('#stage').find('hr').remove();
                       $('#stage').prepend(` <h1 class="manageg-title  " id="title-stage">${data.stage.name}</h1>
                 <hr style="width: 171px;
            margin-left: 458px;
            color: rgba(6, 30, 57, 1);
            border: 1px solid #000;
            margin-top: -5px;">
                        `);
                       $('#stage').append(`<div> <img class="manageg-img"  src="${data.image}" alt="">
                </div>`);

                       // $('.manageg-img').attr('src',data.image);
                       let render= `
                         <a href="">الكتب الدراسية المقررة <i class="fas fa-book-open"></i></a>

                                <ul>`;
                       $.each(data.stage.subjects,function (item,value){
                           console.log(item);
                           render +=`<li class="drop-down"><a href="${value.pdf}" target="_blank">${value.name}</a></li>`
                       });

                       render +=`</ul>`;
                       $('#subjects').append(render);
                   }

               });
           }) ;
            $('#transport_stage').on('change',function (){
                document.getElementById("high_school").selectedIndex = 0;

                const value=this.value;
                const urlString='http://localhost:8000/stages/subject/'+value;
                $.ajax({
                    type: 'get',
                    url: urlString,
                    success: function(data) {
                        console.log(data.stage.subjects);
                        $('#stage').find('h1').remove();
                        $('#stage').find('div').remove();
                        $('#stage').find('hr').remove();
                        $('#stage').prepend(` <h1 class="manageg-title  " id="title-stage">${data.stage.name}</h1>
                 <hr style="width: 171px;
            margin-left: 458px;
            color: rgba(6, 30, 57, 1);
            border: 1px solid #000;
            margin-top: -5px;">
                        `);
                        $('#stage').append(`<div> <img class="manageg-img"  src="${data.image}" alt="">
                </div>`);

                        // $('.manageg-img').attr('src',data.image);
                        let render= `
                         <a href="">الكتب الدراسية المقررة <i class="fas fa-book-open"></i></a>

                                <ul>`;
                        $.each(data.stage.subjects,function (item,value){
                            console.log(item);
                            render +=`<li class="drop-down"><a  href="${value.pdf??'#'}" target="_blank">${value.name}</a></li>`
                        });

                        render +=`</ul>`;
                        $('#subjects').find('ul').remove();
                        $('#subjects').find('a').remove();

                        $('#subjects').append(render);
                    }

                });
            }) ;        });
        })(jQuery)
    </script>

@stop
