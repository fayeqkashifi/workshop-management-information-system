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
                            <span>ویرایش ثبیت عوارض</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
<div class="portlet light portlet-fit portlet-form ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">ویرایش ثبیت عوارض</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <?php foreach ($data as $row) { ?>
                                        <form method="post"id="form_sample_2" data-parsley-validate action="<?=base_url()?>GeneratorStabilizationProblemController/editGeneratorStabilizationProblemForm" enctype="multipart/form-data"  class="form-horizontal">
                                          <div class="form-group">
                                        <label  class="control-label col-md-4">اسم جنس
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-4">
                                              <div class=" input-icon  right">
                                                  <i class="fa"></i>
                                                  <select class="form-control" required="required "  name="g_f_r_porduct_name">

                                                    <option value="<?=$row->g_f_r_porduct_name?>"><?=$row->g_f_r_porduct_name?></option>
                                                    <?php foreach ($internal as $key) { ?>
                                                      <option value="<?=$key->product_name?>"><?=$key->product_name?></option>
                                                    <?php } ?>
                                                  </select>
                                                    </div>
                                              </div>
                                                </div>
                                                <div class="form-group ">
                                                  <label class="control-label col-md-4" >تفصیلات
                                                              <span class="required"> * </span>
                                                          </label>
                                                          <div class="col-md-4">
                                                              <div class="input-icon right">
                                                  <i class="fa"></i>
                                                  <textarea type="text" required="required" placeholder="لطفا تفصیلات خود را وارد نمایید." value=""  class="form-control" name="g_f_r_remark" ><?=$row->g_f_r_remark?></textarea> </div>

                                                          </div>
                                                </div>
                                                <div class="form-group ">
                                                  <label class="control-label col-md-4">تعداد
                                                      <span class="required"> * </span>
                                                  </label>
                                                  <div class="col-md-4">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="number" required="required" placeholder="لطفا تعداد را وارد نمایید."  value="<?=$row->g_f_r_quantity?>" class="form-control" name="g_f_r_quantity" /> </div>

                                                  </div>
                                                </div>
                                                <label class="control-label col-md-4 ">وضعیت پرزه<span class="required"> * </span></label>
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="radio57" name="g_f_r_status" onclick="hide()" value="1" class="md-radiobtn">
                                                        <label for="radio57" style="font-weight: bolder;"></>
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> سالم </label>
                                                    </div>

                                                    <div class="md-radio has-warning">
                                                        <input type="radio"  id="radio58" name="g_f_r_status" value="2" onclick="show()" class="md-radiobtn" checked>
                                                        <label for="radio58" style="font-weight: bolder; color:black">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box" ></span> خراب </label>
                                                    </div>
                                                    <div id="radio_btn_0" class="md-radio has-error">
                                                        <input type="radio"  id="radio59" checked="checked" name="g_f_r_solving_prediction" value="1" class="md-radiobtn">
                                                        <label for="radio59" style="font-weight: bolder; color:black">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> ترمیم </label>
                                                    </div>
                                                    <div id="radio_btn_1" class="md-radio has-info ">
                                                        <input type="radio"  id="radio60" name="g_f_r_solving_prediction" value="2" class="md-radiobtn">
                                                        <label for="radio60" style="font-weight: bolder; color:black">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> تبدیل </label>
                                                    </div>
                                                </div>
                                              <input type="hidden" name="g_r_id" value="<?=$row->g_r_id?>">
                                             <input type="hidden" name="g_f_r_id" value="<?=$row->g_f_r_id?>">
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-8 col-md-4">
                                                      <a type="button" href="<?=base_url();?>GeneratorRegisterProblemController?id=<?=$row->g_r_id?>"class="btn dark btn-outline">بازگشت</a>
                                                        <button type="submit" class="btn green">ذخیره</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                    <?php } ?>
                                </div>
                            </div>
                          </div>
                      </div>

                      <script type="text/javascript">
                      function hide(){
                      $('#radio_btn_0').hide();
                      $('#radio_btn_1').hide();
                      }
                      function show(){
                      $('#radio_btn_0').show();
                      $('#radio_btn_1').show();
                      }
                      </script>
