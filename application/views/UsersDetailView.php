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
                            <span>لیست کاربران</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
                            <div class="portlet box green">
                               <div class="portlet-title">
                                   <div class="caption">
                                       <i class="fa fa-globe"></i><b>لیســـت کاربران</b> </div>
                                   <div class="tools"> </div>
                               </div>
                               <div class="portlet-body">
                                   <table class="table table-striped table-bordered table-hover" id="sample_3">

                                       <thead>

                                           <tr>
                                               <th style="text-align:center;font-size:20px">شماره </th>
                                               <th style="text-align:center;font-size:20px" >اسم</th>
                                               <th style="text-align:center;font-size:20px"> اسم پدر  </th>
                                               <th style="text-align:center;font-size:20px"> تخلص </th>
                                               <th style="text-align:center;font-size:20px"> تصویر </th>
                                               <th style="text-align:center;font-size:20px">امضا</th>
                                               <th width='20%' style="text-align:center ;font-size:20px"> عملکرد ها </th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                         <?php $i = 1; ?>
                          <?php foreach ($data as $row) { ?>
                          <tr>
                              <td style="font-weight: bold;text-align:center"><?php echo $i?></td>
                              <td style="font-weight: bold;text-align:center" ><?=$row->name?></td>
                              <td style="font-weight: bold;text-align:center" ><?=$row->father_name?></td>
                              <td style="font-weight: bold;text-align:center" ><?=$row->last_name?></td>
                              <td style="font-weight: bold;text-align:center"><img src="<?=base_url()?><?=$row->photo?>" width="50px"></td>
                              <td style="font-weight: bold;text-align:center"><img src="<?=base_url()?><?=$row->signature_photo?>" width="50px"></td>




                              <td class="nowrap" style="font-weight: bold;text-align:center" >
                                  <a class="btn btn-xs btn-info" type="button" data-placement="top" data-toggle="tooltip" data-original-title="ویرایش" href="<?=base_url()?>UsersController/editUser?id=<?=$row->user_id?>" ><i class="fa fa-pencil"></i>ویرایش</a>
                                  <a class="btn btn-xs btn-danger "  href="<?=base_url()?>UsersController/removeUser?id=<?=$row->user_id?>" data-toggle="confirmation" id="bs_confirmation_demo_1"><i class="fa fa-trash"></i>حذف</a>

                                  <!-- <a class="btn btn-xs btn-danger" type="button" data-placement="top" data-toggle="tooltip" data-original-title="حذف" ><i class="fa fa-trash" ></i></a> -->

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
