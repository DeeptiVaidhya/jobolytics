<?php
$this->load->view('templates/header');
?>
<link rel="stylesheet" href="https://www.jobolytics.com/crop_assets/crop/css/cropper.css">
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
                                https://techarise.com/demos/codeigniter/assets/images/user-default.jpg
                                $url = "https://www.jobolytics.com/assets/images/".$userInfo['url']."";
                            } else {
                                $url = HTTP_IMAGES_PATH .'user-default.jpg';
                            }
                            ?>
                            <img src="<?php print $url;?>" alt="jaeeme" title="jaeeme" data-toggle="modal" data-target="#avatar-modal" id="render-avatar" class="circular-fix has-shadow border marg-top10" data-ussuid="<?php print base64_encode(1);?>" data-backdrop="static" data-keyboard="false" data-upltype="avatar" style="width:150px; height:150px; max-width: 150px; max-height: 150px;">
                            <i class="fa fa-pencil edit-pen"></i>
                        </div>
                    </div>
                   <!--  <div class="card-body info">
                        <div class="title">
                            <a href="<?php print site_url() ?>profile"><?php print $userInfo['full_name']; ?></a>
                        </div>
                        <div class="desc"> <a target="_blank" href="<?php print site_url(); ?>"><?php PRINT APPLICATION_NAME; ?></a></div>      
                        <div class="desc"><?php print $userInfo['email']; ?>, <?php print $userInfo['contact_no']; ?></div>      
                        <div class="desc"><?php print $userInfo['address']; ?></div>                                
                    </div> -->
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
<?php
$this->load->view('templates/footer');
$this->load->view('crop/profileAvatar');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.js"></script>
<script src="http://localhost/codeigniter-crop-image/assets/crop/js/cropper.js"></script>
<script src="http://localhost/codeigniter-crop-image/assets/crop/js/main.js"></script>`