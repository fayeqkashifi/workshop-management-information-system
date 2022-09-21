
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
<body class="A4 landscape" style="padding-left: 50px;padding-right: 50px">

  <!-- Each sheet element should have the class "sheet" -->   <!--
"padding-**mm" is optional: you can set 10, 15, 20 or 25 -->   <?php
$number=1;?> <?php $row_number_show=21;?> <?php for ($x=1; $x <=
ceil($num_rows/21) ; $x++) { ?>   <section class="sheet padding-10mm" >
<table width="100%" dir="rtl"  style="font-family:Calibri;font-size: 16px">

      <thead >

        <tr height="150px"   style="text-align: center;"> 
         
          <td  width="80%" colspan="3">
           
          <span style="font-weight: bold; font-size: 25px; padding-right:
          200px">   شرکت ساختـــــــــــــــــــــــــــــــــمانی مجتبی علی
          </span><br><br>
          <span style="padding-right:
          200px">
            جدول 1: جدول عوارض هفته وار
          جنــــــــــــــــــــــــراتور 
          </span>
        </td>
            
           <td width="20%" style="text-align: center;">
             <img src="<?=base_url();?>/assets/logo/logo2.png"   width="150px" alt=""><br>
          </td>


         

         
        </tr>
      </thead>
      
    


    </table>
     <?php foreach ($data as $row) {?>



    <table  dir="rtl" width="100%" =""  style="font-family:Calibri;font-size: 16px;border-collapse: collapse;" border="1">

      <thead >

       
         <tr height="30px"  style="text-align: right; font-weight: bold;">
           
          <td colspan="4">
                <span style="padding-right: 10px"> نمبر ثبت:</span>
                <span style="padding-right: 400px"> راپـــــــــــــــــــــــــــــــــور نقصیـــــــــــــــــــــــــــــــــه </span>                 
          </td>

         </tr> 
         
         <tr style="text-align: center; font-weight: bold;">
          <td width="10%"  >
            

            قول اردو و سایت 
          </td> 
          <td width="30%">
            ترمیم جنــــــــــــــــــــــــراتور

            
          </td> 
          <td  width="30%">
            وضعیت جنــــــــــــــــــــــــراتور
            

            
          </td> 
          <td width="30%">
            
              عوارض/پشنهادات جنــــــــــــــــــــــــراتور
            
          </td>
         </tr>
           
           
         <tr >
          
          <td  style="font-weight: bold; text-align: center;" rowspan="<?=$num_rows?>">
            <p style=";transform: rotate(90deg);">
              <?=$row->g_r_generator_location ?>
          </p>
          </td> 
          <?php $i = 1; ?>
<?php foreach ($internal as $row) {?>
          <?php if ($i>=$number) {?>
          <td  style="text-align: center;">
            <?=$row->g_f_r_porduct_name?>

            
          </td> 
          <td style="text-align: center;" >
          
              تخریب گردیده 

            
          </td> 
          <td style="text-align: center;" >
            جدید گردد
             
            
          </td>
         </tr>
        <?php } ?>
<?php $i++; ?>
<?php if ($i==$row_number_show) { ?>
<?php $number=$number+20;; $row_number_show=$row_number_show+21; break; } ?>
<?php } ?> 
        

         

      </thead>
      
    


    </table>

<?php } ?>
    <br>
    <div dir="rtl" style="font-family:Calibri;font-size: 16px;font-weight: bolder">
    <span style="padding-right: 10px ;"  > نماینده شرکت</span>
    <span style="padding-right: 400px" > مراقبت کننده </span>
    <span style="padding-right: 300px" > مدیر تسهیلات </span>
    </div>
  </section>
<?php }?>
</body>

</html>
