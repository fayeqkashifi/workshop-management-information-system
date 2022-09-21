<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?=base_url();?>DashboardController">صفحه اصـــلی</a>

                </li>
                <li>
                    <!-- <span>Dashboard</span> -->
                </li>
            </ul>

        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat blue">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="<?=$CountUsers?>"></span>
                        </div>
                        <div class="desc" style=" font-weight:bolder;"> تعداد کارمندان </div>
                    </div>
                    <a class="more" href="javascript:;"style=" font-weight:bolder;font-size:15px"> بیشتر بدانید
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat red">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="<?=$CountGenerators?>"></span></div>
                        <div class="desc"  style=" font-weight:bolder;">تعداد جنراتور  </div>
                    </div>
                    <a class="more" href="javascript:;"style=" font-weight:bolder;font-size:15px">  بیشتر بدانید
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat green">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="<?=$CountPhotos?>"></span>
                        </div>
                        <div class="desc" style=" font-weight:bolder;">تعداد عکس های ذخیره در سیستم</div>
                    </div>
                    <a class="more" href="javascript:;" style=" font-weight:bolder;font-size:15px">  بیشتر بدانید
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat purple">
                    <div class="visual">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number"> 
                            <span data-counter="counterup" data-value="<?=$CountProduct?>"></span></div>
                        <div class="desc" style=" font-weight:bolder;">تعداد پرزه جات ذخیره در سیستم</div>
                    </div>
                    <a class="more" href="javascript:;" style=" font-weight:bolder;font-size:15px">  بیشتر بدانید
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- END DASHBOARD STATS 1-->

        <div class="portfolio-content portfolio-2">
           
            <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
               
                <?php foreach ($data as $key) {?>

                <div class="cbp-item print motion">
                    <a href="<?=base_url();?><?=$key->g_s_photo?>" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?=base_url();?><?=$key->g_s_photo?>" alt=""> </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cbp-l-caption-title"><?=$key->g_r_generator_location?></div>
                                    <div class="cbp-l-caption-desc"><?=$key->g_s_generator_capacity?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                  <?php }?>
               
            </div>
            <div id="js-loadMore-mosaic" class="cbp-l-loadMore-button">
                <a href="../assets/global/plugins/cubeportfolio/ajax/loadMore2.html" class="cbp-l-loadMore-link btn grey-mint btn-outline" rel="nofollow">
                    <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                    <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                    <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                </a>
            </div>
        </div>


    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
