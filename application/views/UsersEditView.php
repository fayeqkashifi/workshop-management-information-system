
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
                            <span>ویرایش کاربر</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
<div class="portlet light portlet-fit portlet-form ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">ویرایش کاربر</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <?php foreach ($data as $row) { ?>


                                    <!-- BEGIN FORM-->
                                    <form method="post"id="form_sample_2" data-parsley-validate action="<?=base_url()?>UsersController/editUserForm" enctype="multipart/form-data"  class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group  margin-top-20">
                                                <label class="control-label col-md-3" style="font-weight:bolder">اســـم

                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا اسم تان را در اینجا وارد نمایید."    class="form-control" value="<?=$row->name?>" name="name" />

                                                       </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" style="font-weight:bolder">اسم پدر
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا اسم پدر تان را در اینجا وارد نمایید."  class="form-control" value="<?=$row->father_name?>" name="father_name" /> </div>

                                                </div>
                                            </div>
                                            <div class="form-group  margin-top-20">
                                                <label class="control-label col-md-3" style="font-weight:bolder">تخلص
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا تخلص تان را وارد نمایید."   class="form-control" value="<?=$row->last_name?>" name="last_name" /> </div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3" style="font-weight:bolder">رمز عبور
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right" style="font-weight:bolder">
                                                        <i class="fa"></i>
                                                        <input type="password" required="required" placeholder="*********" class="form-control" name="password"  /> </div>

                                                </div>
                                            </div>
                                            <div class="form-group  margin-top-20">
                                              <label class="control-label col-md-3" style="font-weight:bolder">تائید رمز عبور
                                                <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-4">
                                                <div class="input-icon right">
                                                  <i class="fa"></i>
                                                  <input type="password"required="required"  placeholder="*********"     class="form-control" name="confirm_password" /> </div>

                                                </div>
                                              </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3" style="font-weight:bolder">نام کاربری
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا نام کاربری تان را وارد نمایید." class="form-control" value="<?=$row->username?>" name="username" /> </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" style="font-weight:bolder">نوعیت
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select required="required" class="form-control" id="form_control_1" name="user_type">
                                                    <option value=""></option>
                                                    <option value="1" <?php if ($row->user_type=="1"){echo "selected"; } ?>>مدیر</option>
                                                    <option value="2" <?php if ($row->user_type=="2"){echo "selected"; } ?> >کارمند</option>
                                                </select>

                                                    </div>

                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-md-3" style="font-weight:bolder">زون مربوطه
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select required="required" class="form-control" id="form_control_1" name="zone_type">
                                                    <option value=""></option>
                                                    <optgroup   label="قول اردو ها" >
                                                        <option value="مدیر قول اردو">مدیر قول اردو ها</option>
                                                        <option value="201" <?php if($row->zone_type=='201'){echo "selected";} ?> >201 سیلاب</option>
                                                        <option value="203" <?php if($row->zone_type=='203'){echo "selected";} ?>>203 تندر پکتیا</option>
                                                        <option value="205" <?php if($row->zone_type=='205'){echo "selected";} ?>>205 اتل</option>
                                                        <option value="207" <?php if($row->zone_type=='207'){echo "selected";} ?>>207 ظفر</option>
                                                        <option value="209" <?php if($row->zone_type=='209'){echo "selected";} ?>>209 شاهین</option>
                                                        <option value="215" <?php if($row->zone_type=='215'){echo "selected";} ?>>215 میوند</option>
                                                    </optgroup>
                                                    <optgroup   label="زون مرکز" >
                                                        <option value="مدیر مرکز" <?php if($row->zone_type=='مدیر مرکز'){echo "selected";} ?>>مدیر مرکز</option>
                                                        <option value="شمال" <?php if($row->zone_type=='شمال'){echo "selected";} ?>>شمال</option>
                                                        <option value="شرق" <?php if($row->zone_type=='شرق'){echo "selected";} ?>>شرق</option>
                                                        <option value="غرب" <?php if($row->zone_type=='غرب'){echo "selected";} ?>>غرب</option>
                                                        <option value="مرکز" <?php if($row->zone_type=='مرکز'){echo "selected";} ?>>مرکز</option>
                                                    </optgroup>
                                                </select>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3"  style="font-weight:bolder">عکس
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
                                                            <img src="<?=base_url()?><?=$row->photo?>"/>
                                                         </div>
                                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> انتخاب  </span>
                                                                <span class="fileinput-exists">تغییر  </span>
                                                                <input type="file"  name="photo"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3"  style="font-weight:bolder">عکس امضاء
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                            <img src="<?=base_url()?><?=$row->signature_photo?>"/>
                                                         </div>
                                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> انتخاب  </span>
                                                                <span class="fileinput-exists">تغییر  </span>
                                                                <input type="file" placeholder="لطفا عکس امضا را وارد نمایید."  name="signature_photo"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                             <input type="hidden" name="previous_photo" value="<?=$row->photo?>">
                                              <input type="hidden" name="previous_signature_photo" value="<?=$row->signature_photo?>">
                                        <input type="hidden" value="<?=$row->user_id?>" name="user_id"/>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                  <!-- <button type="button" class="btn default">بازگشت</button> -->
                                                    <button type="submit" class="btn green">ویرایش</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    <?php } ?>
                                    <!-- END FORM-->
                                </div>
                            </div>
                          </div>
                          <br><br><br><br><br>
                      </div>
