<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Dgo</title>
    <?php
    include('style.php')
    ?>


</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.php"><img src="images/logo-2.png" alt=""></a>
                    </div>

                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                        </button>
                    </div>


                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <li><a href="index.php">الرئيسية</a></li>
                            <li><a href="#">رابط 1</a></li>
                            <li><a href="#">رابط 2</a></li>
                            <li><a href="#">رابط 3</a></li>
                            <li><a href="#">رابط 4</a></li>
                            <li><a href="#">اللغة</a>
                                <ul>
                                    <li><a href="#">Einglish</a></li>
                                    <li><a href="#">العربية</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->


                <!-- Right Side Content / End -->
                <div class="right-side">
                    <div class="header-widget">
                        <nav id="navigation" class="style-1">
                        <ul id="responsive" style="margin-top: 10px;">
                        <li><a href="javascript:void(0)" class="sign-in profile-drop-down "><i class="im im-icon-Administrator"></i> محمد</a>
                            <ul>
                                <li><a href="#"><i class="sl sl-icon-user-following"></i>بروفايل</a></li>
                                <li><a href="#"><i class="sl sl-icon-logout"></i> تسجيل الخروج</a></li>
                            </ul>
                        </li>
                        </ul>
                        </nav>
                    </div>
                </div>



            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Banner
    ================================================== -->
    <div class="clearfix"></div>
    <div class="  forget-pass" >
        <div class="main-search-inner">
            <div class="container">
                <form action="#">
                <div class="box-form">
                    <div class="left">
                        <div class="overlay">
                            <h1>مرحبا.</h1>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</p>
                            <span>
			<p>تسجيل الدخول بواسطة وسائل التواصل الأجتماعي</p>
			<ul class="social-icons color rounded ">
                                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                                </ul>
		</span>
                        </div>
                    </div>


                    <div class="right d-flex-self-center">
                        <div>
                        <h5>نسيت كلمة المرور؟</h5>
                        <p>يمكننا مساعدتك ، أدخل بريدك الإلكتروني وسوف نرسل رسالة إلى بريدك الإلكتروني لإعادة تعيين كلمة المرور الخاصة بك
                        </p>
                        <div class="inputs">
                            <input type="email" name="forget-email" id="forget-email" placeholder="البريد الالكتروني">
                            <br>
                        </div>
                        <button type="submit">ارسال</button>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Footer
    ================================================== -->
    <?php
    include 'footer.php'
    ?>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->
<?php
include "javascript.php";
?>
</body>

</html>