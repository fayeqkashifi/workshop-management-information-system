
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
                            <span>اضافه کردن کاربر</span>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
<div class="portlet light portlet-fit portlet-form ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">اضــافه کردن کاربر</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form method="post"id="form_sample_2" data-parsley-validate action="<?=base_url()?>UsersController/insertForm" enctype="multipart/form-data"  class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group  margin-top-20">
                                                <label class="control-label col-md-3" style="font-weight:bolder">اســـم

                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا اسم تان را در اینجا وارد نمایید."   class="form-control" name="name" />

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
                                                        <input type="text" required="required" placeholder="لطفا اسم پدر تان را در اینجا وارد نمایید."  class="form-control" name="father_name" /> </div>

                                                </div>
                                            </div>
                                            <div class="form-group  margin-top-20">
                                                <label class="control-label col-md-3" style="font-weight:bolder">تخلص
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="text" required="required" placeholder="لطفا تخلص تان را وارد نمایید."   class="form-control" name="last_name" /> </div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3" style="font-weight:bolder">رمز عبور
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="input-icon right">
                                                        <i class="fa"></i>
                                                        <input type="password" required="required" placeholder="*********" class="form-control" name="password" /> </div>

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
                                                        <input type="text" required="required" placeholder="لطفا نام کاربری تان را وارد نمایید." class="form-control" name="username" /> </div>

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
                                                    <option value="1">مدیر</option>
                                                    <option value="2">کارمند</option>
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
                                                        <option value="201">201 سیلاب</option>
                                                        <option value="203">203 تندر پکتیا</option>
                                                        <option value="205">205 اتل</option>
                                                        <option value="207">207 ظفر</option>
                                                        <option value="209">209 شاهین</option>
                                                        <option value="215">215 میوند</option>
                                                    </optgroup>
                                                    <optgroup   label="زون مرکز" >
                                                        <option value="مدیر مرکز">مدیر مرکز</option>
                                                        <option value="شمال">شمال</option>
                                                        <option value="شرق">شرق</option>
                                                        <option value="غرب">غرب</option>
                                                        <option value="مرکز">مرکز</option>
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
                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> انتخاب  </span>
                                                                <span class="fileinput-exists">تغییر  </span>
                                                                <input type="file" name="photo"> </span>
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
                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
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
