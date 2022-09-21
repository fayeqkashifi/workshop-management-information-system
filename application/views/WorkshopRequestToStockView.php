<!-- page content -->
<div class="right_col" role="main">
                <div class="page-title">
            <div class="title_left">
                <h3>فورم درخواست دیپو
                    <b> (ریکوست)</b>
                </h3>
            </div>
    </div>
                <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
           <div class="x_panel">
                    <div class="x_title">
                      <button onclick="add()" type="button" id="btn_add" class="btn  btn-success btn-xs" value="2">اضافه کردن</button>
                       <button onclick="btn_remove()" type="button" id="btn_remove" class="btn  btn-xs btn-sm btn-danger" >حذف کردن</button>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?=base_url()?>index.php/invoiseController/checkAddInvoise" enctype="multipart/form-data">


                        <table  class="table  table-striped jambo_table bulk_action">
                            <tbody >


                            <tr id="row1">

                                <th rowspan="2"> # 1
                                </th>
								<th width="8%" >اسم جنس
                                </th>
                                <td width='20%'>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <select class="form-control" name="invoise_state" required="required">
                                                <option value=""></option>
                                                <option value="1">اسم جنس ها</option>

                                            </select>
                                                    <?php if(!empty($error_costomar_name)){?>
                                              <span class="help-block-error" style="color:red;"><?=$error_costomar_name?></span>
                                                 <?php }?>
                                        </div>
                                    </div>
                                </td>
                                <th width="8%" >مشخصات
                                </th>
                                <td width='20%'>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <select class="form-control" name="invoise_state" required="required">
                                                <option value=""></option>
                                                <option value="1">مشخصات</option>

                                            </select>
                                                    <?php if(!empty($error_costomar_name)){?>
                                              <span class="help-block-error" style="color:red;"><?=$error_costomar_name?></span>
                                                 <?php }?>
                                        </div>
                                    </div>
                                </td>
                                <th>تعداد</th>
                                <td width="20%">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="number" min="1" max="" placeholder="عدد" id="invoise_namber" name="invoise_namber" required="required"
                                                   class="form-control col-md-7 col-xs-12">

                                        </div>
                                    </div>
                                </td>
                                <th width='8%'>سریال نمبر</th>
                                <td width='20%'>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                             <input type="text" required="required" value="r34565675" readonly="readonly" id="invoise_date" name="invoise_date"
                                                   class="form-control col-md-7 col-xs-12">
                                            <?php if(!empty($error_invoise_state)){?>
                                                  <span class="help-block-error" style="color:red;"><?=$error_invoise_state?></span>
                                                 <?php }?>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr id="yes">
                            </tr>

                            </tbody>
                        </table>

                        <div class="x_title col-md-12 col-sm-12 col-xs-12" >
                            <input  type="hidden" id="btn_value" value="" name="btn_hidden" />
                            <div class="form-group" style="">
                                <div style="float: left;margin-left: 20px">
                                    <a href="<?=base_url()?>index.php/invoiseController/index" class="btn btn-round btn-app"><i class="fa  fa-mail-reply-all"></i>انصراف</a>

                                    <button type="submit" class="btn btn-app" id="submit" name="addInvoise"><i class="fa fa-save"></i> ذخیره</button>
                                </div>
                            </div>
                        </div>
                   </div>

            </div>
        </div>
      </div>
    </div>
</div>
<!-- /page content -->

<script src="<?=base_url()?>/assets/js/jquery-1.11.0.min.js"></script>

