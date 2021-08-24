<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-{{$color}}">
        <div class="inner">
            <h3>{{$value}}</h3>

            <h4>{{$name}}</h4>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{route(strtolower($name=='Admins'?'users':$name).'.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
