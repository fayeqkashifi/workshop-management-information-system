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
  <section class="sheet padding-10mm">
    <?php foreach ($data as $row) {?>
    <table width="100%" dir="rtl" height=100% style="font-family:Calibri;font-size: 16px">

      <thead >

        <tr height="200px"   style="text-align: center;"> 
         <td  width="30%" style=" font-weight: bold;">
            جمهوری اسلامی افغـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــانستان
            <br>
            وزارت دفــــــــــــــــــــــــــــــــــــــــــاع ملی
          </td>
          <td  width="40%">
            <img src="<?=base_url();?>/assets/logo/afghanistan.png"   width="100px" alt=""><br>
          <span style="font-weight: bold;">
            ریاست امور ســــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــاختمانی و ملکیت ها</span><br>
            مدیریت عمومی تنظیم و اداره قرارداد و ساختمانی <br>
            مدیریت حمایه تاسیسات ساحوی کابل
          </td>
            
           <td width="30%" style="font-weight: bold;">
            <br><br>
            <br><br>
            Islamic Republic of Afghanistan<br>
            Ministry of Defense<br><br>
            ملاحظه شد: <br>
            رئیس امور ساختمانی و ملکیتها<br>
            نجیب الله شینواری
          </td>


         </tr>  
         <tr height="100px"  style="text-align: right; font-weight: bold;">
           
          <td colspan="3">
            <p style="padding-right: 50px">نمبر ثبت :<br>
            تاریخ:<br><br>
          </p>
             <p style="margin-right:  50px">
            سند تسلیمی تکمیل شده (قرار داد نمبر (MOD/NC0084/22405/1397) امورات ترمیم اساسی یک پایه جنراتور  <?=$row->g_r_generator_location ?> ).</p>
          </td>

         </tr> 
          <tr height="200px"  style="text-align: right; font-weight: bold;">
           
            <td colspan="3"  >
           <p style="border: 2px solid black; margin-left:50px;margin-right: 50PX; margin-top: -20px; padding:30px">
               قرارداد امورات ترمیم اساسی یک پایه جنراتور<span dir="ltr" >  <?=$row->g_s_generator_capacity ?> &nbsp</span> دارای سریال نمبر ( <?=$row->g_r_serial_number ?> ) که کار آن (100%) تکمیل گردیده است.
             </p>          
              <p style="margin-right:  50px">
             امور ترمیم اساسی ذکر شده صورت گرفته صحت است.
            
             <p style="margin-right:  350px">با احترام</p> 
             <p>

             </td>

         </tr > 
            <tr   style="text-align: right;font-size: 14px;font-weight: bold;">
           
            <td style="padding-right: 50px">
            شرکت متعهد: شرکت ساختمانی مجتبی علی

             </td>

            <td style="padding-right: 50px"> 
              <span >
              انجنیر مراقبت کننده </span>
              <span style="float: left"> 
                مدیر تسهیلات 
                
              </span>
          

             </td>

            <td style="text-align: center;">

              قوماندان قطعه
          

             </td>

            
         </tr> 
         <tr >
           <td height="90px" colspan="3"> </td>
         </tr>

     <tr   style="text-align: center;font-size: 14px;font-weight: bold;">
           
            <td style="float: left">
             مدیر حمایه تاسیسات ساحوی کابل

             </td>

            <td  colspan="2" style="padding-right:100px "> 
              
              <span> 
                مدیر عمومی تنظیم و اداره قرار داد و ساختمان 
                
              </span>
          

             </td>

         

            
         </tr> 
      
      </thead>
      
    


    </table>
 <?php } ?>

  </section>

</body>

</html>
