

<div class="wrapper">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="sidebar" style="min-height: 100%; height:100vh;" id="navbarText">
        <img src="{{asset('assets/front/img/تنزيل.png')}}" alt="">
        <p>الإدارة العامة للمعاهد الأزهرية في فلسطين</p>
        <p class="text-sid">AL AZHAR INST. GENERAL ADMINST-PALESTINE</p>
        <ul>
            <li><a href="{{route('home')}}">الرئيسية </a>
            </li>
            <li>
                <a href="جمعية دار الإمام الشافعي-1.html"> <i class="fas fa-caret-down"></i>حول المعاهد الأزهرية</a>
                <ul class="list-unstyle">
                    <li><a href="{{route('about')}}">عن المعاهد</a></li>
                    <li><a href="{{route('song')}}">نشيد الأزهر الشريف </a></li>
                </ul>
            </li>
            <li>
                <a href="#"> <i class="fas fa-caret-down "></i> إدارةالمعاهد الأزهرية</a>
                <ul class="list-unstyle">
                    <li><a href="{{route('dean')}}"> عميد المعاهد الأزهرية</a></li>
                    <li><a href="{{route('academic')}}">النظام الأكاديمي</a></li>
                    <li><a href="{{route('management')}}">النظام الإداري</a></li>
                </ul>
            </li>
            <li>
                <a href="#"> <i class="fas fa-caret-down dow1"></i>الخدمات الإلكترونية</a>
                <ul class="list-unstyle">
                    <li><a href="{{route('admission')}}">القبول والتسجيل</a></li>
                    <li><a href="{{route('staff')}}">إدارة شؤون الموظفين</a></li>
                    <li><a href="{{route('student')}}">إدارة شؤون الطلبة</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('stages')}}"> <samp class="spinner-grow"></samp> المناهج والخطط الدراسية</a>
            </li>
            <li><a href="#"><i class="fas fa-caret-down dow2"></i> الجمعيات</a>
                <ul class="list-unstyle">
                    <li><a href="{{route('shafi')}}">جمعية دار الإمام الشافعي</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
