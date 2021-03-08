<style>
   textarea.desc,textarea.address{
   outline: none;
   }
</style>
<div id="content-wrapper" class="d-flex flex-column">
   <div id="content">
      <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top">
         <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
         <i class="fa fa-bars"></i>
         </button>
         <h1 class="h3 mb-0 text-gray-800"> Add Table </h1>
         <!-- Topbar Navbar -->
         <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Alerts -->
            <li class="nav-item">
               <a class="nav-link" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span><img src="<?php echo base_url($this->config->item("new_theme")."/assets/img/top_menu_icn1.png");?>"></span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span><img src="<?php echo base_url($this->config->item("new_theme")."/assets/img/top_menu_icn2.png");?>"></span>
               <span class="badge badge-danger badge-counter">3+</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span><img src="<?php echo base_url($this->config->item("new_theme")."/assets/img/top_menu_icn3.png");?>"></span>
               </a>
            </li>
            <!-- Nav Item - User Information -->
            <li class="nav-item">
               <a class="nav-link" href="#" id="">
               <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ""._get_current_user_name($this)."" ; ?>
               </span>
               <?php 
                  $z = _get_current_user_id($this);
                  $img=$this->db->query("SELECT * FROM `users` where user_id='".$z."' ") ;
                  $image= $img->result();
                  //echo $z;
                  foreach($image as $row){
                  ?>
               <img class="img-profile rounded-circle" src="<?php echo $this->config->item('base_url').'/uploads/profile/'.$row->user_image ?>" />
               <?php } ?>
               </a>
            </li>
         </ul>
         <!-- </div> -->
      </nav>
      <div class="container-fluid">
         <?php  if(isset($error)){ echo $error; }
            echo $this->session->flashdata('message'); 
            ?>
         <div class="row">
            <form action="<?php echo base_url("farmer/addNumberTable");?>" method="post" enctype="multipart/form-data" class="form-horizontal" >
               <div class="col-md-12">
                  <div class="main_bg_box">
                     <div class="add_product">
                       
                        <div class="col-md-12">
                           <div class="form-group label-floating is-empty">
                              <label class="label-on-left">Number Of Table *</label>                                                  
                              <input type="text" name="number_of_table" class="form-control"  placeholder="Number Of Table" required="" />
                              <span class="material-input"></span>
                           </div>
                        </div>
                       
                        <div class="col-md-12">
                           <div class="form-group submit_btn">
                              <input type="submit" class="btn btn-fill btn-rose" name="addcatg" value="Save" style="float: right!important;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(document).ready(function() {
       md.initSliders()
       demo.initFormExtendedDatetimepickers();
   });
</script>