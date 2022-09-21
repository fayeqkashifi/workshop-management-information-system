<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE HEADER-->

        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?=base_url();?>DashboardController">صفحه اصـــلی</a>
                    <i class="fa fa-angle-left"></i>
                </li>
                <li>
                    <span>اضــافه کردن تصاویر جنراتور</span>
                </li>
            </ul>

        </div>
        <!-- END PAGE HEADER-->
        <div class="portlet light portlet-fit portlet-form ">
                      <div class="portlet-title">
                          <div class="caption">
                              <i class="icon-bubble font-green"></i>
                              <span class="caption-subject font-green bold uppercase">اضــافه کردن تصاویر جنراتور</span>
                          </div>

                </div>



        <div class="row">




            <div class="col-md-12">

                <form id="fileupload" data-parsley-validate action="<?=base_url()?>GeneratorWorkFlowPhotosController/insertForm" method="POST" enctype="multipart/form-data">
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->

                    <div class="col-md-offset-2 col-md-10   margin-top-20">
                        <label class="control-label col-md-2" style="font-weight:bolder;font-size:20px">معلومات

                            <span class="required"> * </span>
                        </label>
                        <div class="col-md-4" >
                            <div class="input-icon right">
                              <i class="fa"></i>
                                <textarea type="text" required="required" placeholder="لطفا درمورد تصویر معلومات بدهید ." rows="5" class="form-control" name="g_w_p_comment" /></textarea>
                            </div>

                        </div>
                    </div>
                  </br>
                </br>
              </br>
                  </br>

                  <div class="row">
                      <div class="col-md-offset-4 col-md-8 margin-top-20 ">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn green fileinput-button">
                                <i class="fa fa-plus"></i>
                                <span style="font-size:15px"> اضــافه کنید </span>

                                <input type="file" name="g_s_photo" multiple=""> </span>

                                <a href="<?=base_url();?>GeneratorDetailController" class="btn blue start">
                                <i class="fa fa-reply"></i>
                                <span  style="font-size:15px"> بازگشت</span>
                            </a>
                            <!-- <button type="reset" class="btn warning cancel">
                                <i class="fa fa-ban-circle"></i>
                                <span> Cancel upload </span>
                            </button>
                            <button type="button" class="btn red delete">
                                <i class="fa fa-trash"></i>
                                <span> Delete </span>
                            </button>
                            <input type="checkbox" class="toggle"> -->
                            <!-- The global file processing state -->
                            <span class="fileupload-process"> </span>
                        </div>

                        <!-- The global progress information -->
                        <div class="col-lg-5 fileupload-progress fade">
                            <!-- The global progress bar -->
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-success" style="width:0%;"> </div>
                            </div>
                            <!-- The extended global progress information -->
                            <div class="progress-extended"> &nbsp; </div>
                        </div>
                    </div>



                    <input type="hidden" name="g_r_id" value="<?=$g_r_id?>">
                    <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped clearfix">
                        <tbody class="files"> </tbody>
                    </table>

                </form>

            </div>
        </div>
        </div>
        <!-- The blueimp Gallery widget -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
            <div class="slides"> </div>
            <h3 class="title"></h3>
            <a class="prev"> ‹ </a>
            <a class="next"> › </a>
            <a class="close white"> </a>
            <a class="play-pause"> </a>
            <ol class="indicator"> </ol>
        </div>
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <script id="template-upload" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                <td>
                    <span class="preview"></span>
                </td>
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger label label-danger"></strong>
                </td>
                <td>
                    <p class="size">Processing...</p>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                </td>
                <td> {% if (!i && !o.options.autoUpload) { %}
                    <button class="btn blue start" disabled>
                        <i class="fa fa-upload"></i>
                        <span>ذخیره </span>
                    </button> {% } %} {% if (!i) { %}
                    <button class="btn red cancel">
                        <i class="fa fa-ban"></i>
                        <span>منصرف</span>
                    </button> {% } %} </td>
            </tr> {% } %} </script>
        <!-- The template to display files available for download -->
        <script id="template-download" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview"> {% if (file.thumbnailUrl) { %}
                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery>
                            <img src="{%=file.thumbnailUrl%}">
                        </a> {% } %} </span>
                </td>
                <td>

                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td> {% if (file.deleteUrl) { %}
                    <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                        <i class="fa fa-trash-o"></i>
                        <span>Delete</span>
                    </button>
                    <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                    <button class="btn yellow cancel btn-sm">
                        <i class="fa fa-ban"></i>
                        <span>ذخیره شد</span>
                    </button> {% } %} </td>
            </tr> {% } %} </script>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
