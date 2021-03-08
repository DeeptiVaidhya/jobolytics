

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.min.css">


<style type="text/css">
    .edit-pen{
        position: absolute;
        color: #01579B;
        background: #fff;
        padding: 5px;
        box-shadow: 1px 1px 1px 1px #eee;
        border-radius: 17px;
        right: 329px;
        bottom: 2px;
        border: 1px solid #f1f1f1;
    }
</style>
<div class="row page-content">
    <div class="col-lg-12 text-right">
     
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card hovercard">                    
                    <div class="cardheader"> 
                        <div class="avatar" style="top: 11px;">
                            <?php
                            if(!empty($userInfo['url'])) {
                                $url = "<?= base_url(); ?>$userInfo['url']";
                            } else {
                                $url = "<?= base_url(); ?>user-default.jpg";
                            }
                            ?>
                            <img src="<?php echo  $url;?>" alt="jaeeme" title="jaeeme" data-toggle="modal" data-target="#avatar-modal" id="render-avatar" class="circular-fix has-shadow border marg-top10" data-ussuid="<?php print base64_encode(1);?>" data-backdrop="static" data-keyboard="false" data-upltype="avatar" style="width:150px; height:150px; max-width: 150px; max-height: 150px;">
                            <i class="fa fa-pencil edit-pen"></i>
                        </div>
                    </div>
                    <div class="card-body info">
                        <div class="title">
                            <a href="<?= base_url(); ?>profile"><?php print $userInfo['full_name']; ?></a>
                        </div>
                                                   
                    </div>
                    <div class="card-footer bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" rel="publisher" href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" rel="publisher" href="#">
                            <i class="fa fa-facebook"></i>
                        </a>                    
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.min.js"></script>