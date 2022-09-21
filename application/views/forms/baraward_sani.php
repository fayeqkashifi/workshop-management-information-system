<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>A4 landscape</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/paper/paper.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 landscape }</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
<?php $number=1;?>
<?php $row_number_show=15;?>
<?php for ($x=1; $x <= ceil($num_rows/15) ; $x++) { ?>
<section class="sheet padding-8mm" style="padding-top: 20px">
<table width="908" style="font-size: 12px; margin-left: auto; margin-right: auto;">
<tbody>
<tr style="height: 0px;">
<td colspan="3" rowspan="2" width="232" style="text-align: center; height: 45px;">Islamic Republic of Afghanistan<br /> Ministry of Defense</td>
<td colspan="9" rowspan="5" width="453" style="text-align: center; height: 125px;">
<table>
<tbody>
<tr style="text-align: center;">
<td colspan="9" rowspan="5" width="453">
<p><img width="60" src="<?=base_url();?>/assets/logo/minstry_of_defense.png" height="60" /></p>
<p>ریاست امور ســـــــــــــــــــــــــــــــــاختمانی و ملکیت ها<br /> مدیریت عمومی تنظیم و اداره قرارداد و ساختمان<br /> مدیریت حمایه تاسیسات ساحوی کابل</p>
</td>
</tr>
</tbody>
</table>
</td>
<td colspan="2" rowspan="2" width="223" style="text-align: center; height: 45px;">جمهوری اسلامی افغانستان<br /> وزارت دفاع ملی</td>
</tr>
<tr style="text-align: center;"></tr>
<tr style="text-align: center;">
<td colspan="3" width="" style="text-align: center; height: 18px;">جدول براورد ثانی</td>
<td colspan="2" width="" style="text-align: center; height: 18px;">شرکت مربوطه</td>
</tr>
<tr style="text-align: center;">
<td colspan="3" style="text-align: center; height: 41px; direction: rtl;">نمبر قرارداد: MOD/NC0084/22405/1397</td>
<td colspan="2" width="" style="text-align: center; height: 41px;">شرکت ساختمانی مجتبی علی</td>
</tr>
<tr style="text-align: center;">
<td colspan="3" style="text-align: center; height: 21px;">&nbsp;&nbsp; معیاد کاری پروژه:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الی</td>
<td colspan="2" style="text-align: center; height: 21px;"></td>
</tr>
<tr style="text-align: center;">
<td colspan="3" style="height: 21px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp; تاریخ راپور دهی:&nbsp; &nbsp; &nbsp; &nbsp; ورق ( <?=$x?>&nbsp;</td>
<td colspan="11" style="text-align: right; height: 21px;">تهیه پرزه جات و اجرای احجام پروسه کاری ترمیم اساسی یک پایه جنراتور مربوط <?php foreach ($data as $key) {?> <?=$key->g_r_generator_location?>  <?php } ?></td>
</tr>
</tbody>
</table>
<table width="908" style="font-size: 12px; height: 146px; width: 905px; margin-left: auto; margin-right: auto; border-collapse: collapse;" border="1px">
<tbody>
<tr style="height: 21px;">
<td colspan="2" width="254" style="text-align: center; height: 21px; width: 229px;">موقعیت جنراتور</td>
<td colspan="2" width="100" style="text-align: center; height: 21px; width: 77px;">نمبرسایت</td>
<td width="100" style="text-align: center; height: 21px; width: 73px;">نمبر لات</td>
<td width="100" style="text-align: center; height: 21px; width: 81px;">ظرفیت</td>
<td colspan="2" width="177" style="text-align: center; height: 21px; width: 131px;">انجن مودل</td>
<td colspan="2" width="223" style="text-align: center; height: 21px; width: 312px;">سریال نمبر</td>
</tr>
<?php foreach ($data as $key) {?>
<tr style="height: 21px;">
<td colspan="2" rowspan="2" style="text-align: center; height: 42px; width: 229px;"><?=$key->g_r_generator_location?></td>
<td colspan="2" style="text-align: center; height: 21px; width: 77px;">&nbsp;</td>
<td style="text-align: center; height: 21px; width: 73px;">7</td>
<td style="text-align: center; height: 21px; width: 81px;"><?=$key->g_s_generator_capacity?></td>
<td colspan="2" style="text-align: center; height: 21px; width: 131px;"><?=$key->g_r_engine_model?></td>
<td colspan="2" style="text-align: center; height: 21px; width: 312px;"><?=$key->g_r_serial_number?></td>
</tr>
<?php } ?>
<tr style="height: 21px;">
<td colspan="4" style="text-align: center; height: 21px; width: 231px;">(احجام امور انجام شده (براورد ثانی</td>
<td colspan="2" rowspan="2" width="93" style="text-align: center; height: 41px; width: 131px;">حجم&nbsp; مطابق موافقتنامه&nbsp;&nbsp;</td>
<td rowspan="3" width="277" style="text-align: center; height: 62px; width: 274px;">مشخصات کاری پروژه طبق (موافقتنامه) که ترمیم اساسی آن انجام گردیده و پرزه جات انجام شده قرارذیل اند</td>
<td rowspan="3" style="text-align: center; height: 62px; width: 38px;">شماره</td>
</tr>
<tr style="height: 20px;">
<td colspan="2" rowspan="2" style="text-align: center; height: 41px; width: 229px;">ملاحظات</td>
<td colspan="2" rowspan="2" width="81" style="text-align: center; height: 41px; width: 77px;">حجم اضافی قرارداد</td>
<td rowspan="2" width="81" style="text-align: center; height: 41px; width: 73px;">حجم باقیمانده قرارداد</td>
<td rowspan="2" width="84" style="text-align: center; height: 41px; width: 81px;">حجم انجام شده قرارداد</td>
</tr>
<tr style="height: 21px;">
<td width="47" style="text-align: center; height: 21px; width: 66px;">واحد</td>
<td width="46" style="text-align: center; height: 21px; width: 65px;">تعداد</td>
</tr>
<!--  -->
<?php $i = 1; ?>
<?php foreach ($internal as $row) {?>
<?php if ($i>=$number) {?>
<tr style="height: 21px;">
<td colspan="2" style="text-align: center; height: 21px; width: 229px;">&nbsp;</td>
<td colspan="2" style="text-align: center; height: 21px; width: 77px;">0</td>
<td style="text-align: center; height: 21px; width: 73px;">0</td>
<td style="text-align: center; height: 21px; width: 81px;"><?=$row->g_f_r_quantity?></td>
<td style="text-align: center; height: 21px; width: 66px;"><?=$row->g_f_r_unit?></td>
<td style="text-align: center; height: 21px; width: 65px;"><?=$row->g_f_r_quantity?></td>
<td style="height: 21px; width: 274px; text-align: right;"><?=$row->g_f_r_porduct_name ?></td>
<td width="38" style="text-align: center; height: 21px; width: 38px;"><?php echo $i?></td>
</tr>
<?php } ?>
<?php $i++; ?>
<?php if ($i==$row_number_show) { ?>
<?php $number=$number+14;; $row_number_show=$row_number_show+14; break; } ?>
<?php } ?>


<tr style="height: 21px;">
<td colspan="4" style="text-align: center; height: 21px; width: 306px;">&nbsp;</td>
<td colspan="4" style="text-align: center; height: 21px; width: 285px;">&nbsp;</td>
<td style="text-align: center; height: 21px; width: 274px;">&nbsp;</td>
<td width="38" style="text-align: center; height: 21px; width: 38px;">&nbsp;</td>
</tr>
</tbody>
</table>

<table width="908" style="font-size: 12px; height: 62px; margin-left: auto; margin-right: auto;">
<tbody>
<tr style="height: 21px;">
<td colspan="14" width="908" style="text-align: center; width: 3628px; height: 21px;" dir="rtl">قرار شرح فوق جدول هذا به تعداد <?=$num_rows?> قلم پرزه جات امورات ترمیم اساسی جنراتور انجام شده تأیید و صحت است.</td>
</tr>

<tr style="height: 21px;">
<td colspan="14" style="width: 3628px; height: 21px;"><br><br><br></td>
    
</tr>
<tr style="text-align: center;">

<td colspan="2" rowspan="2" style="width: 500px; text-align: center; height: 20px;"><strong>قوماندان قطعه</strong></td>
<td colspan="3" rowspan="2" style="width: 500px; text-align: center; height: 20px;"><strong><span>&nbsp;</span>مدیر تسهیلات&nbsp;</strong></td>
<td colspan="4" rowspan="2" style="width: 500px; text-align: center; height: 20px;"><strong>ریس&nbsp;هیٔت&nbsp;</strong></td>
<td colspan="3" rowspan="2" style="width: 500px; text-align: center; height: 20px;"><strong>&nbsp; هیٔت</strong></td>
<td colspan="2" rowspan="2" style="width: 500px; text-align: center; height: 20px;"><strong>مراقبت کننده&nbsp;</strong></td>
</tr>
<tr style="height: 10px;"></tr>
</tbody>
</table>
  </section>
  
  <?php } ?>

</body>

</html>
