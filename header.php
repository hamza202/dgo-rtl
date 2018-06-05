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
                    <a href="#sign-in-dialog-Leader" class="sign-in popup-with-zoom-anim button">
                        كن قائد <i class="sl sl-icon-login"></i> </a>
                    <span class="or">OR</span>
                    <a href="#sign-in-dialog-Tourist" class="sign-in popup-with-zoom-anim button">
                        كن سائح <i class="sl sl-icon-login"></i> </a>
                </div>
            </div>
            <!-- Right Side Content / End -->

            <!-- Leader Sign In Popup -->
            <div id="sign-in-dialog-Leader" class=" sign-in-dialog zoom-anim-dialog mfp-hide">

                <div class="small-dialog-header">
                    <h3>تسجيل الدخول</h3>
                </div>

                <!--Tabs -->
                <div class="sign-in-form style-1">

                    <ul class="tabs-nav">
                        <li class=""><a href="#tab1">تسجيل الدخول</a></li>
                        <li><a href="#tab2">التسجيل</a></li>
                    </ul>

                    <div class="tabs-container alt">

                        <!-- Login -->
                        <div class="tab-content" id="tab1" style="display: none;">
                            <form id="LogingForm" method="post" class="login">

                                <p class="form-row form-row-wide">
                                    <label for="Email1">بريد الكتروني
                                        <i class="im im-icon-Mail"></i>
                                        <input type="email" class="input-text" name="Email1" id="Email1"
                                               value=""/>
                                    </label>

                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="password">كلمة المرور
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password" id="password"/>
                                    </label>

                                    <span class="lost_password">
										<a href="forget-pass.php">هل فقدت كلمة المرور؟</a>
									</span>
                                </p>
                                <ul class="social-icons color rounded pull-right">
                                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                                </ul>
                                <div class="form-row clearfix">
                                    <input type="submit" class="button border margin-top-5" name="login"
                                           value="دخول"/>
                                    <div class="checkboxes margin-top-10">
                                        <input id="remember-me" type="checkbox" name="check">
                                        <label for="remember-me">تذكرني</label>
                                    </div>
                                </div>
                                <br>


                            </form>
                        </div>

                        <!-- Register -->
                        <div class="tab-content" id="tab2" style="display: none;">

                            <form id="signupForm" method="post" class="register">

                                <p class="form-row form-row-wide">
                                    <label for="username2">الأسم:
                                        <i class="im im-icon-Male"></i>
                                        <input type="text" class="input-text" name="username2" id="username2"
                                               value=""/>
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="email2">البريد الالكتروني
                                        <i class="im im-icon-Mail"></i>
                                        <input type="text" class="input-text" name="email" id="email2" value=""/>
                                    </label>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="Mobile">رقم هاتف:
                                        <i class="im im-icon-Phone-Wifi"></i>
                                        <input type="text" class="input-text" name="Mobile" id="Mobile"
                                               value=""/>
                                    </label>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="password1">كلمة المرور:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password1" id="password1"/>
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="confirm_password1">اعادة كلمة المرور:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="confirm_password1"
                                               id="confirm_password1"/>
                                    </label>
                                </p>

                                <input type="submit" class="button border fw margin-top-10" name="register"
                                       value="تسجيل"/>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Sign In Popup / End -->
            <!-- Leader Sign In Popup -->
            <div id="sign-in-dialog-Tourist" class=" sign-in-dialog zoom-anim-dialog mfp-hide">

                <div class="small-dialog-header">
                    <h3>تسجيل الدخول</h3>
                </div>

                <!--Tabs -->
                <div class="sign-in-form style-1">

                    <ul class="tabs-nav">
                        <li class=""><a href="#tab1">تسجيل الدخول</a></li>
                        <li><a href="#tab2">التسجيل</a></li>
                    </ul>

                    <div class="tabs-container alt">

                        <!-- Login -->
                        <div class="tab-content" id="tab1" style="display: none;">
                            <form id="LogingForm" method="post" class="login">

                                <p class="form-row form-row-wide">
                                    <label for="Email1">بريد الكتروني
                                        <i class="im im-icon-Mail"></i>
                                        <input type="email" class="input-text" name="Email1" id="Email1"
                                               value=""/>
                                    </label>

                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="password">كلمة المرور
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password" id="password"/>
                                    </label>

                                    <span class="lost_password">
										<a href="forget-pass.php">هل فقدت كلمة المرور؟</a>
									</span>
                                </p>
                                <ul class="social-icons color rounded pull-right">
                                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                                </ul>
                                <div class="form-row clearfix">
                                    <input type="submit" class="button border margin-top-5" name="login"
                                           value="دخول"/>
                                    <div class="checkboxes margin-top-10">
                                        <input id="remember-me" type="checkbox" name="check">
                                        <label for="remember-me">تذكرني</label>
                                    </div>
                                </div>
                                <br>


                            </form>
                        </div>

                        <!-- Register -->
                        <div class="tab-content" id="tab2" style="display: none;">

                            <form id="signupForm" method="post" class="register">

                                <p class="form-row form-row-wide">
                                    <label for="username2">الأسم:
                                        <i class="im im-icon-Male"></i>
                                        <input type="text" class="input-text" name="username2" id="username2"
                                               value=""/>
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="email2">البريد الالكتروني
                                        <i class="im im-icon-Mail"></i>
                                        <input type="text" class="input-text" name="email" id="email2" value=""/>
                                    </label>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="Mobile">رقم هاتف:
                                        <i class="im im-icon-Phone-Wifi"></i>
                                        <input type="text" class="input-text" name="Mobile" id="Mobile"
                                               value=""/>
                                    </label>
                                </p>
                                <p class="form-row form-row-wide">
                                    <label for="password1">كلمة المرور:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password1" id="password1"/>
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="confirm_password1">اعادة كلمة المرور:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="confirm_password1"
                                               id="confirm_password1"/>
                                    </label>
                                </p>

                                <input type="submit" class="button border fw margin-top-10" name="register"
                                       value="تسجيل"/>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Sign In Popup / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>