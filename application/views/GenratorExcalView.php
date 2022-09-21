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
                            <div class="portlet box green">
                               <div class="portlet-title">
                                   <div class="caption">
                                       <i class="fa fa-globe"></i><b> لیســـت جنـــراتـورها </b> </div>
                                   <div class="tools"> </div>
                               </div>
                               <div class="portlet-body">
                                   <table class="table table-striped table-bordered table-hover" id="sample_2">

                                       <thead>

                                           <tr>
                                               <th style="text-align:center;font-size:20px">شماره </th>
                                               <th style="text-align:center;font-size:20px">اسم جنس</th>
                                               <th style="text-align:center;font-size:20px">  ترمیم </th>
                                               <th style="text-align:center;font-size:20px"> جدید </th>
                                               <th style="text-align:center;font-size:20px"> کمبود پزره از ساحه </th>
                                               <th style="text-align:center;font-size:20px"> تعداد </th>
                                               <th style="text-align:center;font-size:20px"> تفصیلات </th>
                                               
                                           </tr>
                                       </thead>
                                       <tbody>
                                         <?php $i = 1; ?>
                          <?php foreach ($internal as $row) { ?>
                          <tr>
                              <td style="font-weight: bold; text-align:center"><?php echo $i?></td>
                              <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_porduct_name?></td>
                              <td style="font-weight: bold;text-align:center">  
                              <?php if ($row->g_f_r_status=='1') { ?>
                                ترمیم
                              <?php }else{?>

                              <?php } ?>
                              </td>
                              <td style="font-weight: bold;text-align:center">
                              <?php if ($row->g_f_r_status=='2') { ?>
                                جدید
                              <?php }else{?>

                              <?php } ?>
                              </td>
                              <td style="font-weight: bold;text-align:center">
                              <?php if ($row->g_f_r_status=='3') { ?>
                                 کمبود پرزه از ساحه
                              <?php }else {?>

                              <?php } ?>
                              </td>
                              <td style="font-weight: bold;text-align:center">
                              <?php if($row->g_f_r_quantity==0){
                              }else{
                                  echo $row->g_f_r_quantity;
                              }?></td>
                              </td>
                              <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_remark?></td>
                          </tr>
                          <!-- BEGIN DROPDOWNS PORTLET-->

                          </div>
                          <!-- END DROPDOWNS PORTLET-->
                          <?php $i++; ?>
                          <?php }?>
                           <?php foreach ($R_products as $row) { ?>
                            <tr style="">
                                    <td style="font-weight: bold;text-align:center;"><?php echo $i?></td>

                                    <td style="font-weight: bold;text-align:center;x"><?=$row->g_f_r_porduct_name?></td>
                                    <td style="font-weight: bold;text-align:center">
                                                                      </td>
                                    <td style="font-weight: bold;text-align:center">
                                    </td>
                                    <td style="font-weight: bold;text-align:center"> سالم
                                    </td>
                                    <td style="text-align:center;"> <?php if($row->g_f_r_quantity==0){
                                    }else{
                                        echo $row->g_f_r_quantity;
                                    }?></td>
                                    <td style="font-weight: bold;text-align:center;"><?=$row->g_f_r_remark?></td>

                                </tr>
                            
                          <?php }?>
                                       </tbody>
                                   </table>
                               </div>
                           </div>

                         </div>
                        </div>
