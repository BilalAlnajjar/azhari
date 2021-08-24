@extends('layouts.front')



@section('content')
    <div class="name mx-auto">
                <div class="name-head d-flex flex-md-row flex-column">
                    <div class="word-head m-2 pb-4 d-flex flex-column align-items-center pt-3">
                        <img class="name-img" src="{{asset('assets/front/img/ID116536080_3496243173727233_6@2x.png')}}" alt="">
                        <h2>عميد المعاهد الأزهرية في فلسطين </h2>
                        <p>معالي الأستاذ الدكتور / علي رشيد النجار</p>
                        <hr>
                        <h2>معلومات التواصل </h2>
                        <span class="links"> الجوال : 603913 – 0599<i class="fas fa-mobile-alt"></i></span>
                        <br>
                        <span class="links"> الفاكس : 2634093 <i class="fas fa-fax"></i></span>
                        <br>
                        <span class="links"> 2622117 – 2637386  :هاتف المنزل <i class="fas fa-fax "></i></span>
                        <br>
                        <span class="links"> dr20ali@hotmail.com : البريد الإلكتروني <i class="far fa-envelope"></i></span>
                    </div>
                    <div class="col-md-8 word-head1">
                        <script type="text/javascript">
                            function hideAll() {
                                document.getElementById("id1").style.display = "none";
                                document.getElementById("id2").style.display = "none";
                                document.getElementById("id3").style.display = "none";
                                // document.getElementById("id3").style.display = "block";
                            }
                            function show(elementId) {
                                hideAll();
                                document.getElementById(elementId).style.display = "block";
                            }
                        </script>
                        <!-- <button type="button" onclick="show('id1');">Button 1</button> -->
                        <button class="btn btn-primary" type="button" onclick="show('id2');">كلمة العميد</button>
                        <button class="btn btn-primary" type="button" onclick="show('id3');">السيرة الذاتية</button>
                        <div id="id1" style="display: none;">text 1</div>
                        <div id="id2" style="display: none;">
                            ghdgh
                        </div>
                        <div id="id3" style="display: block;">
                            <script type="text/javascript">
                                hideAll();
                            </script>
                            <h1>المعلومات الشخصية <i class="fas fa-circle "></i></h1>
                            <span class=""> <strong>تاريخ الميلاد ومكانه :</strong> 16/9/1953م – خان يونس  </span>
                            <br>
                            <span class=""><strong>الوظيفة  الحالية:</strong>  عميد المعاهد الأزهرية في فلسطين بدرجة وزير</span>
                            <br>
                            <span class=""><strong>مكان العمل:</strong> المعاهد الأزهرية - غزة </span>
                            <br>
                            <span class=""><strong>الحالة الاجتماعية  :</strong>  متزوج</span>
                            <br>
                            <span class=""><strong>عدد الأولاد :</strong>  خمسة (ولدان وثلاث بنات)</span>
                            <br>
                            <span class=""><strong>مكان الإقامة  :</strong> غزة – تل الهوى – أبراج أجنادين، برج رقم (2)</span>
                            <h1>:المؤهلات العلمية <i class="fas fa-circle "></i></h1>
                            <span class=""><strong>درجة الليسانس  :</strong>  جامعة الأزهر بالقاهرة، كلية أصول الدين</span>
                            <br>
                            <span class=""><strong>درجة الماجستير  :</strong>   جامعة الأزهر بالقاهرة، كلية أصول الدين سنة 1989م</span>
                            <br>
                            <span class=""><strong>درجة الدكتوراة  : </strong> جامعة الأزهر بالقاهرة، كلية أصول الدين سنة 1992م</span>
                            <br>
                            <span class=""><strong>أستاذ مشارك  :</strong> جامعة الأزهر – غزة، سنة الحصول عليها : 1998م</span>
                            <br>
                            <span class=""><strong>أستاذ دكتور:</strong>  جامعة الأزهر – غزة، سنة الحصول عليها : 2006م</span>
                            <br>
                            <span class="">   <strong> الرسالة بعنوان : </strong>  القسم الثاني من مسند جابر بن عبدالله الأنصاري من كتاب المسند للإمام أحمد بن حنبل، ضبط أحاديثه وتخريجها وبيان درجة كل منها مع التعليق عليها عند الحاجة بتقدير امتياز</span>
                            <h1>:الخبرات الإدارية والأكاديمية <i class="fas fa-circle "></i></h1>
                            <span>نائب الرئيس للشئون الإدارية والمالية لجامعة الأزهر- غزة بتاريخ 03/05/2010م</span>
                            <br>
                            <span>عميد شؤون الطلبة بجامعة الأزهر – غزة من 6/10/1996م حتى 15/11/2003م</span>
                            <br>
                            <span> رئيس قسم الدراسات الإسلامية بجامعة الأزهر – غزة من 16/3/1993 حتى 11/4/2000م</span>
                            <br>
                            <span> أستاذ دكتور في الحديث وعلومه بجامعة الأزهر – غزة من 17/9/2006م</span>
                            <br>
                            <span>أستاذ دكتور:  جامعة 2006مالأزهر – غزة، سنة الحصول عليهأستاذ مشارك في الحديث وعلومه بجامعة الأزهر – غزة من 1/11/1998م حتى 17/9/2006م </span>
                            <br>
                            <span>  أستاذ مساعد في الحديث وعلومه بجامعة الأزهر – غزة من 17/1/1992م حتى 31/10/1998</span>
                            <br>
                            <span>  رئيس لجنة الضبط بجامعة الأزهر – غزة من 26/10/1997م حتى 15/11/2003م</span>
                            <br>
                            <span> عضو لجنة العاملين بجامعة الأزهر – غزة سنة 1996م</span>
                            <br>
                            <span> عضو مؤسس لكلية الدعوة الإسلامية بوزارة الأوقاف والشؤون الدينية (متطوع)</span>
                            <br>
                            <span> رئيس مجلس كلية الدعوة الإسلامية التابعة لوزارة الأوقاف والشؤون الدينية (متطوع</span>
                            <br>
                            <span> محاضر بكلية الدعوة التابعة لوزارة الأوقاف والشؤون الدينية (غير متفرغ)</span>
                            <br>
                            <span>محاضر بجامعة القدس المفتوحة من 1994 – 1996م (غير متفرغ)</span>
                            <br>
                            <span>عضو لجنة مسابقة بوزارة الأوقاف والشؤون الدينية عن جائزة الرئيس عرفات للدراسات الإسلامية</span>
                            <br>
                            <span>عضو المجلس الرئاسي لإدارة جامعة الأزهر لأكثر من فترة رئاسية</span>
                            <br>
                            <span> عميد شؤون الطلبة بجامعة الأزهر – غزة من 25/2/2006م وحتى تاريخ 19/7/2008م</span>
                            <br>
                            <span>رئيس لجنة الضبط بجامعة الأزهر – غزة من 7/3/2006م وحتى تاريخ 19/7/2008م</span>
                            <br>
                            <span> رئيس اللجنة المشرفة على انتخابات مجلسي اتحاد الطلبة بجامعة الأزهر – غزة من 28/10/2006م وحتى 19/7/2008م</span>
                            <h1>:النشاط العلمي والثقافي والاجتماعي <i class="fas fa-circle "></i></h1>
                            <span class="">عضو الهيئة الإسلامية العليا للقدس منذ سنة 1997م</span>
                            <br>
                            <span class="">مستشار في مجلة المنبر الإسلامية التي تصدرها وزارة الأوقاف والشؤون الدينية – غزة منذ سنة 1997م</span>
                            <br>
                            <span class="">خطيب بوزارة الأوقاف والشؤون الدينية – غزة منذ سنة 1994م</span>
                            <br>
                            <span class="">مقال شهري بمجلة المنبر الإسلامي التي تصدرها وزارة الأوقاف والشؤون الدينية – غزة منذ سنة 1997م</span>
                            <br>
                            <span class="">الإشراف على بعض رسائل الماجستير في جامعة الأزهر، ومناقشة بعض رسائل الدكتوراة والماجستير في الجامعات الفلسطينية</span>
                            <h1>البحوث والمؤلفات العلمية <i class="fas fa-circle "></i></h1>
                            <span class="">قبسات من الحديث النبوي (1993م)</span>
                            <br>
                            <span class="">من الهدي النبوي (1995م)</span>
                            <br>
                            <span class="">خطيب بوزارة الأوقاف والشؤون الدينية – غزة منذ سنة 1994م</span>
                            <br>
                            <span class="">كتاب قطوف من السنة المطهرة (2003م)</span>
                            <br>
                            <span class="">كتاب في رحاب السنة (1997م)</span>
                            <h1> البحوث التي تقدمت بها للحصول على درجة أستاذ مشارك <i class="fas fa-circle "></i></h1>
                            <span class="">بحث بعنوان : دراسة مؤصلة في تخريج الحديث النبوي الشريف (1998م)</span>
                            <br>
                            <span class="">بحث بعنوان : دراسة حول مفهوم الجرح والتعديل (1998م)</span>
                            <br>
                            <span class="">كتاب : "في رحاب السنة" (1997م) </span>
                            <h1> البحوث المقدمة على درجة أستاذ دكتور <i class="fas fa-circle "></i></h1>
                            <span class="">الإنصاف في بيان ما ترجح من الخلاف حول حجية خبر الآحاد (2004م)</span>
                            <br>
                            <span class="">دراسة تطبيقية على الصحيحين لبعض الرواة الذين قال فيهم أبو حاتم الرازي : ليس بالقوي (2004م)</span>
                            <br>
                            <span class="">أثر نسيان الراوي على مروياته الحديثية (2004م)</span>
                            <br>
                            <span class="">أحاديث الردة والشبهات عليها (2005م)</span>
                            <br>
                            <span class="">أسباب اختلاف الروايات وأثرها على الحديث النبوي (2006م)</span>
                            <br>
                            <span>كتاب قطوف من السنة المطهرة (2003م)</span>
                            <h1> المؤتمرات العلمية <i class="fas fa-circle "></i></h1>
                            <span class="">مشاركة ببحث بعنوان : "المرأة ومكانتها في الإسلام"، تحت إشراف وزارة الأوقاف 1998م</span>
                            <br>
                            <span class="">مشاركة ببحث بعنوان : "القدس مدينة السلام"، في مؤتمر نصرة القدس المنعقد تحت إشراف وزارة الأوقاف سنة 2000م، ورئيس جلسة في هذا المؤتمر</span>
                            <br>
                            <span class="">عضو لجنة تحضيرية لمؤتمر الوعظ والإرشاد المنعقد تحت إشراف وزارة الأوقاف وذلك في الفترة من 27-28 صفر الموافق 7 أبريل 2005م، ورئيس جلسة في هذا المؤتمر</span>
                            <br>
                            <span class="">مشاركة ببحث : "صور التسامح في الإسلام" مركز رام الله لدراسات حقوق الإنسان، 2009م</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop


