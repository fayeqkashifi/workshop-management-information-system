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
                            <span>لیست وسایل </span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
                <div class="portlet light portlet-fit ">
                  <div class="portlet-title">
                      <div class="caption">
                          <i class="icon-settings font-red"></i>
                          <span class="caption-subject font-red sbold uppercase">لیست وسایل جنراتور</span>
                      </div>
                      <div class="actions">
                       
                          <div class="btn-group btn-group-devided" data-toggle="buttons">
                              <a class="btn btn-transparent red btn-outline btn-circle btn-sm active"data-toggle="modal"   href="#responsive">
                                 اضــافه</a>

                          </div>
                      </div>
                  </div>
                    <div class="portlet-body">

                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                       <thead>

                                           <tr>
                                               <th style="font-weight: bold;text-align:center;width:10%;font-size:20px">شماره </th>
                                               <th style="font-weight: bold;text-align:center; font-size:20px" >جنس اسم</th>
                                               <th width='20%'style="font-weight: bold;text-align:center;font-size:20px"> عملکرد ها </th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                         <?php $i = 1; ?>
                          <?php foreach ($data as $row) { ?>
                          <tr>
                              <td style="font-weight: bold;text-align:center;"><?php echo $i?></td>
                              <td style="font-weight: bold;text-align:center;"><?=$row->product_name?></td>





                              <td class="nowrap" style="font-weight: bold;text-align:center;" style="">
                                  <a class="btn btn-xs btn-info" type="button" data-placement="top" data-toggle="tooltip" data-original-title="ویرایش" href="<?=base_url()?>ProductsController/editProducts?id=<?=$row->product_id?>" ><i class="fa fa-pencil"></i>ویرایش</a>
                                  <?php if($_SESSION['type']!=2){?>
                                    <a class="btn btn-xs btn-danger "  href="<?=base_url()?>ProductsController/removeProducts?id=<?=$row->product_id?>" data-toggle="confirmation" id="bs_confirmation_demo_1"><i class="fa fa-trash"></i>حذف</a>

                                    <!-- <a class="btn btn-xs btn-danger" type="button" data-placement="top" data-toggle="tooltip" data-original-title="حذف" ><i class="fa fa-trash" ></i></a> -->
                                  <?php } ?>
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
                                     <form method="post"id="form_sample_2" data-parsley-validate action="<?=base_url()?>ProductsController/insertForm" enctype="multipart/form-data"  class="form-horizontal">
                                         <div class="form-body">
                                             <div class="form-group  margin-top-20">
                                                 <label class="control-label col-md-3" style="font-weight:bold">اســـم جنس

                                                     <span class="required"> * </span>
                                                 </label>
                                                 <div class="col-md-4">
                                                     <div class="input-icon right">
                                                         <i class="fa"></i>
                                                         <input type="text" required="required" placeholder="اسم جنس را وارد نمایید."   class="form-control" name="product_name" />

                                                        </div>

                                                 </div>
                                             </div>


                                         <div class="form-actions">
                                             <div class="row">
                                                 <div class="col-md-offset-3 col-md-9">
                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">بازگشت</button>
                                                     <button type="submit" class="btn green" name="add">ذخیره</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </form>
                                     <!-- END FORM-->
                                     </div>
                               </div>
                           </div>
                        </div>
