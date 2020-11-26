<!-- Mirrored from rajeshdoot.com/niwax-demos/html/digital-marketing-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 15:41:09 GMT -->

<head>
    <?php
    include('partials/head.php');
    ?>
</head>

<body class="active-dark">
    <!--Start Preloader -->
    <?php
    include('partials/loader.php');
    ?>
    <!--End Preloader -->
    <!--Start Header -->
    <header class="nav-bg-b main-header navfix fixed-top menu-dark header-pr">
        <div class="container-fluid m-pad">
            <div class="menu-header">
                <div class="dsk-logo"><a class="nav-brand" href="index.php">
                        <img src="images/logo_white.png" alt="Icrispi" class="mega-white-logo" />
                        <img src="images/logo_dark.png" alt="Icrispi" class="mega-darks-logo" />
                    </a></div>
                    <?php include('partials/navigation.php'); ?>
                <div class="mobile-menu2">
                    <ul class="mob-nav2">
                        <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1" data-toggle="modal" data-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
                        <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!--Mobile Menu-->
            <?php include('partials/mobile-navigation.php'); ?>
        </div>
    </header>
    <!--Mobile contact-->
    <div class="popup-modal1">
        <div class="modal" id="menu-popup">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="common-heading">
                            <h4 class="mt0 mb0">Write a Message</h4>
                        </div>
                        <button type="button" class="closes" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-block fdgn2 mt10 mb10">
                            <form action="#" method="post" name="feedback-form">
                                <div class="fieldsets row">
                                    <div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
                                    <div class="col-md-12"><input type="email" placeholder="Email Address" name="email"></div>
                                    <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone"></div>
                                    <div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
                                    <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                                </div>
                                <div class="fieldsets mt20 pb20">
                                    <button type="submit" name="submit" class="lnk btn-main bg-btn" data-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Mobile contact-->
    <!--End Header -->