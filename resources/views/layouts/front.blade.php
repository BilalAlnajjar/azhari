<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <!-- bootstrap CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


{{--    <!-- Vendor CSS Files -->--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
{{--    <link href="{{asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">--}}
{{--    <link href="{{asset('assets/front/vendor/icofont/icofont.min.css')}}" rel="stylesheet">--}}
{{--    <link href="{{asset('assets/front/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">--}}
{{--    <link href="{{asset('assets/front/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">--}}
{{--    <link href="{{asset('assets/front/vendor/venobox/venobox.css')}}" rel="stylesheet">--}}
{{--    <link href="{{asset('assets/front/vendor/aos/aos.css')}}" rel="stylesheet">--}}

    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('assets/front/css/normalize.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/front/css/all.css')}}" /> -->
    <link rel="stylesheet" href="{{asset('assets/front/css/min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
    <!-- Responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>الرئيسية </title>

    <style>

        .b{
            display: none;
        }
            .wrapper{
            display: block;
        }
       @media only screen and (max-width: 720px) {
        .wrapper{
            display: none;
           width: 98vw;
        }
        .b{
            width: 2vw;
            display: block;
        }
        .sidebar{
            width:100%;
        }
       }
    </style>
</head>

@include('front.includes.header')


<div class="d-flex flex-md-row-reverse flex-column">

<div class="d-flex flex-md-row-reverse">
<div class="wrapper container-fluid mt-md-0 mt-2" id="mySidebar">
    <div class="sidebar d-flex flex-column" style="min-height: 100%; height:100vh;" id="navbarText">
        <button type="button" class="close d-block d-md-none" onclick="w3_close()" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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

<div class="b" style="width:10%;" id="btn-opny">
    <button class="btn" onclick="w3_open()">☰</button>
</div>
</div>

<!-- star content -->

    @yield('content')
    <!-- end content -->
</div>

<!-- End  Footer-->
<div class="footer py-2">
    <div class="d-flex flex-md-row flex-column">
            <div class=" footer-item1 col-md-5 m-0">
                <h2>الإدارة العامة للمعاهد الأزهرية</h2>
                {{-- <hr class="footer-hr1"> --}}
                <p> العنوان : فلسطين-غزة-شارع جمال عبد الناصر-الثلاثيني سابقاً <i class="fas fa-map-marker-alt "></i></p>
                <p> <span class="mail">azhariinst@gmail.com </span>: البريد الالكترونى الرسمى <i class="fas fa-envelope "></i></p>
                <p>0 8 2 6 3 4 0 9 3/هاتف <i class="fas fa-phone "></i></p>
                <p>0 8 2 6 3 4 0 9 3/فاكس <i class="fas fa-fax "></i></p>
            </div>
            <div class=" footer-item2 m-0 col-md-5">
                <div class="d-flex flex-column justify-content-start align-items-end">
                    <h2>فروعنا</h2>
                <hr class="footer-hr">
                </div>
                <p>معهد الأزهر الديني فرع خان يونس <i class="fas fa-map-marker-alt "></i></p>
                <p>جورة اللوت-بجـــوار المحاكم</p>
                <p>082068550/هاتف <i class="fas fa-phone "></i></p>
                <p>082068550/فاكس <i class="fas fa-fax "></i></p>
            </div>
        </div>
            <div class="iconr">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-whatsapp"></i>
            </div>
            <div class=" footer-item3 ">
                <img src="{{asset('assets/front/img/تنزيل.png')}} " alt=" ">
                <p>الإدارة العامة للمعاهد الأزهرية في فلسطين</p>
                <p>AL AZHAR INST. GENERAL ADMINST-PALESTINE</p>
                <img class="sv" src="{{asset('assets/front/img/azharinist.svg')}}" alt="">
            </div>
</div>
</div>

<!-- End  Footer-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--<script src="{{asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/front/vendor/jquery.easing/jquery.easing.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/front/vendor/php-email-form/validate.js')}}"></script>--}}
{{--<script src="{{asset('assets/front/vendor/owl.carousel/owl.carousel.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/front/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/front/vendor/venobox/venobox.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/front/vendor/aos/aos.js')}}"></script>--}}
<!-- JavaScript Bundle with Popper -->
<script src="http://localhost:8000/assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
<!-- End  conect-->
<script>
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("btn-opny").style.display = "none";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("btn-opny").style.display = "block";
    }
    </script>
<script>
    var i = 0; // Start point
    var images = [];
    var time = 1000;
    // Image List
    @isset($sliders)
    @foreach($sliders as $slider )
    images[{{$loop->iteration-1}}] = '{{$slider->path_image}}';

        @endforeach
            @endisset
    // Change Image
    function changeImg(){
        document.slide.src = images[i];
        if(i < images.length - 1){
            i++;
        } else {
            i = 0;
        }
        // setTimeout("changeImg()",time);
    }
    window.onload = changeImg;
</script>
@yield('scripts')
<!-- JavaScript Bundle with Popper -->
</html>
