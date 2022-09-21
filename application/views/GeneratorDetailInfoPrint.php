<!-- BEGIN PAGE LEVEL PLUGINS -->
   <!-- END PAGE LEVEL PLUGINS -->

   <!-- BEGIN THEME GLOBAL STYLES -->

   <!-- END THEME GLOBAL STYLES -->

   <!-- END THEME LAYOUT STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->

   <!-- END PAGE LEVEL STYLES -->
<!DOCTYPE html>
<html>
<head>
<title >شرکت ساختمانی و تخنیکی مجتبی علی</title>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?=base_url();?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

<link href="<?=base_url();?>/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?=base_url();?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?=base_url();?>/assets/global/css/components-md-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?=base_url();?>/assets/global/css/plugins-md-rtl.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->

<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?=base_url();?>/assets/layouts/layout2/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/layouts/layout2/css/themes/blue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?=base_url();?>/assets/layouts/layout2/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?=base_url();?>/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?=base_url();?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?=base_url();?>/assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?=base_url();?>/assets/pages/css/portfolio-rtl.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?=base_url();?>/assets/pages/css/invoice-2-rtl.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- <link href="<?=base_url();?>/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" /> -->
<!-- <link href="<?=base_url();?>/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" /> -->
<!-- END PAGE LEVEL PLUGINS -->



</head>
<body >

<style type="text/css">
   td {
       padding: 5px;
   }
</style>

