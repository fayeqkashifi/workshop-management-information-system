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
                                <i class="fa fa-angle-left"></i>
                            </li>
                            <li>
                                <span>جزئیات جنراتور</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="invoice-content-2 ">
                      <!-- div class="row">
                          <div class="col-xs-12">
                              <a class="btn btn-lg green-haze hidden-print uppercase print-btn" href="<?=base_url();?>/GeneratorDetailController">بازگشت</a>
                          </div>
                      </div> -->

                        <div class="row invoice-head">
                          <?php foreach ($data as $row) {?>
                            <div class="col-md-3 col-xs-12">
                                <div class="invoice-logo">
                                    <img  src="<?=base_url();?><?=$row->g_s_photo?>" class="img-responsive" alt="" />

                                </div>
                            </div>
                            <div class="col-md-9 col-xs-12">
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
                      
                           <!-- BEGIN EXAMPLE TABLE PORTLET-->
                           <div class="portlet light portlet-fit ">
                             <div class="portlet-title">
                                 <div class="caption">
                                     <i class="icon-settings font-red"></i>
                                     <span class="caption-subject font-red sbold uppercase">لیست وسایل جنراتور</span>
                                 </div>
                                 <div class="actions">
                                     <div class="btn-group btn-group-devided" data-toggle="buttons">
                                      
                                         <a  id="btn_responsive"  class="btn btn-transparent red btn-outline btn-circle btn-sm active"  data-toggle="modal"   href="#responsive">
                                            اضــافه</a>
                                        
                                           <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                          <input type="radio" name="options" class="toggle" id="option2">جزئیات</label>
                                     </div>
                                 </div>
                             </div>
                               <div class="portlet-body">
                                 <div class="table-toolbar">
                                    <br>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="btn-group">

                                              </div>
                                          </div>
                                          <div class="col-md-6">

                                          </div>
                                      </div>
                                  </div>
                                    <table  class="table table-striped table-bordered table-hover table-header-fixed dataTable" id="sample_2" role="grid" aria-describedby="sample_2_info" >
                                    <thead>
                                             <tr>
                                                 <th style="text-align:center"> شماره </th>
                                                 <th style="text-align:center">اسم جنس</th>
                                                 <th style="text-align:center">تفصیلات </th>
                                                 <th style="text-align:center"> تعداد</th>
                                                 <th style="text-align:center">وضعیت پرزه</th>
                                                 <th width='25%' style="text-align:center">عملکرد ها</th>
                                             </tr>
                                     </thead>
                                        <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($internal as $row) { ?>
                                                <tr>
                                                    <td style="font-weight: bold;text-align:center"><?php echo $i?></td>

                                                    <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_porduct_name?></td>

                                                    <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_remark?></td>
                                                    <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_quantity?></td>
                                                    <td style="font-weight: bold;text-align:center">
                                                    <?php if ($row->g_f_r_status=='1') { ?>
                                                    <span class="label label-sm label-primary">ترمیم </span>
                                                  <?php }elseif ($row->g_f_r_status=='2') {?>
                                                    <span class="label label-sm label-success">جدید</span>
                                                  <?php }elseif ($row->g_f_r_status=='3') {?>
                                                    <span class="label label-sm label-danger">کمبود از ساحه</span>
                                                    <?php } ?>
                                                    </td>
                                                    <td class="nowrap" style="font-weight: bold;text-align:center" style="width: 80px;">
                                                      <a href="<?=base_url()?>GeneratorRegisterProblemController/editGeneratorRegisterProblem?id=<?=$row->g_f_r_id?>&g_r_id=<?=$row->g_r_id?>" class="btn btn-outline btn-circle btn-sm purple">
                                                        <i class="fa fa-edit"></i> ویرایش </a>
                                                        <a class="btn btn-outline btn-circle dark btn-sm red"  href="<?=base_url()?>GeneratorRegisterProblemController/removeGeneratorRegisterProblem?id=<?=$row->g_f_r_id?>&g_r_id=<?=$row->g_r_id?>" data-toggle="confirmation" id="bs_confirmation_demo_1"><i class="fa fa-trash"> </i> حذف</a>


                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php }?>
                                         </tbody>
                                    </table>
                                   </div>
                               </div>
                     
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                      
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light portlet-fit ">
                          <div class="portlet-title">
                              <div class="caption">
                                  <i class="icon-settings font-red"></i>
                                  <span class="caption-subject font-red sbold uppercase">لیست وسایل سالم جنراتور</span>
                              </div>
                              <div class="actions">
                                  <div class="btn-group btn-group-devided" data-toggle="buttons">
                                      <a class="btn btn-transparent red btn-outline btn-circle btn-sm active" data-toggle="modal"   href="#responsiveTesting">
                                         اضــافه</a>
                                      <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                          <input type="radio" name="options" class="toggle" id="option2">جزئیات</label>
                                  </div>
                              </div>
                          </div>
                            <div class="portlet-body">

                                  <div class="table-toolbar">
                                    <br>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="btn-group">

                                              </div>
                                          </div>
                                          <div class="col-md-6">

                                          </div>
                                      </div>
                                  </div>


                                 <table class="table table-striped table-bordered table-hover" id="sample_1">
                                          <thead>
                                          <tr>
                                              <th style="text-align:center"> شماره </th>
                                              <th style="text-align:center">اسم جنس</th>
                                              <th style="text-align:center">تفصیلات </th>
                                              <th style="text-align:center"> تعداد</th>
                                              <th style="text-align:center">وضعیت پرزه</th>
                                              <th width='25%' style="text-align:center">عملکرد ها</th>
                                          </tr>
                                  </thead>
                                     <tbody>
                                             <?php $i = 1; ?>
                                             <?php foreach ($testing as $row) { ?>
                                             <tr>
                                                 <td style="font-weight: bold;text-align:center"><?php echo $i?></td>

                                                 <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_porduct_name?></td>

                                                 <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_remark?></td>
                                                 <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_quantity?>  </td>
                                                 <td style="font-weight: bold;text-align:center">
                                                 <?php if ($row->g_f_r_status=='1') { ?>
                                                 <span class="label label-sm label-primary">سالم</span>
                                                 <?php } ?>
                                                 </td>
                                                 <td class="nowrap" style="font-weight: bold;text-align:center" style="width: 80px;">
                                                   <a href="<?=base_url()?>GeneratorTestingController/editGeneratorTestingView?id=<?=$row->g_f_r_id?>&g_r_id=<?=$row->g_r_id?>" class="btn btn-outline btn-circle btn-sm purple">
                                                     <i class="fa fa-edit"></i> ویرایش </a>
                                                     <a class="btn btn-outline btn-circle dark btn-sm red"  href="<?=base_url()?>GeneratorTestingController/removeTesting?id=<?=$row->g_f_r_id?>&g_r_id=<?=$row->g_r_id?>" data-toggle="confirmation" id="bs_confirmation_demo_1"><i class="fa fa-trash"> </i> حذف</a>
                                                 </td>
                                             </tr>
                                             <?php $i++; ?>
                                             <?php }?>
                                      </tbody>
                                 </table>
                                </div>
                            </div>
                     </div>
                    </div>



                           <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                          <h4 class="modal-title">اضــافه کردن وسایل جنراتور</h4>
                                      </div>
                                      <div class="modal-body">
                                        <!-- BEGIN FORM-->
                                        <form method="post" id="form_sample_2" data-parsley-validate action="<?=base_url()?>GeneratorRegisterProblemController/insertForm" enctype="multipart/form-data"  class="form-horizontal">
                                          <div class="form-group">
                                              <label  class="control-label col-md-4">اسم جنس
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-4">
                                              <div class=" input-icon  right">
                                                  <i class="fa"></i>
                                                  <select class="form-control" required="required "  name="g_f_r_porduct_name">
                                                    <option value="">انتخاب کنید.</option>
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
                                                              <div class="input-icon right ">
                                                                  <i class="fa"></i>
                                                                  <textarea type="text" required="required" placeholder="لطفا تفصیلات خود را وارد نمایید."  class="form-control" name="g_f_r_remark" /></textarea>
                                                                </div>

                                                          </div>
                                                </div>
                                                <div class="form-group ">
                                                  <label class="control-label col-md-4">تعداد
                                                      <span class="required"> * </span>
                                                  </label>
                                                  <div class="col-md-4">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="number" required="required" placeholder="لطفا تعداد را وارد نمایید."   class="form-control" name="g_f_r_quantity" /> </div>

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
                                                       <option value="">انتخاب کنید.</option>
                                                    
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
                                                      <input type="radio" id="radio53" name="g_f_r_status" class="md-radiobtn" value="1">
                                                      <label for="radio53" style="font-weight: bolder;"></>
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> ترمیم </label>
                                                  </div>
                                                  <div class="md-radio has-warning">
                                                      <input type="radio" id="radio54" name="g_f_r_status" class="md-radiobtn" value="2"  checked>
                                                      <label for="radio54" style="font-weight: bolder; color:black">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box" ></span> جدید </label>
                                                  </div>
                                                  <div class="md-radio has-error">
                                                      <input type="radio" id="radio55" name="g_f_r_status" class="md-radiobtn" value="3">
                                                      <label for="radio55" style="font-weight: bolder; color:black">
                                                          <span></span>
                                                          <span class="check"></span>
                                                          <span class="box"></span> کمبود پرزه از ساحه </label>
                                                  </div>
                                              </div>
                                              <input type="hidden" name="g_r_id" value="<?=$row->g_r_id?>">
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-8 col-md-4">
                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">بازگشت</button>
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

                          <div id="responsiveTesting" class="modal fade" tabindex="-1" aria-hidden="true">
                             <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                      <h4 class="modal-title">اضــافه کردن وسایل جنراتو</h4>
                                  </div>
                                  <div class="modal-body">
                                    <!-- BEGIN FORM-->
                                    <form method="post"id="form_sample_2" data-parsley-validate action="<?=base_url()?>GeneratorTestingController/insertForm" enctype="multipart/form-data"  class="form-horizontal">
                                      <div class="form-group">
                                    <label  class="control-label col-md-4">اسم جنس
                                              <span class="required"> * </span>
                                          </label>
                                          <div class="col-md-4">
                                          <div class=" input-icon  right">
                                              <i class="fa"></i>
                                              <select class="form-control" required="required " name="g_f_r_porduct_name">
                                                <option value="">انتخاب کنید.</option>
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
                                                          <div class="input-icon right ">
                                                              <i class="fa"></i>
                                                              <textarea type="text" name="g_f_r_remark" required="required" placeholder="لطفا تفصیلات خود را وارد نمایید."  class="form-control"  >سالم است.</textarea>
                                                              </div>

                                                      </div>
                                            </div>
                                            <div class="form-group ">
                                        <label class="control-label col-md-4">تعداد
                                                      <span class="required"> * </span>
                                                  </label>
                                                  <div class="col-md-4">
                                                      <div class="input-icon right ">
                                                          <i class="fa"></i>
                                                          <input type="number" placeholder="لطفا تعداد را وارد نمایید."   class="form-control" name="g_f_r_quantity" /> </div>

                                                  </div>
                                      </div>
                                      <label class="control-label col-md-4 ">وضعیت پرزه<span class="required"> * </span></label>
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="radio67" name="g_f_r_state" checked="checked" value="1" class="md-radiobtn">
                                            <label for="radio67" style="font-weight: bolder;"></>
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> سالم </label>
                                        </div>


                                    </div>
                                    <input type="hidden" name="g_r_id" value="<?=$row->g_r_id?>">
                                  <div class="form-actions">
                                      <div class="row">
                                          <div class="col-md-offset-8 col-md-4">
                                           <button type="button" class="btn dark btn-outline" data-dismiss="modal">بازگشت</button>
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



                  </div>
         <!-- END CONTENT BODY -->
                 </div>

     <!-- END CONTENT -->
   </div>
<!-- END CONTENT BODY -->
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
