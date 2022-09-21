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
                            <span>ویرایش وسایل جنراتور</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
<div class="portlet light portlet-fit portlet-form ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">ویرایش وسایل جنراتور</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <?php foreach ($data as $row) { ?>
                                        <form method="post"id="form_sample_2" data-parsley-validate action="<?=base_url()?>GeneratorRegisterProblemController/editGeneratorRegisterProblemForm" enctype="multipart/form-data"  class="form-horizontal">
                                          <div class="form-group">
                                        <label  class="control-label col-md-4">اسم جنس
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-4">
                                              <div class=" input-icon  right">
                                                  <i class="fa"></i>
                                                  <select class="form-control" required="required "  name="g_f_r_porduct_name">

                                                    <option value="<?=$row->g_f_r_porduct_name?>"><?=$row->g_f_r_porduct_name?></option>
                                                    <?php foreach ($products as $key) { ?>
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
                                                   <div class="form-group">
                                              <label  class="control-label col-md-4">واحد
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-4">
                                              <div class=" input-icon  right">
                                                  <i class="fa"></i>
                                                  <select class="form-control" required="required "  name="g_f_r_unit">
                                                       <option value="<?=$row->g_f_r_unit?>"><?=$row->g_f_r_unit?></option>
                                                    
                                                      <option value="عدد"> عدد</option>
                                                      <option value="پایه"> پایه</option>
                                                      <option value="حلقه"> حلقه</option>
                                                      <option value="لیتر"> لیتر</option>
                                                      <option value="ست"> ست</option>
                                                      <option value="کیلوگرام"> کیلوگرام </option>
                                                   
                                                  </select>
                                                    </div>
                                                    </div>
                                                </div>
                                                <label class="control-label col-md-4 ">وضعیت پرزه<span class="required"> * </span></label>
                                              <div class="md-radio-inline">
                                                  <div class="md-radio">
                                                      <input type="radio" id="radio53" name="g_f_r_status" class="md-radiobtn"  value="1" <?php if ($row->g_f_r_status==1) {
                                                          echo 'checked="checked"';
                                                      }?>>
                                                      <label for="radio53" style="font-weight: bolder;"></>
                                                          <span></span>
                                                          <span class="check"></span>
                                                        <span class="box" ></span> ترمیم </label>
                                                  </div>
                                                  <div class="md-radio has-warning">
                                                      <input type="radio" id="radio54" name="g_f_r_status" class="md-radiobtn"  value="2" if <?php if($row->g_f_r_status==2) {
                                                          echo 'checked="checked"';
                                                      }?>  >
                                                      <label for="radio54" style="font-weight: bolder; color:black">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box" ></span> جدید </label>
                                                  </div>
                                                  <div class="md-radio has-error">
                                                      <input type="radio" id="radio55" name="g_f_r_status" class="md-radiobtn"  value="3" <?php if($row->g_f_r_status==3) {
                                                          echo 'checked="checked"';
                                                      }?>>
                                                      <label for="radio55" style="font-weight: bolder; color:black">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> کمبود از ساحه </label>
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