<script>

    $(document).ready(function(){
        var date = new  Date();
        if(date.getMonth()<10 && date.getDate()<10){
            $('#invoise_date').val(date.getFullYear()+'-0'+(date.getMonth()+1)+'-0'+date.getDate());
        }else if(date.getMonth()<10 && date.getDate()>9){
            $('#invoise_date').val(date.getFullYear()+'-0'+(date.getMonth()+1)+'-'+date.getDate());
        }else if(date.getMonth()>9 && date.getDate()<10){
            $('#invoise_date').val(date.getFullYear()+'-'+(date.getMonth()+1)+'-0'+date.getDate());
        }else if(date.getMonth()>9 && date.getDate()>9){
            $('#invoise_date').val(date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate());
        }
        else{
            $('#invoise_date').val(date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate());
        }

    });
    function getBtnvalue(){
        var btn_value = $("#btn_add").val()
        $("#btn_value").val(btn_value);
    }

    function getProductNameIds1(){
        var mah = $("#product_name").val();

        if(mah=="not"){
            window.alert("good time");
            $("#submit").css("");
        }
        var productIds = document.getElementById("productIds");
        $(productIds).empty();
        $.ajax({
            type: "POST",
            url: "<?=base_url();?>index.php/invoiseController/getProductNameIds",
            data: {product_name_id:mah},
            dataType: "JSON",
            success: function(data) {
                for(var i = 0; i < data.length; i++){
                     $(productIds).append('<option value='+data[i]['product_id']+'>'+data[i]['product_code_number']+'</option>');
                 }
                getIds1();
            },
            error: function(err) {
              window.alert("موجود نسیت");
            }
        });
    }
    function getIds1(){
        var mah = $("#productIds").val();
        if(mah==""){
            window.alert("لطفا جنس  را وارد کنید");
        }else{
            var productQuentity = document.getElementById("product_quentity");
            var productRate = document.getElementById("product_rate");
            var productEndRate = document.getElementById("product_end_price");
            var productRateParchise = document.getElementById("product_rate_parchise");
            $.ajax({
                type: "POST",
                url: "<?=base_url();?>index.php/invoiseController/getProductIds",
                data: {product_id:mah},
                dataType: "JSON",
                success: function(data) {
                    for(var i = 0; i < data.length; i++){
                        $(productQuentity).val(data[i]['product_quantity']);
                        $(productRateParchise).val(data[i]['product_price']+' افغانی');

                        $(productRate).val(data[i]['product_price']);
                        $(productEndRate).val(' $ '+data[i]['product_end_price']);
                        $("#new_quentity").attr("max",data[i]['product_quantity']);

                    }
                    $('#new_quentity').val(0);
                    $('#total').val(0);
                },
                error: function(err) {
                  window.alert("موجود نسیت"+err);
                }
            });
        }
    }


    function sub1(){
        var nq = $('#new_quentity').val();
        var pq = $('#product_quentity').val();
        var sub =  pq - nq;
        var rate = $('#product_rate').val();
        var mul = nq * rate;
        $('#total').val(mul);
        $('#product_quentity').val(sub);

    }
    function sum1(){
        var nq = $('#new_quentity').val();
        var pq = $('#product_quentity').val();
        $('#product_quentity').val(parseInt(nq) + parseInt(pq));
    }

    function btn_remove(){
        var btn_add_value = $("#btn_add").val();
        if(btn_add_value == 2){

        }else{
            var btn_remove = btn_add_value-1;
            $(".row"+btn_remove).remove();
            $("#btn_add").val(parseInt(btn_remove));
            $("#btn_value").val(parseInt(btn_remove));
        }
    }


/////////////// add btn ///////////////////////////

