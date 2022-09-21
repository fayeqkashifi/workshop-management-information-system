<!-- BEGIN CONTENT -->
            <div class="page-content-wrapper" >
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="<?=base_url();?>DashboardController">صفحه اصـــلی</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>وسایل</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="invoice-content-2 ">


                        <div class="row invoice-head">
                          <?php foreach ($data as $row) {?>
                            <div class="col-md-3 col-xs-6">
                                <div class="invoice-logo">
                                    <img  src="<?=base_url();?><?=$row->g_s_photo?>" class="img-responsive" alt="" />

                                </div>
                            </div>
                            <div class="col-md-9 col-xs-6">
                                <div class="company-address" >
                                  <div class="row invoice-cust-add">
                                      <div class="col-xs-2">
                                          <h1 class="invoice-title uppercase" style="color:black">موقعیت</h1>
                                          <h1 class="invoice-desc"><?=$row->g_r_generator_location ?></h1>
                                      </div>
                                      <div class="col-xs-2">
                                          <h1 class="invoice-title uppercase" style="color:black;">ظرفیت</h1>
                                          <h1 class="invoice-desc"><?=$row->g_s_generator_capacity ?></h1>
                                      </div>
                                      <div class="col-xs-2">
                                          <h1 class="invoice-title uppercase" style="color:black;">مدل انجن</h1>
                                          <h1 class="invoice-desc "><?=$row->g_r_engine_model ?></h1>
                                      </div>
                                      <div class="col-xs-2">
                                          <h1 class="invoice-title uppercase" style="color:black;">نوعیت جنراتور</h1>
                                          <h1 class="invoice-desc"><?=$row->g_s_generator_type ?></h1>
                                      </div>
                                      <div class="col-xs-2">
                                          <h1 class="invoice-title uppercase" style="color:black;">سریال نمبر</h1>
                                          <h1 class="invoice-desc ">  <?=$row->g_r_serial_number ?></h1>
                                      </div>
                                      <div class="col-xs-2">
                                          <h1 class="invoice-title uppercase" style="color:black;">کد ثبت</h1>
                                          <h1 class="invoice-desc">  <?=$row->g_r_code ?></h1>
                                      </div>
                                  </div>

                            </div>
                          </div>
                          <?php } ?>
                        </div>

                        <div class="portlet light portlet-fit portlet-form ">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-bubble font-green"></i>
                                                                <span class="caption-subject font-green bold uppercase">اضــافه کردن وسایل جتراتورها</span>
                                                            </div>

                                                        </div>

                                                        <div class="portlet-body " >

                                                          <form class="form-inline margin-bottom-40" method="post"id="form_sample_2" data-parsley-validate action="<?=base_url()?>GeneratorDetailRegisterController/insertForm" enctype="multipart/form-data" role="form">



                                                  <div class="form-group">
                                                <label  class="control-label col-md-4">اسم جنس
                                                          <span class="required"> * </span>
                                                      </label>
                                                      <div class="col-md-4">
                                                      <div class=" input-icon  ">
                                                          <i class="fa"></i>
                                                          <select class="form-control" required="required " name="select">

                                                              <option value=""....</option>
                                                              <option value="Category 1">Category 1</option>
                                                              <option value="Category 2">Category 2</option>
                                                              <option value="Category 3">Category 5</option>
                                                              <option value="Category 4">Category 4</option>
                                                          </select>
                                                            </div>
                                                      </div>
                                                        </div>
                                                        <div class="form-group ">
                                                          <label class="control-label col-md-4" >تفصیلات
                                                                      <span class="required"> * </span>
                                                                  </label>
                                                                  <div class="col-md-4">
                                                                      <div class="input-icon ">
                                                                          <i class="fa"></i>
                                                                          <input type="text" required="required" placeholder="لطفا تفصیلات خود را وارد نمایید."  class="form-control" name="g_r_code" /> </div>

                                                                  </div>
                                                        </div>
                                                        <div class="form-group ">
                                                          <label class="control-label col-md-3">تعداد
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <div class="input-icon ">
                                                                            <i class="fa"></i>
                                                                            <input type="number" required="required" placeholder="لطفا تعداد را وارد نمایید."   class="form-control" name="g_r_generator_location" /> </div>

                                                                    </div>
                                                        </div>



                                                      <label class="control-label col-md-3 ">وضعیت پرزه<span class="required"> * </span></label>


                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="radio53" name="radio2" class="md-radiobtn">
                                                            <label for="radio53" style="font-weight: bolder;"></>
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> سالم </label>
                                                        </div>
                                                        <div class="md-radio has-warning">
                                                            <input type="radio" id="radio54" name="radio2" class="md-radiobtn" checked>
                                                            <label for="radio54" style="font-weight: bolder; color:black">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box" ></span> خراب </label>
                                                        </div>
                                                        <div class="md-radio has-error">
                                                            <input type="radio" id="radio55" name="radio2" class="md-radiobtn">
                                                            <label for="radio55" style="font-weight: bolder; color:black">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> ندارد </label>
                                                        </div>
                                                        <div class="md-radio has-info">
                                                            <input type="radio" id="radio56" name="radio2" class="md-radiobtn">
                                                            <label for="radio56" style="font-weight: bolder; color:black">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> ندارد </label>
                                                        </div>
                                                    </div>


                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                              <!-- <button type="button" class="btn default">بازگشت</button> -->
                                                                <button type="submit" class="btn green">ذخیره</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                          </form>


                                                        </div>
                                                    </div>



                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->




<script src="<?=base_url()?>/assets/js/jquery-1.11.0.min.js"></script>
