<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-end/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-end/assets/css/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-end/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-end/assets/css/responsive.css">
    <title>SassCo.</title>
</head>

<body>
    <header id="header-desc">
        <div class="container">

            <nav class="navbar navbar-expand-lg pt-3 pb-4  ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars navbar-icon"></span>
                </button>

                <?php  //print("<pre>".print_r($menus,true)."</pre>"); 

                // foreach ($menus as $valus){
                //     // echo $valus->menuName;
                //    foreach($valus->submenu as $value){
                //     //    echo $value->menuName;
                //    }
                // }
                ?>
                <a class="navbar-brand  my-3 pb-2" href="#"><img src="<?php echo base_url('/back-end/uploads/') . $logo; ?>" alt="logo"></a>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0 mt-2 ">
                        <?php foreach ($menus as $valus) { ?>
                            <?php //print("<pre>".print_r($valus,true)."</pre>"); exit; 
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link <?php if ($valus->submenu) {echo "dropdown-toggle";} else {echo "";} ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo  $valus->menuName; ?>
                                </a>
                                <?php if (!empty($valus->submenu)) { ?>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach ($valus->submenu as $value) { ?>
                                            <li><a class="dropdown-item" href="#"><?php echo $value->menuName; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                <?php  } ?>

                            </li>
                        <?php } ?>
                    </ul>
                    <a href="<?php //echo  $valu['btn_link']; 
                                ?>"><button type="button" class="btn btn-color-nav  "><?php echo  $btn_txt; ?>
                            <span class="grater "><i class="ml-3 <?php echo  $btn_icon; ?> "></i></span></button></a>
                </div>

            </nav>
            <div id="about-desc pb-5">
                <?php foreach ($headcardDynamic as $valu) {   ?>
                    <div class="row  pb-5 mb-5 ">
                        <div class="col-lg-5 col-md-7 mt-5 pt-4">
                            <div class="side-text mt-5 pt-1">
                                <h1 class="text-white "><?php echo  $valu->title_head; ?></h1>
                                <h6 class="text-white "><?php echo  $valu->desc_head; ?></h6>
                                <a href="<?php echo  $valu->btn_link; ?>"><button type="button" class="btn btn-color btn-lg "><?php echo  $valu->btn_txt_head; ?></button></a>
                                <p class="text-white pt-3"><?php echo  $valu->card_head; ?></p>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-7 mt-5 about-desc-img">
                            <div class="about-img-cont">
                                <img src="<?php echo base_url('/back-end/uploads/') . $valu->img_head; ?>" class="" alt="Responsive image">
                            </div>
                        </div>
                    </div>
            </div>
        <?php } ?>
        </div>
    </header>

    <main>
        <div class="container">

            <!-- ####################    Features Area  ########## -->
            <section id="features-desc">
                <div class="row justify-content-center  ">
                    <div class="col-lg-8 col-md-10  text-center">
                        <div class="cmn-heading pt-5 mt-5 pb-4">
                            <?php foreach ($featuresDynamic as $valu) {   ?>
                                <h3><?php echo  $valu->features_title; ?></h3>
                                <p><?php echo  $valu->features_desc; ?></p>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="row p-0 mb-5 ">
                        <?php foreach ($featuresDscDynamic as $valu) {   ?>
                            <div class="col-lg-4  mt-5  d-flex justify-content-center ">

                                <div class="card pb-4  " style="width: 23.125rem;">
                                    <div class="card-body text-center">
                                        <div class="features-items ">
                                            <h3 class="card-title pt-3 pb-2 mt-1"><?php echo  $valu->featuresDsc_title; ?></h3>
                                            <p class="card-text p-3 text-center"><?php echo  $valu->featuresDsc_desc; ?></p>
                                            <i class="<?php echo  $valu->icon; ?> fa-4x icon-style rounded-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
            </section>
            <!-- #################### Interface Area ###############    -->

            <section id="interface-desc" class="pb-5">
                <div class="row d-flex justify-content-between mb-5 pt-1">
                    <?php foreach ($userInterfaceDynamic as $valu) {   ?>
                        <div class="col-lg-6 col-md-6 pt-4 mt-5 interface-img-rel">
                            <div class="interface-img pb-4">
                                <img src="<?php echo base_url('/back-end/uploads/') . $valu->userInterface_img; ?>" class="" alt="Responsive image">
                            </div>
                        </div>
                        <div class="col-lg-5   mt-5">
                            <div class="interface-txt pb-4">
                                <h3><?php echo  $valu->userInterface_title; ?></h3>
                                <p class="pt-4"><?php echo  $valu->userInterface_desc1; ?></p>
                                <p class="text2 pt-2">
                                    <i>
                                        <?php echo  $valu->userInterface_desc2; ?>
                                    </i>
                                </p>
                                <p class="pb-3 pt-2">
                                    <?php echo  $valu->userInterface_desc3; ?>
                                </p>
                                <a href="<?php echo  $valu->userInterface_btnLink; ?>"><button type="button" class="btn btn-color btn-lg mt-4"><?php echo  $valu->userInterface_btn; ?></button></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
        <!-- ####################### Discuse Area ###################  -->

        <section id="discuse-desc">


            <div class="container">
                <div class="discuse-cont-all pt-2 ">
                    <div class="row justify-content-between pt-5 mt-1  ">
                        <?php foreach ($discussDynamic as $valu) {   ?>
                            <div class="card  mt-5 discuse-hov" style="width: 13.125rem;">
                                <div class="card-body">
                                    <div class="discuse-txt text-center">
                                        <h4 class="mt-3 py-1 icon-Size "><i class="<?php echo  $valu->discuse_icon; ?>"></i></h4>
                                        <h5 class="py-2 text-white"><?php echo  $valu->discuse_iconTxt; ?></h5>
                                        <h3 class="text-white pt-1 pb-2"><?php echo  $valu->discuse_num; ?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5  pb-5 ">
                    <?php foreach ($discuse as $valu) { ?>
                    <div class="col-lg-7 col-md-8 ">
                        <div class="discuss pt-4 ">
                            <h1 class="text-white"><?php echo  $valu->discuse_title; ?></h1>
                        </div>
                    </div>
                    <div class=" col-lg-5 col-md-4 d-flex justify-content-end  my-5 pb-4">
                        <a href="<?php echo  $valu->discuse_link; ?>"><button type="button" class="btn btn-color btn-lg "><?php echo  $valu->discuse_btn; ?>
                                <span class="grater"><i class="<?php echo  $valu->discuse_btnicon; ?>"></i></span></button></a>
                    </div>
                    <?php  }?>
                </div>
            </div>

        </section>
        <!-- ################## Members Area #####################  -->
        <section id="members-desc">
            <div class="container">
                <div class="row justify-content-center  ">
                    <?php foreach ($membersDynamic as $valu) {   ?>
                        <div class="col-lg-8 col-md-10 text-center">
                            <div class="cmn-heading pt-5 mt-5 pb-3">
                                <h3><?php echo  $valu['members_title']; ?></h3>
                                <p><?php echo  $valu['members_desc']; ?> </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row mb-5 mt-2 pb-2">
                    <?php foreach ($membersDscDynamic as $valu) {   ?>
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="members-info mt-5  ">
                                <img src="<?php echo base_url('/back-end/uploads/') . $valu['membersDsc_img']; ?>" class="img-fluid" alt="Responsive image">
                                <h4 class="mt-3 pt-3"><?php echo  $valu['membersDsc_name']; ?></h4>
                                <p class="pt-2  <?php echo  $valu['membersDsc_aboutColor']; ?>"><?php echo  $valu['membersDsc_about']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!-- <div class="row justify-content-center ">
                    <div class="col-lg-10  mt-5 pt-1">
                        <div class="embed-responsive embed-responsive-1by1">
                            <iframe width="915" height="457"  src="https://www.youtube.com/embed/B7z7_LOCvrs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                    </div>
                </div> -->

                <div class="row  justify-content-center  text-center px-2">
                    <div class="col-lg-10  d-flex justify-content-center pt-5">
                        <?php foreach ($videoDynamic as $valu) {   ?>
                            <div class="card video_card_border" style="width: 57.312rem;">
                                <div class="card-body video-cmn ">
                                    <h3 class="text-white mt-5 pb-4 "><?php echo  $valu['video_title']; ?></h3>
                                    <a href="<?php echo  $valu['video_link']; ?>"><i class="icon-style1 rounded-circle text-white fa-2x  <?php echo  $valu['video_icon']; ?> "></i></a>
                                </div>
                            </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>

        <!-- ###################### Choose Pricing Plan #######################-->

        <section id="choose-plan-desc">
            <div class="container">

                <div class="row justify-content-center choose-plan-head ">
                    <?php foreach ($chooseplanDynamic as $valu) {   ?>
                        <div class="col-lg-8 col-md-10  text-center">
                            <div class="cmn-heading pt-5 mt-5 pb-3">
                                <h3><?php echo  $valu['choosePlan_title']; ?></h3>
                                <p><?php echo  $valu['choosePlan_desc']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </section>

        <!-- ######################## Product Area #################### -->
        <section id="product-desc">
            <div class="container">
                <div class="row plan-mar">
                    <?php foreach ($planitemsDynamic as $valu) {   ?>
                        <div class="col-lg-4 mt-5  d-flex justify-content-center">
                            <div class="card plan-img pb-4 pt-3" style="width: 23.125rem;">
                                <div class="card-body text-center p-0  ">
                                    <div class="plan-cont d-flex justify-content-between  pl-3">
                                        <div class="plan-logo icon-style2 rounded-circle mt-4">
                                            <img src="<?php echo base_url('/back-end/uploads/') . $valu['planItems_img']; ?>" class="img-fluid pt-4" alt="Responsive image">
                                        </div>
                                        <div class="plan-title mt-5">
                                            <h4 class="rounded-circle-left"><?php echo  $valu['planItems_title']; ?></h4>
                                            <h3 class="pt-4 "><?php echo  $valu['planItems_amount']; ?></h3>
                                        </div>
                                    </div>
                                    <div class="plan-txt-btn pt-3 ">
                                        <p class="m-0"><?php echo  $valu['planItems_desc']; ?></p>
                                        <p class="m-0"><?php echo  $valu['planItems_desc1']; ?></p>
                                        <p class="m-0"><?php echo  $valu['planItems_desc2']; ?></p>
                                        <p class="pb-4"><?php echo  $valu['planItems_desc3']; ?></p>
                                        <a href="<?php echo  $valu['planItems_btnLink']; ?>"><button type="button" class="btn btn-color1 btn-lg mb-3"><?php echo  $valu['planItems_btnTxt']; ?>
                                                <span class="grater"><i class="<?php echo  $valu['planItems_btnIcon']; ?>"></i></span></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>

                <div class="row justify-content-center prodect-mar ">
                    <?php foreach ($productsDynamic as $valu) {   ?>
                        <div class="col-lg-8 col-md-10 text-center">
                            <div class="cmn-heading pt-5 my-5 pb-3">
                                <h3><?php echo  $valu['products_title']; ?></h3>
                                <p><?php echo  $valu['products_desc']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="slider mb-5 mt-3">
                    <div class=" product-slider owl-carousel owl-theme Bg ">
                        <div class="row  justify-content-around  my-5">
                            <?php foreach ($productsSliderDynamic as $valu) {   ?>
                                <div class="col-lg-5 col-md-5 ">
                                    <div class="design-Develop-txt ">
                                        <p><?php echo  $valu['productsSlider_desc']; ?></p>
                                        <div class="design-develop-img d-flex ">
                                            <img src="<?php echo base_url('/back-end/uploads/') . $valu['productsSlider_img']; ?>" class="img-fluid" alt="Responsive image">
                                            <div class="about-developer  ">
                                                <h3><?php echo  $valu['productsSlider_name']; ?></h3>
                                                <h6 class="<?php echo  $valu['productsslider_color']; ?>"><?php echo  $valu['productsSlider_Dev']; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="row  justify-content-around  my-5">
                            <?php foreach ($productsSliderDynamic as $valu) {   ?>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="design-Develop-txt ">
                                        <p><?php echo  $valu['productsSlider_desc']; ?></p>
                                        <div class="design-develop-img d-flex ">
                                            <img src="<?php echo base_url('/back-end/uploads/') . $valu['productsSlider_img']; ?>" class="img-fluid" alt="Responsive image">
                                            <div class="about-developer  ">
                                                <h3><?php echo  $valu['productsSlider_name']; ?></h3>
                                                <h6 class="<?php echo  $valu['productsslider_color']; ?>"><?php echo  $valu['productsSlider_Dev']; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ################# Frequently Asked Question. ###############-->
        <section id="askedQuestion-desc">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-5    mt-5 pt-2 ">
                        <div class="asked-left ">
                            <h3 class="pb-4"><?php echo $askedQuestion_title; ?></h3>
                            <p class="pb-4 pt-1"><?php echo $askedQuestion_desc; ?></p>
                            <a href="<?php echo $askedQuestion_btnLink; ?>"><button type="button" class="btn btn-color btn-lg mb-3 mt-1"><?php echo $askedQuestion_btnTxt; ?>
                                </button></a>
                        </div>
                    </div>
                    <div class="col-lg-7  mt-5 pt-4">
                        <?php foreach ($askedQuestionDynamic as $valu) {   ?>
                            <?php //print("<pre>".print_r($valu,true)."</pre>"); exit; 
                            ?>

                            <div class="card text-white mb-3 border border-1">
                                <div class="card-header card-head-desc">
                                    <button class="btn text-white " type="button" data-bs-toggle="collapse" data-bs-target="#pass<?php echo  $valu['id']; ?>" aria-expanded="false" aria-controls="collapseExample">
                                        <?php echo  $valu['askedQuestion_col']; ?>
                                    </button>
                                </div>
                                <div class="collapse" id="pass<?php echo $valu['id']; ?>">
                                    <div class=" card-body body-desc">
                                        <?php echo  $valu['askedQuestion_colTxt']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


        <!-- ##################### customers Section ############  -->

        <section id="customers-desc">
            <div class="container">

                <h5 class="coustomer-clr text-center pb-4"><?php echo  $customers_text1; ?> <span><?php echo  $customers_text2; ?></span> <?php echo  $customers_text3; ?>
                </h5>
                <div class="customers-active owl-carousel  pt-1 pb-3">
                    <?php foreach ($customersDynamic as $valu) {   ?>

                        <div class="item"><img src="<?php echo base_url('/back-end/uploads/') . $valu['customers_img1']; ?>" alt=""></div>
                    <?php } ?>
                </div>
            </div>
        </section>


        <!-- ####################### Customer-news########### -->

        <section id="customer-news-desc" class="pb-5">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-8 col-md-10  text-center">
                        <?php foreach ($newsDynamic as $valu) {   ?>
                            <div class="cmn-heading pt-3 mt-5 pb-4">
                                <h3><?php echo  $valu['newsArea_title']; ?></h3>
                                <p><?php echo  $valu['newsArea_desc']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mt-4  pb-5 mb-2 ">
                    <?php foreach ($newsCardsDynamic as $valu) {   ?>
                        <div class="col-lg-3 col-md-6 d-block d-lg-flex mt-4  d-flex justify-content-center">
                            <div class="card  " style="width: 16.875rem; max-height: 356px;">
                                <div class=" text-center ">
                                    <img src="<?php echo base_url('/back-end/uploads/') . $valu['newsCards_img']; ?>" class="img-fluid" alt="">
                                </div>
                                <div class="card-body  card-news-txt">
                                    <h5 class="card-title mt-2 px-2">
                                        <?php echo  $valu['newsCards_title']; ?>
                                    </h5>
                                    <p class="card-text py-3 px-2"><?php echo  $valu['newsCards_date']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-lg-3 col-md-6 mt-4  ">
                        <?php foreach ($newsCardsColDynamic as $valu) {   ?>
                            <div class="card  mb-3 " style="max-width: 16.875rem;">
                                <div class="card-body card-news-txt">
                                    <h5 class="card-title mt-2 px-2">
                                        <?php echo  $valu['newsCardsCol_title']; ?>
                                    </h5>
                                    <p class="card-text py-3 px-2"><?php echo  $valu['newsCardsCol_date']; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <section id="question-desc">
            <div class="container">
                <div class="question-cont py-5">
                    <div class="row ">
                        <?php foreach ($questionFooterDynamic as $valu) {   ?>
                            <div class="col-lg-7 col-md-8 pt-1">
                                <h1 class=" text-white line-height-question"><?php echo  $valu['questionFooter_title']; ?></h1>
                            </div>
                            <div class="col-lg-5 col-md-4 d-flex justify-content-end pt-2">
                                <a href="<?php echo  $valu['questionFooter_link']; ?>"><button type="button" class="btn btn-color btn-lg mt-5"><?php echo  $valu['questionFooter_btnTxt']; ?>
                                        <span class="grater"><i class="<?php echo  $valu['questionFooter_icon']; ?>"></i></span></button></a>
                            </div>

                        <?php } ?>
                    </div>

                </div>
                <img src="./assets/img/hr.png" class="img-fluid pt-4 pb-5 mt-1" alt="">
                <div class="row pt-5 pb-4">
                    <div class="col-lg-3 col-md-6  col-sm-6 d-flex justify-content-center">
                        <div class="footer-sec1">
                            <img src="<?php echo base_url('/back-end/uploads/') . $addressFooter_logo; ?>" class="img-fluid pb-4 pt-1" alt="">
                            <div class="footer-text-cont  pt-3 mt-1">
                                <?php foreach ($addressFooterDynamic as $valu) {   ?>
                                    <p><?php echo  $valu['addressFooter_country']; ?> </p>
                                <?php } ?>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
                        <div class="footer-sec1 footer-space1">
                            <h3 class="pb-4"><?php echo  $Company_title; ?></h3>
                            <div class="footer-sec2-txt pt-1">
                                <ul>
                                    <?php foreach ($companyDynamic as $valu) {   ?>
                                        <a href="#">
                                            <li> >&nbsp; <?php echo  $valu['Company_text1']; ?></li>
                                        </a>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
                        <div class="footer-sec1 footer-space2">

                            <h3 class="pb-4"><?php echo  $services_title; ?></h3>
                            <div class="footer-sec2-txt pt-1">
                                <ul>
                                    <?php foreach ($servicesDynamic as $valu) {   ?>
                                        <a href="#">
                                            <li> >&nbsp; <?php echo  $valu['services_text1']; ?></li>
                                        </a>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
                        <div class="footer-sec1 footer-space3">

                            <h3 class="pb-4"><?php echo  $quickLink_title; ?></h3>
                            <div class="footer-sec2-txt pt-1">
                                <ul>
                                    <?php foreach ($quicklinkDynamic as $valu) {   ?>
                                        <a href="#">
                                            <li> >&nbsp; <?php echo  $valu['quickLink_text1']; ?></li>
                                        </a>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-border">
                <div class="container">
                    <div class="row py-2  mt-5">
                        <div class="col-lg-8 col-md-8 ">
                            <p class="pt-2 mt-1"><?php echo  $mediaFooter_text; ?> <span class="all_right_clr "><?php echo  $mediaFooter_textColor; ?></span>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 pt-2  ">
                            <div class="media-cont d-flex float-end">
                                <div class="media">
                                    <?php foreach ($mediafooterDynamic as $valu) {   ?>
                                        <i class="<?php echo  $valu['mediaFooter_icon1']; ?>"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="<?php echo base_url(); ?>front-end/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>front-end/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>front-end/assets/js/active.js"></script>
</body>

</html>