<div id="print">
  <?php foreach ($data as $row) {?>
          <div style="width:1024px;height: 1450px;margin:0 auto;vertical-align: center;border:1px solid black">
            <div class=""  style="width:100%;text-align: center;transform: rotate(90deg);margin-top:600px;">
              <h1 style="font-family:Calibri;font-weight: bolder;font-size:40px;vertical-align:center;text-align:center"> جنراتور <?=$row->g_r_generator_location ?> </h1>
              <h1 style="font-family:Calibri;direction: rtl; font-weight: bolder;font-size:40px;vertical-align:center;text-align:center">  <?=$row->g_r_engine_model ?> </h1>
            </div>
          </div>

          <div style="page-break-before:always;">
          </div>

          <div style="width:1024px;height: 1450px;margin:0 auto;direction: rtl;vertical-align: center;border:1px solid black">
            <div class="" style="text-align: center;margin-top:200px">
              <h1 style="font-family:Calibri;font-weight: bolder;font-size:50px;margin-bottom:100px">فهرست</h1>
                <ol style="font-family:Calibri;font-weight: bolder;margin-right: 100px;direction: rtl;font-size:37px;text-align:right">
                  <li>فورم راجستریشن و تثبیت عوارض</li>
                  <li>عکس ها</li>
                  <ul>
                    <li>عکس خود جنراتور <b style="font-size:25px">(یک قطعه)</b></li>
                    <li>عکس سریال نمبر جنراتور<b style="font-size:25px">(یک قطعه)</b></li>
                    <li>عکس انجن <b style="font-size:25px">(یک قطعه)</b></li>
                    <li>بازکاری </li>
                    <ol>
                      <li>گیلاس <b style="font-size:25px">(یک قطعه)</b></li>
                      <li>پستون <b style="font-size:25px">(یک قطعه)</b></li>
                    </ol>
                    <li>شستشوی </li>
                    <ol>
                      <li>سیلندر <b style="font-size:25px">(یک قطعه)</b></li>
                      <li>هید <b style="font-size:25px">(یک قطعه)</b></li>
                    </ol>
                    <li>پرزه جات جدید مکمل عکس گرفته شود <b style="font-size:25px">(از هر پرزه یک قطعه)</b> </li>
                    <ul>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                    <li>بعد از ترمیم</li>
                    <ol>
                      <li>عکس انجن <b style="font-size:25px">(یک قطعه)</b></li>
                      <li>عکس جنراتور <b style="font-size:25px">(یک قطعه)</b></li>
                    </ol>
                  </ul>
                  <span style="font-size:20px;">
                  نوت : عکس بدون در نظر گرفتن موارد سیفتی  و ایمنی از قبیل یونیفورم،کلاه،دستکش و غیره گرفته نشود.
                  </span>
                </ol>

            </div>
          </div>
          <div style="page-break-before:always;">
          </div>

           <div  class="col-md-12" style="font-family:Calibri;text-align: center;" >

                   <table   style=" width:100%; border-collapse:collapse;border: 1px solid #fff; margin-top: 10px;text-align: right;direction: rtl;" border="1" >
                       <tr>
                         <td style="width: 25%" colspan="2" style="">
                           <br>
                                 <h5 style="text-align:right;">تاریخ   : <?=$row->g_r_date ?> </h5>
                                   <h5 style="text-align:right;">سریال نمبر    : <?=$row->g_r_serial_number ?> </h5>
                                 <h5 style="text-align:right;"> کد ثبت   : <?=$row->g_r_code ?> </h5>
                         </td>

                           <td style="width: 50%" colspan="2">


                                 <h5 style="font-family:Calibri;text-align: center;font-weight:bold;font-size:40px;"> <b style="color:green">شرکت تخنیکی </b><b style="color:red"> و انجنیری </b><b style="color:black"> مجتبی علی </b> </h5>
                                   <h5 style="font-family:Calibri;text-align: center;font-weight:bold;font-size:20px;color:black">فورم راجستریشن جنراتور و تثبیت عوارض </h5>
                           </td>
                           <td style="width: 25%" colspan="2">
                                   <img src="<?=base_url();?>/assets/logo/Logo2.png" style="float:left;"  width="200px" alt="">
                           </td>

                       </tr>
                       <tr>
                         <td style="background-color:lightblue" colspan="7">
                          </td>
                       </tr>
                     </table>
                     </table>
                       <table style="width:100%; border-collapse:collapse;border: 1px solid #fff; margin-top: 10px;text-align: center;direction: rtl;font-size: 13px" border="1" >
                       <tr>
                         <td rowspan="2" >
                              <img src="<?=base_url()?><?=$row->g_s_photo ?>" width="250" >
                           </td>

                         <td style="width: 20%;font-weight:bold;font-size:25px">
                              موقعیت
                           </td>
                           <td style="width: 20%;font-weight:bold;font-size:25px">
                              ظرفیت
                           </td style="width: 20%;font-weight:bold;font-size:25px">
                           <td style="width: 20%;font-weight:bold;font-size:25px">
                             مدل انجن
                           </td>
                           <td style="width: 20%;font-weight:bold;font-size:25px">
                             نوعیت جنراتور
                           </td>

                       </tr>
                       <tr>
                           <td style="width: 20%;font-weight:bold;font-size:20px">
                             <?=$row->g_r_generator_location ?>
                           </td><td style="width: 20%;font-weight:bold;font-size:20px">
                              <?=$row->g_s_generator_capacity ?>
                           </td><td style="width: 20%;font-weight:bold;font-size:20px">
                              <?=$row->g_r_engine_model ?>
                           </td><td style="width: 20%;font-weight:bold;font-size:20px">
                             <?=$row->g_s_generator_type ?>
                           </td>

                       </tr>
                   </table>
                 <?php } ?>
