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
                            <span>لیست جنراتورها</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
                            <div class="portlet box red">
                               <div class="portlet-title">
                                   <div class="caption">
                                       <i class="fa fa-globe"></i><b> لیســـت جنـــراتـورها <?=$tital?> </b> </div>
                                   <div class="tools"> </div>
                               </div>
                               <div class="portlet-body">
                                   <table class="table table-striped table-bordered table-hover" id="sample_3">

                                       <thead>

                                           <tr>
                                               <th style="text-align:center;font-size:20px">شماره </th>
                                               <th style="text-align:center;font-size:20px">نوعیت</th>
                                               <th style="text-align:center;font-size:20px"> ظرفیت  </th>
                                               <th style="text-align:center;font-size:20px"> مودل انجن </th>
                                               <th style="text-align:center;font-size:20px"> موقعیت </th>
                                               <th style="text-align:center;font-size:20px"> سریال نمبر </th>
                                               <th style="text-align:center;font-size:20px"> کدثبت </th>
                                               <th style="text-align:center;font-size:20px;"> عملکرد ها </th>
                                               <th  style="text-align:center;font-size:20px">  حالت</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                         <?php $i = 1; ?>
                          <?php foreach ($data as $row) { ?>
                          <tr>
                              <td style="font-weight: bold; text-align:center"><?php echo $i?></td>
                              <td style="font-weight: bold;text-align:center"><?=$row->g_s_generator_type?></td>
                              <td style="font-weight: bold;text-align:center"><?=$row->g_s_generator_capacity?></td>
                              <td style="font-weight: bold;text-align:center"><?=$row->g_r_engine_model?></td>
                              <td style="font-weight: bold;text-align:center"><?=$row->g_r_generator_location?></td>
                              <td style="font-weight: bold;text-align:center"><?=$row->g_r_serial_number?></td>
                              <td style="font-weight: bold;text-align:center"><?=$row->g_r_code?></td>
                               <td class="nowrap" style="width:25% ;text-align:center">
                                <!-- <a class="" type="button" data-placement="top" data-toggle="tooltip" data-original-title="حذف" href="<?=base_url()?>GeneratorDetailRegisterController/removeGenerator?id=<?=$row->g_r_id?>"><i class="fa fa-trash"></i></a> -->
                                <a  class="btn btn-xs btn-warning  tooltips" type="button" data-placement="top" data-toggle="tooltip" data-original-title="اضافه نمودن جزئیات"  href="<?=base_url()?>GeneratorRegisterProblemController?id=<?=$row->g_r_id?>"  >
                                  <i class="fa fa-plus"></i></a>

                                <div class="btn-group dropup">
                                    <button class="btn btn-xs btn-primary tooltips"   data-original-title="تصاویر" data-toggle="dropdown">

                                        <i class="fa fa-image"></i>

                                    </button>


                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="btn btn-xs btn-success " style="font-size:18px;font-wieght:bolder;color:black;font-family:Calibri;" href="<?=base_url()?>GeneratorWorkFlowPhotosController?id=<?=$row->g_r_id?>"> اضافه کردن</a>
                                        </li>
                                        <li>
                                            <a  class="btn btn-xs btn-info" style="font-size:18px;font-wieght:bolder;color:black;font-family:Calibri;" href="<?=base_url()?>GeneratorGalleryController?id=<?=$row->g_r_id?>">نمایش</a>
                                        </li>

                                    </ul>
                                </div>
                                <a class="btn btn-xs btn-success tooltips " type="button" data-placement="top" data-toggle="tooltip" data-original-title="نمایش جزئیات" href="<?=base_url()?>GeneratorDetailInfoController?id=<?=$row->g_r_id?>"><i class="fa fa-eye"></i></a>
                                <?php if($_SESSION['zone_type'] != 'مدیر مرکز' AND $_SESSION['zone_type'] != 'مدیر قول اردو'){?>
                                  <a class="btn btn-xs btn-info tooltips" type="button" data-placement="top" data-toggle="tooltip" data-original-title="ویرایش" href="<?=base_url()?>GeneratorDetailRegisterController/editGenerator?id=<?=$row->g_r_id?>" ><i class="fa fa-pencil"></i></a>
                                <?php } ?>
                                  <?php if($_SESSION['type']!=2){?>
                                    <a class="btn btn-xs btn-danger tooltips " data-toggle="confirmation" id="bs_confirmation_demo_1" data-toggle="tooltip" data-original-title="حذف" href="<?=base_url()?>GeneratorDetailRegisterController/removeGenerator?id=<?=$row->g_r_id?>" ><i class="fa fa-trash"></i></a>
                                  <?php }?>

                              </td>


                              <td style="font-weight: bold;text-align:center" ><a href="<?=base_url();?>GeneratorController/completed?id=<?=$row->g_r_id?>" class="btn
                              btn-danger btn-xs" >تکمیل </a>
                                


                              </td>



                          </tr>
                          <!-- BEGIN DROPDOWNS PORTLET-->

                          </div>
                          <!-- END DROPDOWNS PORTLET-->
                          <?php $i++; ?>
                          <?php }?>
                                       </tbody>
                                   </table>
                               </div>
                           </div>

                         </div>
                        </div>
