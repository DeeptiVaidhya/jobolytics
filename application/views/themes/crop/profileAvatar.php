<style type="text/css">
    
.modal-header .close {
    margin-top: -2px;
}

button.close {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0;
}
.close {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
}

.modal-title{
        float: left;
    position: fixed;
}

.buttonText{
    line-height: 2.5rem;
}

.btn-primary {
    background-image: -webkit-linear-gradient(top,#bd2025 0,#bd2025 100%);
    background-image: -o-linear-gradient(top,#bd2025 0,#bd2025 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#bd2025),to(#265a88));
    background-image: linear-gradient(to bottom,#bd2025 0,#bd2025 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#bd2025', endColorstr='#bd2025', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    background-repeat: repeat-x;
    border-color: #bd2025;
}


.avatar-wrapper {
    height: 350px;
    width: 100%;
    margin-top: 15px;
    box-shadow: inset 0 0 5px rgba(0,0,0,.25);
    background-color: #fcfcfc;
    overflow: hidden;
}

.btn-primary:focus, .btn-primary:hover {
    background-color: #bd2025;
    background-position: 0 -15px;
}

.btn-primary:hover {
    color: #fff;
    background-color: #bd2025;
    border-color: #bd2025;
}

.panel-footer{
display: block !important;
    text-align: center !important;
}

.fa-rotate-left{
    line-height: initial;
}

</style>


<!-- Cropping modal -->
<div id="crop-avatar">
    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content panel-primary">
                <form class="avatar-form" action="<?php print site_url(); ?>crop/upload" enctype="multipart/form-data" method="post">
                    <div class="modal-header panel-heading">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Avatar</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Upload image and data -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" class="filestyle avatar-input" id="avatarInput" name="avatar_file">
                                </div>
                            </div>
                            <!-- Crop and preview -->                                
                            <div class="col-md-12">
                                <div class="avatar-wrapper"></div>
                            </div> 
                            <div class="avatar-upload">
                                <input type="hidden" id="upltypeid" class="upltypecls" name="upltype">    
                                <input type="hidden" id="ussmid" class="uss-id" name="ussid">  
                                <input type="hidden" class="avatar-src" name="avatar_src">
                                <input type="hidden" class="avatar-data" name="avatar_data">
                            </div>                                                 
                        </div>

                    </div>
                    <div class="modal-footer panel-footer">
                        <button type="button" class="avatar-btns btn btn-primary" data-method="rotate" data-option="-90" title="Rotate the image 9 degree to the left"><i class="fa fa-rotate-left"></i> Rotate</button>


                        <button type="button" class="avatar-btns btn btn-primary" data-method="rotate" data-option="-90" title="Rotate the image 9 degree to the right"><i class="fa fa-rotate-right"></i> Rotate</button>
                        <button type="submit" class="btn btn-primary avatar-save">Crop & Save</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    </div> 
                </form>
            </div>
        </div>
    </div><!-- /.modal -->
</div>
<!-- Loading state -->
<div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>