<script type="text/javascript">
jQuery(document).ready(function(e){

    $( 'textarea.short_description_editor' ).ckeditor();
    $( 'textarea.executive_summary_editor' ).ckeditor();
    $( 'textarea.testimonial_editor' ).ckeditor();
});
</script>
<div class="col-md-10 content-wraaper admin-wrap">
    <div class="sage-dash-wrap full-wrap">
        <div class="title dashboard-title">
            <h1>E|Icon Profile</h1>
            <?php echo $this->Html->link('Back',array('controller'=>'eluminatis','action'=>'index'),array('class'=>'right btn btn-orange-small')); ?>   
        </div>
        <div class="invite-user-form forms font-light add-elum">
            <?php echo $this->Form->create('Eluminati', array('class'=>'form-horizontal', 'enctype'=>'multipart/form-data'));?>  
            <div class="form-group">
                <label class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('first_name', array('class'=>'form-control', 'label'=>false,'value'=>$data_res['Eluminati']['first_name']));?>
                </div>
                <label class="col-sm-1 control-label">Last Name</label>
                <div class="col-sm-3">
                    <?php echo $this->Form->input('last_name', array('class'=>'form-control', 'label'=>false ,'value'=>$data_res['Eluminati']['last_name']));?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Title</label>
                <div class="col-sm-7">
                    <?php echo $this->Form->input('title', array('class'=>'form-control', 'label'=>false ,'value'=>$data_res['Eluminati']['title']));?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Short Bio</label>
                <div class="col-sm-7">
                    <?php echo $this->Form->textarea('short_description', array('class' => 'form-control short_description_editor', 'label' => false,'value'=>$data_res['Eluminati']['short_description'])); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Executive Summary</label>
                <div class="col-sm-7">
                    <?php echo $this->Form->textarea('executive_summary', array('class' => 'form-control executive_summary_editor', 'label' => false,'value'=>$data_res['Eluminati']['executive_summary'])); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Testimonial</label>
                <div class="col-sm-7">
                    <?php echo $this->Form->textarea('testimonial', array('class' => 'form-control testimonial_editor', 'label' => false,'value'=>$data_res['Eluminati']['testimonial'])); ?>
                </div>
            </div>

            <div class="form-group">
                    <label class="col-sm-2 control-label">Where will you live in Entropolis</label>
                    <div class="col-sm-7">
                              <label class="custom-select">
               <?php echo $this->Form->input('decision_type_id', array('options'=>$decisiontypes,'default' => $data_res['Eluminati']['decision_type_id'],'id'=>'decision_type_id', 'class'=>'form-control', 'label'=>false));?>                         
                </label>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Identify Yourself</label>
                    <div class="col-sm-7">
                              <label class="custom-select">
                    <?php echo $this->Form->input('stage_id', array('options'=>$stage,'default' => $data_res['Eluminati']['stage_id'],'id'=>'stage_id', 'class'=>'form-control', 'label'=>false));?>                       
                </label>
                    </div>
                </div>

            <div class="form-group">
                <label class="col-sm-2 control-label dashboard-label">Upload Image</label>
                <div class="col-sm-8">
                    <div class="attachment clearfix">
                        <div class="atch-wrapper clearfix">
                           
                            <input type="hidden" class="img-url"  name = "data[Eluminati][image_url]" value = "<?php echo $data_res['Eluminati']['image_url']; ?>" >  
                            <div class="image-bind">
                                 <?php if( $data_res['Eluminati']['image_url'] != ''){ ?>
                                <img src="<?php echo $this->Html->url('/').$this->Image->resize($data_res['Eluminati']['image_url'] . '', 80, 80, true);?>" class = "add-post-img img-thumbnail"> 
                                <?php }else{?>
                                <img src="<?php echo $this->Html->url('/').$this->Image->resize('upload/avatar-male-1.png' . '', 80, 80, true);?>" class="add-post-img img-thumbnail"> 
                                <?php } ?> 
                            </div>
                        </div>
                        <!-- atch-wrapper end --> 
                    </div>
                    <div class="brws-btn">    
                        <a class="escene-action-right" href="javascript:void(0);">
                        <input class="atch-new-image escene-action-input" type="file" name="files[]" data-url="<?php echo Router::url(array('controller'=>'eluminatis', 'action'=>'upload'));?>"/>
                        Browse</a> 
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label dashboard-label">E|Icon Badge</label>
                <div class="col-sm-8">
                    <div class="attachment clearfix">
                        <div class="atch-wrapper clearfix">
                            <input type="hidden" class="badge-url"  name = "data[Eluminati][eluminati_badge]" value = "<?php echo $data_res['Eluminati']['eluminati_badge']; ?>">                                                            
                            <div class="image-bind-data">
                                <?php if( $data_res['Eluminati']['eluminati_badge'] != ''){ ?>
                                <img src="<?php echo $this->Html->url('/').$this->Image->resize($data_res['Eluminati']['eluminati_badge'] . '', 80, 80, true);?>" class = "add-post-img img-thumbnail">
                                <?php }else{
                                    ?>
                                <img src="<?php echo $this->Html->url('/').$this->Image->resize('upload/avatar-male-1.png' . '', 80, 80, true);?>" class="add-post-img img-thumbnail"> 
                                <?php
                                    } ?> 
                            </div>
                        </div>
                        <!-- atch-wrapper end --> 
                    </div>
                    <!--  // <input type="file" name="data[Eluminati][image_url]">   -->
                    <div class="brws-btn">    
                        <a class="escene-action-right" href="javascript:void(0);">
                        <input class="atch-new-img escene-action-input" type="file" name="files[]" data-url="<?php echo Router::url(array('controller'=>'eluminatis', 'action'=>'upload'));?>">
                        Browse</a>  
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10"> 
                    <?php echo $this->Form->submit('Save', array('class'=>'btn btn-orange-small save-profile', 'div'=>false));?>
                </div>
            </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>