function add(){
        getBtnvalue();
        var btn_val = $("#btn_add").val();
        var row11 = '<tr class="row'+btn_val+'">'
                                +'<th rowspan="2"> # '+btn_val+''
                                +'</th>'
                                +'<th>اسم جنس</th>'
                                +'<td>'
                                  +'  <div class="form-group">'
                                    +'    <div class="col-md-12 col-sm-12 col-xs-12">'
                                        +'    <select class="select2_single form-control" name="product_name_id'+btn_val+'" onchange="getProductNameIds('+btn_val+')" id="product_name'+btn_val+'" required="required">'
                                          +'  <option value=""></option>'
                                            +'<?php foreach ($data as $row) {?>'
                                           +' <option value="<?=$row->product_name_id?>"><?=$row->product_name?></option>'
                                           +' <?php } ?>'
                                           +' </select>'
                                       +' </div>'
                                   +' </div>'
                               +' </td>'
                               +'<th>سایز جنس</th>'
                                +'<td>'
                                  +'  <div class="form-group">'
                                    +'    <div class="col-md-12 col-sm-12 col-xs-12">'
                                        +'    <select class="select2_single form-control" name="product_id'+btn_val+'" onchange="getIds('+btn_val+')" id="productIds'+btn_val+'" required="required">'
                                           +' </select>'
                                       +' </div>'
                                   +' </div>'
                               +' </td>'
                               +' <th>تعداد موجود</th>'
                               +' <td>'
                                 +'   <div class="form-group">'
                                   +'     <div class="col-md-12 col-sm-12 col-xs-12">'
                                     +'       <input type="text" placeholder="تعداد جنس" id="product_quentity'+btn_val+'" name="product_quentity'+btn_val+'" class="form-control col-md-7 col-xs-12"  required="required" readonly="readonly">'
                                        +'            <?php if(!empty($error_order_quantity)){?>'
                                          +'      <span class="help-block-error" style="color:red;"><?=$error_order_quantity?></span>'
                                            +'     <?php }?>'
                                      +'  </div>'
                                   +' </div>'
                               +' </td>'
                               +' <th>قیمت تمام شد</th>'
                               +' <td>'
                                 +'   <div class="form-group">'
                                   +'     <div class="col-md-12 col-sm-12 col-xs-12">'
                                     +'       <input type="text" placeholder="قیمت تما شده جنس" id="product_end_price'+btn_val+'" class="form-control col-md-7 col-xs-12"  required="required" readonly="readonly">'
                                             +'       <?php if(!empty($error_order_rate)){?>'
                                             +'   <span class="help-block-error" style="color:red;"><?=$error_order_rate?></span>'
                                              +'   <?php }?>'
                                  +'      </div>'
                                 +'   </div>'
                              +'  </td>'
                         +'   </tr>';
        var row22 =   '<tr class="row'+btn_val+'">'
                                +'  <th>اصل قیمت فروش</th>'
                              +'  <td>'
                                +'    <div class="form-group">'
                                  +'      <div class="col-md-12 col-sm-12 col-xs-12">'
                                    +'        <input type="text" placeholder="قیمت فروش" id="product_rate_parchise'+btn_val+'"           name="order_price"   class="form-control col-md-7 col-xs-12" readonly="readonly" required="required">'
                                           +'         <?php if(!empty($error_order_rate)){?>'
                                             +'   <span class="help-block-error" style="color:red;"><?=$error_order_rate?></span>'
                                              +'   <?php }?>'
                                      +'  </div>'
                                +'    </div>'
                            +'    </td>'
                                +'<th>قیمت فروش</th>'
                            +'    <td>'
                              +'      <div class="form-group">'
                                +'        <div class="col-md-12 col-sm-12 col-xs-12">'
                                  +'          <input type="text" placeholder="قیمت فروش" id="product_rate'+btn_val+'" name="order_price'+btn_val+'" onblur="sub('+btn_val+')" onfocus="sum('+btn_val+')"                class="form-control col-md-7 col-xs-12" required="required">'
                                                   +' <?php if(!empty($error_order_rate)){?>'
                                           +'     <span class="help-block-error" style="color:red;"><?=$error_order_rate?></span>'
                                            +'     <?php }?>'
                                    +'    </div>'
                                +'    </div>'
                            +'     </td>'
                            +'    <th>تعداد جنس</th>'
                            +'    <td>'
                            +'        <div class="form-group">'
                              +'          <div class="col-md-12 col-sm-12 col-xs-12">'
                                +'            <input type="number" min="0"  placeholder="عداد جنس به فوشنده" id="new_quentity'+btn_val+'" name="order_quantity'+btn_val+'" class="form-control col-md-7 col-xs-12" onblur="sub('+btn_val+')" onfocus="sum('+btn_val+')" value="0">'
                                    +'                <?php if(!empty($error_order_quantity)){?>'
                                      +'          <span class="help-block-error" style="color:red;"><?=$error_order_quantity?></span>'
                                        +'         <?php }?>'
                                   +'     </div>'
                                +'    </div>'
                            +'    </td>'
                            +'    <th>مجموعه</th>'
                            +'    <td colspan="3">'
                            +'        <div class="form-group">'
                            +'           <div class="col-md-12 col-sm-12 col-xs-12">'
                            +'                <input type="text" placeholder="تعداد * قیمت جنس"  name="order_total'+btn_val+'"                        class="form-control col-md-7 col-xs-12" id="total'+btn_val+'"  required="required" readonly="readonly">'
                                        +'            <?php if(!empty($error_order_total)){?>'
                                         +'       <span class="help-block-error" style="color:red;"><?=$error_order_total?></span>'
                                        +'         <?php }?>'
                                    +'    </div>'
                                +'    </div>'
                            +'    </td>'
                        +'    </tr>';
        $('#row2').after(row11+row22);
        $("#btn_add").val(parseInt(btn_val)+parseInt(1));
        $("#btn_value").val(parseInt(btn_val)+parseInt(1));

    }

    function getProductNameIds(num){
        var mah = $("#product_name"+num).val();

        if(mah=="not"){
            window.alert("good time");
            $("#submit").css("");
        }
        var productIds = document.getElementById("productIds"+num);
        $(productIds).empty();
        $.ajax({
            type: "POST",
            url: "<?=base_url();?>index.php/invoiseController/getProductNameIds",
            data: {product_name_id:mah},
            dataType: "JSON",
            success: function(data) {
                for(var i = 0; i < data.length; i++){
                     $(productIds).append('<option value='+data[i]['product_id']+'>'+data[i]['product_code_number']+'</option>');
                 }
                getIds(num);
            },
            error: function(err) {
              window.alert("موجود نسیت");
            }
        });
    }
    function getIds(num){
        var mah = $("#productIds"+num).val();
        if(mah==""){
            window.alert("لطفا کود نمبر را وارد کنید");
        }else{
            var productQuentity = document.getElementById("product_quentity"+num);
            var productRate = document.getElementById("product_rate"+num);
            var productEndRate = document.getElementById("product_end_price"+num);
            var productRateParchise = document.getElementById("product_rate_parchise"+num);


            $.ajax({
                type: "POST",
                url: "<?=base_url();?>index.php/invoiseController/getProductIds",
                data: {product_id:mah},
                dataType: "JSON",
                success: function(data) {
                    for(var i = 0; i < data.length; i++){
                        $(productQuentity).val(data[i]['product_quantity']);
                        $(productRateParchise).val(data[i]['product_price']+' افغانی');

                        $(productRate).val(data[i]['product_price']);
                        $(productEndRate).val(' $ '+data[i]['product_end_price']);
                        $("#new_quentity"+num).attr("max",data[i]['product_quantity']);

                    }
                    $('#new_quentity'+num).val(0);
                    $('#total'+num).val(0);
                },
                error: function(err) {
                  window.alert("موجود نسیت");
                }
            });
        }
    }
    function sub(num){
        var nq = $('#new_quentity'+num).val();
        var pq = $('#product_quentity'+num).val();
        var sub =  pq - nq;
        var rate = $('#product_rate'+num).val();
        var mul = nq * rate;
        $('#total'+num).val(mul);
        $('#product_quentity'+num).val(sub);

    }
    function sum(num){
        var nq = $('#new_quentity'+num).val();
        var pq = $('#product_quentity'+num).val();
        $('#product_quentity'+num).val(parseInt(nq) + parseInt(pq));
    }
</script>
