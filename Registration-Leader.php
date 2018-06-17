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
    <?php
    include('header.php')
    ?>
    <div class="clearfix"></div>
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>تسجيل القائد السياحي</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">الرئيسية</a></li>
                            <li>تسجيل القائد السياحي</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <div style="display: none">
        <label for="stepTransition">
            Step transition <input type="checkbox" id="stepTransition" name="stepTransition" value="11" checked/>
        </label>
        <br/>
        <label for="showButtons">
            Show buttons <input type="checkbox" id="showButtons" name="showButtons" value="111" checked/>
        </label>
        <br/>
        <label for="showStepNum">
            Show stepNum <input type="checkbox" id="showStepNum" name="showStepNum" value="123" checked/>
        </label>
    </div>
    <div class="  wizard-section">
        <div class="container">
            <div class="tsf-wizard tsf-wizard-1 ">
                <div class="row">
                    <!-- BEGIN NAV STEP-->
                    <div class="tsf-nav-step col-lg-3 col-md-4">
                        <!-- BEGIN STEP INDICATOR-->
                        <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
                            <li class="current" data-target="step-1">
                                <a href="#0">
                                    <span class="number">1</span>
                                    <span class="desc">
                                    <label>المعلومات الأساسية</label>
                                </span>
                                </a>
                            </li>
                            <li data-target="step-2">
                                <a href="#0">
                                    <span class="number">2</span>
                                    <span class="desc">
                                    <label>تفاصيل العضوية</label>
                                </span>
                                </a>
                            </li>
                            <li data-target="step-3">
                                <a href="#0">
                                <span class="number">
                                    3
                                </span>
                                    <span class="desc">
                                    <label>الملفات المطلوبة</label>
                                </span>
                                </a>
                            </li>
                        </ul>
                        <!-- END STEP INDICATOR--->
                    </div>
                    <!-- END NAV STEP-->
                    <!-- BEGIN STEP CONTAINER -->

                    <div class="tsf-container col-lg-9 col-md-8">
                        <!-- BEGIN CONTENT-->
                        <form class="tsf-content">

                            <!--<form class="tsf-form">-->
                            <!-- BEGIN STEP 1-->
                            <div class="tsf-step step-1 active">
                                <fieldset>
                                    <legend>يرجى ملء معلوماتك الشخصية</legend>
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!--                                                    <label for="name">Name</label>-->
                                                    <input type="text" class="form-control required" id="Name"
                                                           name="name" placeholder="الأسم">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!--                                                    <label for="s_email">Email</label>-->
                                                    <input type="email" class="form-control required" id="s_email"
                                                           name="email" placeholder="بريد الكتروني">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!--                                                    <label for="Phone">Phone Number</label>-->
                                                    <input type="text" class="form-control required"
                                                           data-parsley-type="digits" id="Phone" name="Phone"
                                                           placeholder="رقم هاتف">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class='file-input'>
                                                    <input type='file' >
                                                    <span class='button'>Choose</span>
                                                    <span class='label' data-js-label>صورة شخصية
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control crs-country" data-region-id="one"
                                                            required id="sel1">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <select required class="form-control" id="one">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="password" name="pw" id="pw"
                                                           data-parsley-minlength="8"
                                                           data-parsley-required="true" placeholder="كلمة المرور">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="password" name="pw-verify"
                                                           data-parsley-equalto="#pw"
                                                           data-parsley-required="true" placeholder="اعادة كلمة المرور">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </fieldset>
                            </div>
                            <!-- END STEP 1-->
                            <!-- BEGIN STEP 2-->
                            <div class="tsf-step step-2">
                                <fieldset>
                                    <legend>Business Member Details</legend>
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select data-placeholder="All Categories" required class="chosen-select" >
                                                    <option value="">نوع العضوية</option>
                                                    <option value="1"> سائق سياحي مستقل</option>
                                                    <option value="2"> شركة سياحية</option>
                                                    <option value="3"> مرشد سياحي</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select data-placeholder="All Categories" required class="chosen-select" >
                                                    <option>نوع المركبة
                                                    </option>
                                                    <option> سيارة VIP </option>
                                                    <option> باص عائلي</option>
                                                    <option> سيدان</option>
                                                    <option> فان عائلي</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!--                                                    <label for="name">Name</label>-->
                                                    <input type="text" class="form-control " required id="Manufacture"
                                                           name="name" placeholder="سنة صنع السيارة">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </fieldset>
                            </div>
                            <!-- END STEP 2-->
                            <!-- BEGIN STEP 3-->
                            <div class=" tsf-step step-3 ">
                                <fieldset>
                                    <legend>The Required Files</legend>
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class='file-input'>
                                                    <input type='file' required>
                                                    <span class='button'>Choose</span>
                                                    <span class='label' data-js-label>رخصة السيارة
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class='file-input'>
                                                    <input type='file' required>
                                                    <span class='button'>Choose</span>
                                                    <span class='label' data-js-label>رخصة العمل السياحي
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class='file-input'>
                                                    <input type='file' required>
                                                    <span class='button'>Choose</span>
                                                    <span class='label' data-js-label>تأمين السيارة
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class='file-input'>
                                                    <input type='file' required>
                                                    <span class='button'>Choose</span>
                                                    <span class='label' data-js-label>سجل السيارة
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="form-row form-row-wide ">
                                                <label for="condition3" class="condition-label margin-bottom-0">
                                                    <input type="checkbox" name="condition3" id="condition3" data-parsley-required-message="يجب ان تقبل الشروط "  data-parsley-required="true" >
                                                    أؤكد بموجب ذلك أن لدي أحد مؤهلات المرشد السياحي التالي / ترخيص / شهادة / تدريب.
                                                </label>
                                            </p>
                                            <p class="form-row form-row-wide ">
                                                <label for="condition4" class="condition-label">
                                                    <input type="checkbox" name="condition4" id="condition4" data-parsley-required-message="يجب ان تقبل الشروط "  data-parsley-required="true" >
                                                    أوافق على تقديم خصم 10 ٪ لحجزي الأول والثاني.
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <!-- END STEP 3-->
                            <!--</form>-->
                        </form>
                        <!-- END CONTENT-->
                        <!-- BEGIN CONTROLS-->
                        <div class="tsf-controls ">
                            <!-- BEGIN PREV BUTTTON-->
                            <button type="button" data-type="prev" class="btn button btn-left tsf-wizard-btn">
                                <i class="fa fa-chevron-left"></i> السابق
                            </button>
                            <!-- END PREV BUTTTON-->
                            <!-- BEGIN NEXT BUTTTON-->
                            <button type="button" data-type="next" class="btn button btn-right tsf-wizard-btn">
                                <i class="fa fa-chevron-right"></i>التالي
                            </button>
                            <!-- END NEXT BUTTTON-->
                            <!-- BEGIN FINISH BUTTTON-->
                            <button type="submit" data-type="finish" class="btn button btn-right tsf-wizard-btn">
                                انهاء
                            </button>
                            <!-- END FINISH BUTTTON-->
                        </div>
                        <!-- END CONTROLS-->
                    </div>
                    <!-- END STEP CONTAINER -->


                </div>
                <!-- END STEP FORM WIZARD -->
                <div class="clearfix"></div>

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
<?php
include "javascript.php"
?>
</body>

</html>