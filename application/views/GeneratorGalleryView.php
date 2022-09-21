



    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
          <div class="page-bar">
              <ul class="page-breadcrumb">
                  <li>
                      <i class="icon-home"></i>
                      <a href="index.html">صفحه اصلی</a>
                      <i class="fa fa-angle-left"></i>
                  </li>
                  <li>
                      <span>گالری عکـــس ها</span>
                  </li>
              </ul>

          </div>
            <!-- BEGIN PAGE HEADER-->

            <div class="portfolio-content portfolio-1">
                <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"><h4> تمام عکس ها</h4>  <div class="cbp-filter-counter"></div>
                    </div>
                            <a style="float:left"class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase" href="<?=base_url();?>GeneratorDetailController"> <i class="fa fa-reply"></i>بازگشت</a>

                </div>

                <div id="js-grid-juicy-projects" class="cbp">
                  <?php foreach ($data as $key){ ?>
                    <div class="cbp-item graphic">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?=base_url();?><?=$key->g_w_photo?>"> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <!-- <a href="../assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a> -->
                                        <a href="<?=base_url()?>GeneratorGalleryController/deletePhoto?id=<?=$key->g_w_p_id?>&g_r_id=<?=$_GET['id']?>&url='<?=$key->g_w_photo?>'" data-toggle="confirmation" id="bs_confirmation_demo_1" data-toggle="tooltip" data-original-title="حذف"  style="font-family:Calibri;font-size:20px" class="btn btn-danger">حذف</a>
                                        <a href="<?=base_url();?><?=$key->g_w_photo?>" class="cbp-lightbox cbp-l-caption-buttonRight btn green uppercase btn green uppercase" data-title="Dashboard<br>by Paul Flavius Nechita" style="font-family:Calibri;font-size:20px">نمایش بزرگتر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center"style="font-size:25px"><?=$key->g_w_p_comment?></div>
                        <!-- <div class="cbp-l-grid-projects-desc uppercase text-center uppercase text-center">Web Design / Graphic</div> -->
                    </div>

                    <?php } ?>

                </div>


            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
