<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>DGO Tour</title>
    <?php
    include('style.php')
    ?>


</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <?php
    include('header.php')
    ?>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Banner
    ================================================== -->
    <div class="main-search-container" data-background-image="images/main-search-background-01.jpg">
        <div class="main-search-inner">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>مرحبا,</h4>
                        <h2>ابدأ رحلتك الآن</h2>
<!--                        <div class="switch">-->
<!--                            <input name="switch" id="one" type="radio" checked/>-->
<!--                            <label for="one" class="switch__label">رحلة خاصة-->
<!--                            </label>-->
<!--                            <input name="switch" id="two" type="radio"/>-->
<!--                            <label for="two" class="switch__label">رحلة مجموعة-->
<!--                            </label>-->
<!---->
<!--                            <div class="switch__indicator im im-icon-Car-2"></div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="main-search-input">


                            <div class="main-search-input-item location" style="flex-grow: 0.9">
                                <div id="autocomplete-container">
                                    <input id="autocomplete-input" type="text" placeholder="الجهة المقصودة" >
                                </div>
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                            </div>
                            <div class="main-search-input-item" style="flex-grow: 0.8">
                                <select data-placeholder="All Categories" class="chosen-select" >
                                    <option>عدد الركاب</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <div class="main-search-input-item" style="flex-grow: 0.8">
                                <select data-placeholder="All Categories" class="chosen-select" >
                                    <option>نوع السيارة
                                    </option>
                                    <option> سيارة VIP </option>
                                    <option> باص عائلي</option>
                                    <option> سيدان</option>
                                    <option> فان عائلي</option>
                                </select>
                            </div>
                            <div class="main-search-input-item">
                                <input id="date1" type="text" placeholder="تاريخ المغادرة - تاريخ الوصول" value=""/>
                                <input id="date2" type="text" style="visibility:hidden; " placeholder="تاريخ المغادرة - تاريخ الوصول" value=""/>
                            </div>
                            <div class="main-search-input-item">
                                <div class="radio">
                                    <input id="radio-1" name="radio" type="radio" checked>
                                    <label for="radio-1" class="radio-label">رحلة خاصة</label>
                                </div>

                                <div class="radio">
                                    <input id="radio-2" name="radio" type="radio">
                                    <label  for="radio-2" class="radio-label">رحلة مجموعة</label>
                                </div>
                            </div>
                        </div>
                        <div class="search-button margin-top-25">
                            <button class="button">
                                بحث
                            </button>
                            <button class="button Driver-btn">
                                اقرب سائق لي
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <section class="advantages padding-bottom-75 " style="background-color: #f9f9f9">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="headline centered margin-top-80">
                        مميزاتنا
                        <span class="margin-top-25">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                    </span>
                    </h2>
                </div>
            </div>

            <div class="row icons-container">
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 with-line">
                        <i class="">
                            <img src="images/hand-shake.svg" alt="">
                        </i>
                        <h3>الثقة</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا </p>
                    </div>
                </div>

                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2">
                        <i class="">
                            <img src="images/presentation.svg" alt="">
                        </i>
                        <h3>تنوع في العروض
                        </h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا </p>

                    </div>
                </div>

                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 with-line">
                        <i class="">
                            <img src="images/discount.svg" alt="">
                        </i>
                        <h3>تنافس في الاسعار</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا </p>

                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6 ">
                    <div class="icon-box-2 ">
                        <i class="">
                            <img src="images/room-key.svg" alt="">
                        </i>
                        <h3>سهولة الوصول</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا </p>

                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 with-line">
                        <i class="">
                            <img src="images/ticket.svg" alt="">
                        </i>
                        <h3>الحجز بالأيام والساعات</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا </p>

                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2">
                        <i class="">
                            <img src="images/security.svg" alt="">
                        </i>
                        <h3>الأمان "التتبع"</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا </p>

                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 with-line">
                        <i>
                            <img src="images/destination.svg" alt="">
                        </i>
                        <h3>معرفة البرنامج اليومي (خط سير الرحلة السياحية)</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا </p>

                    </div>
                </div>
                <!-- Stage -->
                <div class="col-md-6">
                    <div class="icon-box-2 ">
                        <i>
                            <img src="images/questions.svg" alt="">
                        </i>
                        <h3>الصور والمعلومات والتقييم.</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا </p>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="fullwidth  padding-top-75 padding-bottom-70" >
        <!-- Info Section -->
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="headline centered">
                        ماذا يقول عملاؤنا
                        <span class="margin-top-25">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد</span>
                    </h3>
                </div>
            </div>

        </div>
        <!-- Info Section / End -->

        <!-- Categories Carousel -->
        <div class="fullwidth-carousel-container margin-top-20">
            <div class="testimonial-carousel testimonials">

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-01.jpg" alt="">
                        <h4>مريم احمد <span>مالكة معرض ملابس</span></h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-02.jpg" alt="">
                        <h4>خالد عبدالله <span>مالك متجر الملابس</span></h4>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-review">
                    <div class="testimonial-box">
                        <div class="testimonial">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <img src="images/happy-client-03.jpg" alt="">
                        <h4>عبدالله الخالدي <span>صاحب مطعم</span></h4>
                    </div>
                </div>

            </div>
        </div>
        <!-- Categories Carousel / End -->

    </section>

    <section class="fullwidth padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="headline centered">
                        ميزات الاشتراك معنا
                    </h3>
                </div>
            </div>
        </div>
        <div class="featured-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/money.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0"> نضمن حقوقك المالية بطريقة تناسبك
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-xs-6">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/car1.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0">  نقدم لك عدد كبير من الناس الذين يرغبون في السفر والجولة و نصع لك كل الاحتمالات</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-30">
                    <div class="col-md-3 col-xs-6">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/calendar.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0">نسعى لتوفير جولات طوال ايام السنة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-xs-6">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/approve-invoice.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0"> نوفر خدمة الحجوزات بالأيام والساعات
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-30">
                    <div class="col-md-3 col-xs-6">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/segment-path.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0">سهولة الوصول للسائح الخليجي (على وجه الخصوص)

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-xs-6">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/present.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0"> الحصول على عروض وهدايا سنوية مقايل جودة الخدمة

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-top-30">
                    <div class="col-md-3 col-xs-6">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/responsive.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0">من خلال موقعنا يمكنك الحصول على صفحة خاصة بك تقدم من خلالها ما تريد من برامج الصور والعروض التقديمية

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-xs-6">
                        <div class="media mb-3">
                            <img class="align-self-start mr-3 img-fluid" src="images/tourist.svg" alt="money">
                            <div class="media-body">
                                <h3>Title</h3>
                                <p class="mt-0">وجود عدد كبير من السائحين الباحثين عن جولات سياحية سواء كانو افراد او مجموعات
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax -->
    <div class="parallax"
         data-background="images/gulf.jpg"
         data-color="#36383e"
         data-color-opacity="0.6"
         data-img-width="800"
         data-img-height="505">

        <!-- Infobox -->
        <div class="text-content white-font">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <h2>قم بتبسيط اعمالك</h2>
                        <p>نحن وكلاء خدمة كاملة ، وكلاء محليون يعرفون كيف يعثرون على الناس ويجمعون كل منهم معًا. نحن نستخدم
                            أدوات عبر الإنترنت مع إمكانية بحث لا تضاهى لتجعلك أكثر ذكاءً وسرعة.</p>
                        <a href="Registration-Leader.php" class="button margin-top-25">سجل الأن</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Infobox / End -->

    </div>
    <!-- Parallax / End -->

    <!-- Footer
    ================================================== -->
    <?php
    include 'footer.php'
    ?>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


</div>
<?php
include "javascript.php";
?>
</body>

</html>