<table class="table table-striped table-hover" style="border:1px solid black;width:100%; border-collapse:collapse; margin-top: 10px;\;text-align: center;direction: rtl;" border="1" >
<thead>

                                               <tr  style="background-color: pink;border:1px solid black;" >
                                                   <th style="margin;font-weight: bold;text-align:center;;font-size:20px;width:5%" rowspan="2"> شماره </th>
                                                   <th  style="font-weight: bold;text-align:center;font-size:20px;width:20%" rowspan="2">اسم جنس</th>
                                                   <th style="font-weight: bold;text-align:center;font-size:15px;width:30%" colspan="3"> تثبیت پرزه جات
                                                   </th>
                                                   <th style="font-weight: bold;text-align:center;font-size:20px;width:5%" rowspan="2"> تعداد</th>
                                                   <th style="font-weight: bold;text-align:center;font-size:20px;width:40%" rowspan="2">تفصیلات</th>
                                               </tr>
                                               <tr>
                                                   <th style="text-align:center;font-size:15px;background-color: pink;border:1px solid black;width:80px">
                                                        ترمیم
                                                       <td style="background-color: pink;border:1px solid black;font-weight: bold;font-size:15px;text-align:center;width:80px">جدید</td>
                                                       <td style="background-color: pink;border:1px solid black;font-weight: bold;font-size:15px;text-align:center;width:80px">کمبود پرزه از ساحه</td>
                                                    </th>
                                               </tr>

                              <?php $i = 1; ?>
                              <?php foreach ($internal as $row) { ?>
                              <tr style="">
                                  <td style="font-weight: bold;text-align:center;"><?php echo $i?></td>

                                  <td style="font-weight: bold;text-align:center;font-size:20px"><?=$row->g_f_r_porduct_name?></td>
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
                                  <td style="font-weight: bold;text-align:center;font-size:20px"> <?php if($row->g_f_r_quantity==0){
                                  }else{
                                      echo $row->g_f_r_quantity;
                                  }?></td>
                                  <td style="font-weight: bold;text-align:center;font-size:20px"><?=$row->g_f_r_remark?></td>

                              </tr>
                              <?php if($i==27){?>
                                  <tr style="page-break-before: always;">
                                  </tr>
                              <?php } ?>
                              <?php $i++; ?>
                              <?php }?>
                              <?php foreach ($R_products as $row) { ?>
                                <tr style="">
                                    <td style="font-weight: bold;text-align:center;"><?php echo $i?></td>

                                    <td style="font-weight: bold;text-align:center;font-size:20px"><?=$row->g_f_r_porduct_name?></td>
                                    <td style="font-weight: bold;text-align:center">
                                                                      </td>
                                    <td style="font-weight: bold;text-align:center">
                                    </td>
                                    <td style="font-weight: bold;text-align:center">
                                    </td>
                                    <td style="font-weight: bold;text-align:center;font-size:20px"> <?php if($row->g_f_r_quantity==0){
                                    }else{
                                        echo $row->g_f_r_quantity;
                                    }?></td>
                                    <td style="font-weight: bold;text-align:center;font-size:20px"><?=$row->g_f_r_remark?></td>

                                </tr>
                                <?php $i++; ?>
                              <?php } ?>
                              <?php foreach ($R_product as $row) { ?>
                                <tr style="">
                                    <td style="font-weight: bold;text-align:center;"><?php echo $i?></td>

                                    <td style="font-weight: bold;text-align:center;font-size:20px"><?=$row->product_name?></td>
                                    <td style="font-weight: bold;text-align:center">
                                                                      </td>
                                    <td style="font-weight: bold;text-align:center">
                                    </td>
                                    <td style="font-weight: bold;text-align:center">
                                    </td>
                                    <td style="font-weight: bold;text-align:center;font-size:20px"></td>
                                    <td style="font-weight: bold;text-align:center;font-size:20px"></td>

                                </tr>
                                <?php $i++; ?>
                              <?php } ?>

                       </tbody>
</table>

</br>
</br>
</br>
<table style="width:100%; border-collapse:collapse; margin-top: 10px;text-align: center;direction: rtl;" >
  <tr >
      <td style="font-weight:bold;font-size:25px">
      امضاء انجنیر ساحوی
    </td>
      <td style="font-weight:bold;font-size:25px">
        امضاء انجنیر ورکشاپ
      </TD>
      <td style="font-weight:bold;font-size:25px">
        امضاء مسئول قطعه
      </TD>
  </TR>
</table>
<div style="page-break-before:always;">
</div>

<?php foreach ($photos as $row) {  ?>
  <table style="width:100%; border-collapse:collapse;border: 1px solid #ccc; margin-top: 10px;font-size: 13px; text-align: right;direction: rtl;" border="1" >
    <thead>

      <th style="width:100%; text-align: center;font-weight:bold;font-size:40px;" >

          <span style=""><?=$row->g_w_p_comment?></span>
          <span><img src="<?=base_url();?>/assets/logo/Logo2.png" width="170"alt=""></span>
      </th>
    </thead>
    <tbody>
        <tr style="" >


            <td style="height:1300px;width:50%;text-align:left">

              <img src="<?=base_url()?><?=$row->g_w_photo?>"  style="margin-top:50px; height: 600px;transform: rotate(90deg);" alt="">

            </td>
        </tr>
  </tbody>
</table>
<div style="page-break-after:always;">
</div>
 <?php } ?>


</div>
</div>


</body>
</html>



<script type="text/javascript">
  window.print();

</script>
