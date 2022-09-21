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
                            <i class="fa fa-angle-left"></i>
                        </li>
                        <li>
                            <span>اضــافه کردن جنراتور</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->


<div class="portlet light portlet-fit portlet-form ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">اضــافه کردن جنـــراتـورها</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form method="post"id="form_sample_2" data-parsley-validate action="<?=base_url()?>GeneratorDetailRegisterController/insertForm" enctype="multipart/form-data"  class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group  margin-top-20">
                                                <label class="control-label col-md-3" style="font-weight:bolder">تاریخ

                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                          <input type="text" class="form-control pdate" id="g_r_date" placeholder="لطفا تاریخ را وارد نمایید."  name="g_r_date"  value="">
                                         <script type="text/javascript">
                                                  var objCal2 = new AMIB.persianCalendar('g_r_date', {
                                                          initialDate: '1398/2/2',
                                                      }
                                                      );
                                               </script>
                                                       
                                                       </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3"  style="font-weight:bolder">کد ثبت
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا کد ثبت را وارد نمایید." class="form-control" name="g_r_code" /> </div>

                                                </div>
                                            </div>
                                            <div class="form-group  margin-top-20" >
                                                <label class="control-label col-md-3"  style="font-weight:bolder">موقعیت
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا موقعیت جنراتور را وارد نمایید."   class="form-control" name="g_r_generator_location" /> </div>

                                                </div>
                                            </div>
                                            <div class="form-group  margin-top-20">
                                                <label class="control-label col-md-3"  style="font-weight:bolder">نوعیت جنراتور
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text"required="required" placeholder="لطفا نوعیت جنراتور را وارد کنید."    class="form-control" name="g_s_generator_type" /> </div>

                                                </div>
                                            </div>
                                            <div class="form-group  margin-top-20">
                                                <label class="control-label col-md-3"  style="font-weight:bolder">سریال نمبر
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text"required="required" placeholder="لطفا سریال نمبر جنراتور را وارد کنید."    class="form-control" name="g_r_serial_number" /> </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3"  style="font-weight:bolder">ظرفیت
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا ظرفیت جنراتور را وارد کنید." class="form-control" name="g_s_generator_capacity" /> </div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3"  style="font-weight:bolder">انجن مدل
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا انجن مودل را وارد نمایید" class="form-control" name="g_r_engine_model" /> </div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3"  style="font-weight:bolder">عکس
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> انتخاب  </span>
                                                                <span class="fileinput-exists">تغییر  </span>
                                                                <input type="file" placeholder="لطفا کد ثبت را وارد نمایید."name="g_s_photo"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف</a>
                                                        </div>
                                                    </div>

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
                                    <!-- END FORM-->
                                </div>
                            </div>
                          </div>
                      </div>
