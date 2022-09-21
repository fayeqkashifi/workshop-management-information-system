
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>A4 Portirat</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/paper/paper.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 Portirat }</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4" style="padding-left: 50px;padding-right: 50px">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <?php $number=1;?>
<?php $row_number_show=21;?>
<?php for ($x=1; $x <= ceil($num_rows/21) ; $x++) { ?>
  <section class="sheet padding-20mm"  style="font-family:  Calibri,cursive;" >
  <table width="669" border="1px" dir="rtl" style=" border-collapse: collapse; font-size: 13px; margin-left: auto; margin-right: auto;">
<tbody>
<tr style="height: 0px;">
<td colspan="6" rowspan="2" width="669" style="height: 40px; text-align: center;font-size:18px;background: pink;font-weight: bold">جدول (4) پیشنهاد اجناس و خدمات جهت ترمیم جنراتور قطعات و جزوتام های وزارت دفاع ملی</td>
</tr>
<tr style="height: 21px;"></tr>
<tr style="height: 21px;">
<td colspan="3" width="344" style="height: 21px;">&nbsp; ترمیم جنراتور معه عکس تاریخدار با سایت پلان ساحه آن موجود&nbsp; است یا خیر؟</td>
<td colspan="2"   style="height: 21px;text-align: center;">بلی</td>
<td  colspan="2" style="height: 21px;text-align: center;">خیر</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp; محل؛ قطعه؛ جزوتام ویا قل اردو مربوطه:</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp; تاریخ تشخیص عوارض جنراتور:</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp; نمبر لات و قرار داد و سریال نمبر جنراتور:</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp; تاریخ تسلیمی فورم هذا:</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp; تشریح ترمیم جنراتور:</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp;مدت زمان تخمینی مورد نیاز ترمیم جنراتور:</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp;توجیهات زمان تخمینی ترمیم جنراتور:</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
<!-- <tr style="height: 21px;">

</tr>
 --><tr style="height: 21px;">
<td colspan="6" style="height: 21px;text-align: right;background: pink;font-size:15px;font-weight: bold" >&nbsp; لیست اجناس ترمیم جنراتورها</td>
</tr>
<tr style="height: 41px;text-align: center;font-weight: bold;">
<td style="height: 41px;">شماره</td>
<td style="height: 41px;">مشخصات جنس</td>
<td style="height: 41px;">تعداد</td>
<td style="height: 41px;">واحد قیاسی</td>
<td width="108" style="height: 41px;">قیمت فی واحد (شامل قرارداد)</td>
<td style="height: 41px;">قیمت مجموعی</td>
</tr>
<?php $i = 1; ?>
<?php foreach ($internal as $row) {?>
<?php if ($i>=$number) {?>

<tr style="height: 21px;text-align: center;">
<td style="height: 21px;"><?php echo $i?></td>
<td style="height: 21px;text-align: right;"><?=$row->g_f_r_porduct_name ?></td>
<td style="height: 21px;"><?=$row->g_f_r_quantity?></td>
<td style="height: 21px;"><?=$row->g_f_r_unit?></td>
<td style="height: 21px;">&nbsp;</td>
<td style="height: 21px;">&nbsp;</td>
</tr>

<?php } ?>
<?php $i++; ?>
<?php if ($i==$row_number_show) { ?>
<?php $number=$number+20;; $row_number_show=$row_number_show+20; break; } ?>
<?php } ?>

 <?php if
($x==ceil($num_rows/21)) { ?>
<tr style="height: 21px;"> <td colspan="5" style="height: 21px;">میزان جنس
(افغانی)</td> <td style="height: 21px;">&nbsp;</td> </tr>
 <tr style="height: 21px;"> <td colspan="6"
style="height: 21px;text-align:right;background: pink;font-size: 15px;font-
weight: bold;">&nbsp; لیست پروسه های خدماتی ترمیم جنراتورها:</td> </tr> <tr
style="height: 41px;text-align: center;font-weight: bold;"> <td style="height:
41px;">شماره</td> <td style="height: 41px;">مشخصات پروسه کاری خدماتی</td> <td
style="height: 41px;">تعداد</td> <td style="height: 41px;">واحد قیاسی</td> <td
width="108" style="height: 41px;">قیمت فی واحد (شامل قرارداد)</td> <td
style="height: 41px;">قیمت مجموعی</td> </tr> <tr style="height: 21px;"> <td
style="height: 21px;">1</td> <td style="height: 21px;">&nbsp; ترمیم اساسی یک
پایه جنراتور <?php foreach ($data as $key) {?>
<?=$key->g_s_generator_capacity?>  <?php } ?> نوع
<?=$key->g_s_generator_type?></td> <td style="height: 21px;">1</td> <td
style="height: 21px;">پایه</td> <td style="height: 21px;">&nbsp;</td> <td
style="height: 21px;">&nbsp;</td> </tr> <tr style="height: 21px;"> <td
colspan="5" style="height: 21px; text-align: center;">میزان خدمات
(افغانی)</td> <td style="height: 21px;">&nbsp;</td> </tr>

<tr style="height: 21px;">
<td colspan="5" style="height: 21px; text-align: center;">مــــــــــیزان عمومی به افغانی (جنس و خدمات)</td>
<td style="height: 21px;">&nbsp;</td>
</tr>
<?php } ?>
<tr style="height: 21px;">

</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;text-align: center;background: pink;font-size: 15px;font-weight: bold;">ارگان های مربوطه</td>
<td colspan="3" style="height: 21px;;text-align: center;background: pink;font-size: 15px;font-weight: bold;">محل امضا</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp; مرور و تصدیق آمریت تسهیلات انجنیری قطعه :</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp; مرور و تصدیق نماینده ریاست اکمال و خریداری:</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
<tr style="height: 21px;">
<td colspan="3" style="height: 21px;">&nbsp; مرور و تصدیق ریاست ساختمانی و اداره ملکیت ها:</td>
<td colspan="3" style="height: 21px;">&nbsp;</td>
</tr>
</tbody>
</table>

  </section>
<?php } ?>
</body>

</html>
