
<!-- BEGIN CONTENT -->
          <div class="page-content-wrapper" >
              <!-- BEGIN CONTENT BODY -->
              <div class="page-content">
                <!-- END PAGE HEADER-->
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
              <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="dropdown_1">
                                    <!-- <h4 class="block">Dropdown buttons</h4> -->
                                    <div class="btn-group" >
                                        <a class="btn btn-md green-haze hidden-print uppercase print-btn" data-toggle="dropdown" href="javascript:;" aria-expanded="false"> فورم ها
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu" style="font-family: Calibri,IranianSans;font-size: 18px;">
                                            <li>
                                                <a href="<?=base_url();?>GeneratorDetailInfoController/form_63?id=<?=$_GET['id'];?>"> فورم 63
                                                   
                                                </a>
                                            </li>
                                            <li>
                                                <a  href="<?=base_url();?>GeneratorDetailInfoController/submit_act?id=<?=$_GET['id'];?>"> فورم اکت دوره تسلیمی  </a>
                                            </li>
                                            <li>
                                                <a href="<?=base_url();?>GeneratorDetailInfoController/peshraft_kar?id=<?=$_GET['id'];?>">جدول برآورد پیشرفت کار </a>
                                            </li>
                                            <li>
                                                <a href="<?=base_url();?>GeneratorDetailInfoController/PrintBarawardSani?id=<?=$_GET['id'];?>" > جدول برآورد ثانی
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?=base_url();?>GeneratorDetailInfoController/weekly_stabilization?id=<?=$_GET['id'];?>"> جدول یک
                                                </a>
                                            </li>
                                             <li>
                                                <a href="<?=base_url();?>GeneratorDetailInfoController/jadwal_4?id=<?=$_GET['id'];?>"> جدول چهار
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                       
                                    
                                    <a class="btn btn-md green-haze hidden-print uppercase print-btn" href="<?=base_url();?>/GeneratorDetailInfoController/print?id=<?=$_GET['id'];?>" target="blank">Print</a>
                                   <a class="btn btn-md green-haze hidden-print uppercase print-btn" href="<?=base_url();?>GenratorExcalController/index?id=<?=$_GET['id'];?>" target="blank">Excel</a>
                                    
                                </div>
                               
                            </div>
                        </div>
                    <div class="row">
                      <div class="col-xs-6">

                      </div>
                      <div class="col-xs-6">
                        <!-- <a class="btn btn-lg green-haze hidden-print uppercase print-btn" href="<?=base_url();?>GeneratorDetailController">بازگشت</a> -->

                         
                      </div>

                  </div>
                  <!-- END PAGE HEADER-->
                <div class="col-md-12">
                     <div class="col-md-4" >
                        <img src="<?=base_url();?>/assets/logo/logo2.png"  width="160px" alt="">
                      </div>
                      <div class="col-md-4" >
                      </br>

                        </br>
                        <h4 style="font-family:Calibri;text-align: center;font-weight:bold"> <b style="color:green">شرکت تخنیکی </b><b style="color:red"> و انجنیری </b><b style="color:black"> مجتبی علی </b> </h4>
                        <h4 style="font-family:Calibri;text-align: center;font-weight:bold">ورکشاپ </h4>

                      </div>
                      <?php foreach ($data as $row) {?>
                      <div class="col-md-4" >
                      </br></br>

                        <h5 style="font-family:Calibri;text-align:left"><?=$row->g_r_date ?><b> : تاریخ </b><h5>
                          <h5 style="font-family:Calibri;text-align:left"><?=$row->g_r_serial_number ?> <b> : سریال نمبر </b><h5>
                        <h5 style="font-family:Calibri;text-align:left"><?=$row->g_r_code ?><b> : کد ثبت </b><h5 >

                      </div>
                </div>
                <hr style="border:solid black 1px">
                <div class="col-md-12"  >

                          <div class="col-md-3 col-xs-6">
                              <div class="invoice-logo">
                                  <img  src="<?=base_url();?><?=$row->g_s_photo?>" class="img-responsive" alt="" />

                              </div>
                          </div>
                          <div class="col-md-9 col-xs-6">
                              <div class="company-address" >
                                <div class="row invoice-cust-add">
                                    <div class="col-xs-3">
                                        <h1 class="invoice-title uppercase" style="color:black;">موقعیت</h1>
                                        <h1 class="invoice-desc"><?=$row->g_r_generator_location ?></h1>
                                    </div>
                                    <div class="col-xs-3">
                                        <h1 class="invoice-title uppercase" style="color:black;">ظرفیت</h1>
                                        <h1 class="invoice-desc"><?=$row->g_s_generator_capacity ?></h1>
                                    </div>
                                    <div class="col-xs-3">
                                        <h1 class="invoice-title uppercase" style="color:black;">مدل انجن</h1>
                                        <h1 class="invoice-desc "><?=$row->g_r_engine_model ?></h1>
                                    </div>
                                    <div class="col-xs-3">
                                        <h1 class="invoice-title uppercase" style="color:black;">نوعیت جنراتور</h1>
                                        <h1 class="invoice-desc"><?=$row->g_s_generator_type ?></h1>
                                    </div>
                                    <!-- <div class="col-xs-2">
                                        <h1 class="invoice-title uppercase" style="color:black;">سریال نمبر</h1>
                                        <h1 class="invoice-desc ">  <?=$row->g_r_serial_number ?></h1>
                                    </div>
                                    <div class="col-xs-2">
                                        <h1 class="invoice-title uppercase" style="color:black;">کد ثبت</h1>
                                        <h1 class="invoice-desc">  <?=$row->g_r_code ?></h1>
                                    </div> -->
                                </div>

                              </div>
                      </div>
                      <?php } ?>
                      <!-- BEGIN SAMPLE TABLE PORTLET-->
                  </div>

                    <div class="row">
                <div class="col-md-12" >
                    <!-- BEGIN BORDERED TABLE PORTLET-->
                    <div class="portlet light portlet-fit ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-list font-dark"></i>
                                <span class="caption-subject font-dark bold uppercase" style="font-weight: bold;font-size:20px" >لیســـت وسایل جنراتور</span>
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-bordered table-hover " >

                                             <tr >
                                                 <th style="margin;font-weight: bold;text-align:center;;font-size:20px" rowspan="2"> شماره </th>
                                                 <th  style="font-weight: bold;text-align:center;font-size:20px" rowspan="2">اسم جنس</th>
                                                 <th style="font-weight: bold;text-align:center;font-size:15px" colspan="3"> تثبیت پرزه جات
                                                 </th>
                                                 <th style="font-weight: bold;text-align:center;font-size:20px" rowspan="2"> تعداد</th>
                                                 <th style="font-weight: bold;text-align:center;font-size:20px" rowspan="2">تفصیلات</th>
                                             </tr>
                                             <tr>
                                                 <th style="text-align:center;font-size:15px">
                                                      ترمیم
                                                     <td style="font-weight: bold;font-size:15px;text-align:center">جدید</td>
                                                     <td style="font-weight: bold;font-size:15px;text-align:center">کمبود پرزه از ساحه</td>
                                                  </th>
                                             </tr>

                            <?php $i = 1; ?>
                            <?php foreach ($internal as $row) { ?>
                            <tr>
                                <td style="font-weight: bold;text-align:center"><?php echo $i?></td>

                                <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_porduct_name?></td>
                                <td style="font-weight: bold;text-align:center">
                                <?php if ($row->g_f_r_status=='1') { ?>
                                <span class="fa fa-check" style="font-size:20px" > </span>
                              <?php }else{?>

                              <?php } ?>
                                </td>
                                <td style="font-weight: bold;text-align:center">
                                <?php if ($row->g_f_r_status=='2') { ?>
                                <span class="fa fa-check" style="font-size:20px" > </span>
                              <?php }else{?>

                              <?php } ?>
                                </td>
                                <td style="font-weight: bold;text-align:center">
                                <?php if ($row->g_f_r_status=='3') { ?>
                                  <span class="fa fa-check" style="font-size:20px" > </span>
                              <?php }else {?>

                              <?php } ?>
                                </td>
                                <td style="font-weight: bold;text-align:center"> <?php if($row->g_f_r_quantity==0){
                                }else{
                                    echo $row->g_f_r_quantity;
                                }?></td>
                                <td style="font-weight: bold;text-align:center"><?=$row->g_f_r_remark?></td>

                            </tr>
                            <?php $i++; ?>
                            <?php }?>


                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE PORTLET-->
                </div>
                </div>
</div>
</div>
</div>
