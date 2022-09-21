

<!-- BEGIN CONTENT -->
          <div class="page-content-wrapper">
              <!-- BEGIN CONTENT BODY -->
              <div class="page-content">
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
<div class="portlet light portlet-fit portlet-form ">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-bubble font-green"></i>
                <span class="caption-subject font-green bold uppercase">ویرایش وسایل جنراتور</span>
            </div>

        </div>
        <div class="portlet-body">
            <?php foreach ($data as $row) { ?>
            <!-- BEGIN FORM-->
            <form method="post"id="form_sample_2" data-parsley-validate action="<?=base_url()?>ProductsController/editProductsForm" enctype="multipart/form-data"  class="form-horizontal">
                <div class="form-body">
                    <div class="form-group  margin-top-20">
                        <label class="control-label col-md-3"  style="font-weight:bold">اســـم جنس

                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">
                            <div class="input-icon right">
                                <i class="fa"></i>
                                <input type="text" required="required" placeholder="اسم جنس را وارد نمایید."   class="form-control" value="<?=$row->product_name?>" name="product_name" />

                               </div>

                        </div>
                    </div>
                    <input type="hidden" value="<?=$row->product_id?>" name="product_id">

                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <a type="button" href="<?=base_url();?>ProductsController "class="btn dark btn-outline">بازگشت</a>
                            <button type="submit" class="btn green" name="add">ذخیره</button>
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
