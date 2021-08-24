@extends('layouts.front')

@section('content')
    <!-- slider -->
<div class="d-flex flex-column">



    <!-- slider -->
    <div class="header w-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="sidebar-title text-center"> آخر الاخبار <i class="far fa-newspaper"></i></h1>
                {{-- <hr> --}}


                <div class="col-md-3 col-6 header-bna w-100">
                    @foreach($blogs as $blog)
                    <div class="header-car ">
                        @foreach($blog as $item)
                        <div class="card ">
                            <a href="{{route('show.blog',$item->id)}}">
                                <img src="{{asset('assets/admin/img/'.$item->main_image)}}" class="card-img-top " alt="... ">
                                <div class="card-body ">
                                    <p class="card-text ">{{$item->title}}</p>
                                    <h5 class="card-title ">{{$item->created_at}} <i class="fas fa-calendar-week "></i></h5>
                                </div>
                            </a>
                        </div>
                        <div class='clearfix'></div>
                        @endforeach
                    </div>
                    @endforeach
                    <button type="button" class="btn btn-primary text"> <i class="fas fa-caret-left"></i><a href="الاخبار.html" class="a11"> المزيد من الأخبار</a> </button>

                    </div>

                </div>

                    </div>
                </div>
    <!-- news -->
    <div class="news w-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class=" sidebar-title"> آخر الإعلانات <i class="fas fa-ad"></i></h3>
                    @foreach($advertisements as $advertisement)
                    <div class="sidebar-rt ">
                        <h4>{{$advertisement->title}}</h4>
                        <img src="{{$advertisement->path_image}}" alt=" ">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- new -->
    <!-- Start Services -->
    <div class="services pb-5 m-5 px-5" >
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <h3 class="services-title">عن المعاهد الأزهرية</h3>
                <div id="over">
                    <p class="mx-auto">
                        كانت إدارة المعاهد الأزهرية في فلسطين ولاتزال تؤدي رسالة سامية داخل المجتمع الفلسطيني منذ حوالي ستين عاماً. فقد أسس أول معهد أزهري في قطاع غزة بالمرسوم الجمهوري المصري الصادر بتاريخ 26 يناير 1954 م علي مساحة مائة وخمس دونمات علي أن يتبعه إنشاء معاهد أخرى
                        مستقبلاً وكان في تلك الأثناء سادس معهد أزهري علي مستوى جمهورية مصر العربية يتم إنشاؤه، مما أكسبه اهتماماُ كبيراً من الحكومات المصرية المتعاقبة، فقدمت ما يلزمه من دعم لأداء رسالته خاصة وأنه يقدم مناهج تدريسية تحمل صفة الإعتدال والوسطية
                        وعدم التطرف يشرف عليها الأزهر الشريف بالقاهرة. و كان هذا الدعم السخي من خلال تقديم الأزهر الشريف بالقاهرة عشرات الآلاف من الكتب الدراسية مجاناً سنوياً و الاشراف كذلك علي امتحانات الثانوية الأزهرية التي توضع هناك وتالتصحيح و ارسال النتائج
                        والشهادات من طرفه. كما أن الأزهر الشريف يقدم لنا في المعاهد الأزهرية خمسين منحة سنوية للدراسة في جامعة الأزهر بمصر، من بينها كليات علمية (طب وهندسة وصيدلة) ويجدر الإشارة أنه تم افتتاح فرع للمعاهد الأزهرية في مدينة خانيونس وفرع جديد
                        في الشمال وجاري العمل علي فتح معاهد في الضفة الغربية.

                    </p>
                </div>
                <div class="col-md-3 col-12 services-card1 ">
                    <h2 class="services-titl">مميـزات الدراسة في المعهد <i class="fas fa-book"></i></h2>
                    <p>الدراسة والكتب مجاناً</p>
                    <p>التخصص في المرحلة الثانوية للعلمي والأدبي يبدأ من الصف الأول الثانوي</p>
                    <p>يقدم الأزهر الشريف بالقاهرة مئة منحة دراسية مجانية لمن يرغب في مواصلة دراسته في مختلف التخصصات حسب مفتاح القبول في جامعة الأزهر الشريف في القاهر .</p>
                </div>
                <div class="col-md-3 col-12 services-card1">
                    <h2 class="services-titl ">الرسالة <i class="far fa-envelope"></i></h2>
                    <p>
                        إعداد وتنفيذ أنشطة تعليمية وتربوية ودينية متنوعة وشاملة، ورفد المعهد بأساليب جديدة وفاعلة تلبي حاجة المعلمين والطلاب وتمدهم بالمعلومات والمعارف والقيم وذلك من خلال مناهج وسطية أزهرية وثقافة تُدرس لتنقل من خلالهم بين الأجيال من السلف إلي الخلف و تساهم
                        في ضبط وتماسك ورقي المجتمع.
                    </p>
                </div>
                <div class="col-md-3 col-12 services-card1">
                    <h2 class="services-titl ">الرؤية <i class="far fa-eye"></i></h2>
                    <p>
                        المعاهد الأزهرية هي مؤسسة تعليمية دينية تسعى لإعداد طلاب متفوقين ومميزين يكونون في طليعة الشباب الواعي القادر علي تحمل مسئوليته في رفع شأن الوطن وتقدم المجتمع.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <!-- Start  conect-->
    <div class="conect ">
        <div class="container-fluid ">
            <h2 class="conect-title text-center"> العلاقات العامة و الاعلام</h2>
            <div class="d-flex flex-md-row flex-column-reverse justify-content-center align-items-center">
                <div class="d-flex flex-column col-md-8 justify-content-center">
                    <div class=" d-flex justify-content-around" style="background: #E7EEF7">
                        <div class="conect-item1" style="width:31%;"></div>
                        <div class="conect-item2" style="width:31%;"></div>
                        <div class="conect-item3" style="width:31%;">
                        </div>
                    </div>
                    <div class="conect-poitn text-center ">
                        <i class="fas fa-circle"></i>
                        <i class="far fa-circle"></i>
                        <i class="fas fa-circle"></i>
                    </div>
                </div>
                <div class="w-100 conect-iteme d-flex justify-content-center">
                    <div class="conect-iteme w-30 d-flex flex-column align-items-baseline justify-content-center" style="direction: rtl">
                        <p class="conect-iteme-text1"><i class="fas fa-circle mx-2"></i> القناة الإلكترونية </p>
                        <p class="conect-iteme-text2"><i class="fas fa-circle mx-2"></i>الفاعليات و الأنشطة </p>
                        <p class="conect-iteme-text3"><i class="fas fa-circle mx-2"></i>إصدارات المعاهد الأزهرية</p>
                        <p class="conect-iteme-text4"><i class="fas fa-circle mx-2"></i>أرشيف الصور</p>
                        <p class="conect-iteme-text5"><i class="fas fa-circle mx-2"></i>الدورات العلمية</i></p>
                        <p class="conect-iteme-text6"><i class="fas fa-circle mx-2"></i>ملفات وروابط </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End  conect-->
    <!-- <div class="soshal ">
        <div class="container ">
            <div class="row ">
                <h2 class="soshal-title "> منصات التواصل الإجتماعي</h2>
                <div class="soshal-item ">
                    <div class="soshal-item1 ">
                        <!-- <iframe width="100%" height="auto" src="https://www.youtube.com/channel/UCX82XmbMVg6Kl0adk7wJjFQ" frameborder="0" allowfullscreen></iframe> -->
                    </div>

                    <div class="soshal-item2 ">
                        <!-- <iframe src="https://www.youtube.com/channel/UCX82XmbMVg6Kl0adk7wJjFQ/playlists" width="300" height="280"></iframe> -->
                    </div>
                    <div class="soshal-item3 ">
                        <!-- <iframe src="https://www.youtube.com/embed/sGF6bOi1NfA" width="300" height="280" allowfullscreen="allowfullscreen"></iframe> -->

                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End  conect-->
</div>
@stop