</div>
<!-- content-wraaper ends -->
<script type="text/javascript">
    var imageattach = {};
    //--------------------------- Attachments (File Upload)
    imageattach = {
        button: $('.atch-button'),
        wrapper: $('.atch-wrapper'),
        newFileButton: $('.atch-new-box'),
        newFile: $('.atch-new-image'),
        tempObject: null,
        bindUploader: function(object){ 
            if(!object || typeof object == 'undefined') return;
            object.fileupload({
                dataType: 'json',
                async:false,
                add: function (e, data) {
                    //console.log(data);
                    var goUpload = true;
                    var uploadFile = data.files[0];
                    //alert(uploadFile.name);
                    if (!(/\.(gif|jpg|jpeg|tiff|png)$/i).test(uploadFile.name)) {                 
                        // alert message
                        bootbox.alert("Please select image file of  jpg, jpeg, png or gif type only.");
                        goUpload = false;
                    }
                    
                    if (uploadFile.size > 5000000) { // 5mb
                        // alert message
                        bootbox.alert("Please upload a smaller image, max size is 5 MB.");
                        goUpload = false;
                    }
                    if (goUpload == true) {                                 
                        var img = data.submit();
                        var imgName = img.responseText;
                        //console.log(img.responseText);
                        
                        var str = '<div class="upload-post-img"><img class="add-post-img img-thumbnail" src="<?php echo Router::url('/', true); ?>'+imgName+'" width="80" height="80">\n\
    <input type="hidden" name="filesPath[]" value="'+imgName+'"></div>';
    jQuery(".image-bind").html('');
                        
                       jQuery(".image-bind").append(str);
                         jQuery(".img-url").val(imgName);
                    }
                },
                
                progressall: function (e, data) {
                    var $this = $(this);
                    
                    var progress = parseInt(data.loaded / data.total * 100, 10);    
                    $('.upload-progress-wrapper:hidden').fadeIn(100);   
                    $('.upload-progress-wrapper').find('.upload-progress-value span').text(progress);
                    console.log(data);
                }
            });
        } 
    };  
    
    imageattach.newFile.each(function(){     
        imageattach.bindUploader($(this));
    });
    
     var attachnewimage = {};
    //--------------------------- Attachments (File Upload)
    attachnewimage = {
        button: $('.atch-button'),
        wrapper: $('.atch-wrapper'),
        newFileButton: $('.atch-new-box'),
        newFile: $('.atch-new-img'),
        tempObject: null,
        bindUploader: function(object){ 
            if(!object || typeof object == 'undefined') return;
            object.fileupload({
                dataType: 'json',
                async:false,
                add: function (e, data) {
                    //console.log(data);
                    var goUpload = true;
                    var uploadFile = data.files[0];
                    //alert(uploadFile.name);
                    if (!(/\.(gif|jpg|jpeg|tiff|png)$/i).test(uploadFile.name)) {                 
                        // alert message
                        bootbox.alert("Please select image file of  jpg, jpeg, png or gif type only.");
                        goUpload = false;
                    }
                    
                    if (uploadFile.size > 5000000) { // 5mb
                        // alert message
                        bootbox.alert("Please upload a smaller image, max size is 5 MB.");
                        goUpload = false;
                    }
                    if (goUpload == true) {                                 
                        var img = data.submit();
                        var imgName = img.responseText;
                        //console.log(img.responseText);
                        
                        var str = '<div class="upload-post-img"><img class="add-post-img img-thumbnail" src="<?php echo Router::url('/', true); ?>'+imgName+'" width="80" height="80">\n\
    <input type="hidden" name="filesPath[]" value="'+imgName+'"></div>';
                        jQuery(".image-bind-data").html('');
                        //$('.upload-progress-value').html(str);
    jQuery(".image-bind-data").append(str);
                       jQuery(".badge-url").val(imgName);
                    }
                },
                
                progressall: function (e, data) {
                    var $this = $(this);
                    
                    var progress = parseInt(data.loaded / data.total * 100, 10);    
                    $('.upload-progress-wrapper:hidden').fadeIn(100);   
                    $('.upload-progress-wrapper').find('.upload-progress-value span').text(progress);
                    console.log(data);
                }
            });
        } 
    };  
    
    attachnewimage.newFile.each(function(){     
        attachnewimage.bindUploader($(this));
    });
    
</script>