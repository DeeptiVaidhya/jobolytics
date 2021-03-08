
<div id="content-wrapper" class="d-flex flex-column">
<style>
  #datatables_wrapper{
    padding:5%;
  }
</style>
<div id="content">
<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top">
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
<i class="fa fa-bars"></i>
</button>
<h1 class="h3 mb-0 text-gray-800"> All Menu </h1>

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
        <div class="col-xl-12">
        <div class="card shadow table_order">
          <div class="card-body">
            <div class="box-header">
                
                <a class="btn btn-success pull-right" style="color: #fff;background-color: #99c83d;border-color: #99c83d;" href="<?php echo site_url("Restaurants/addMenus"); ?>">ADD MENU</a>                                    
            </div>


            <div class="table-responsive">
              <table class="table table-striped table-bordered"  id="example" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th class="text-center">ID</th>
                          <th class="text-center"> Name</th>
                          <th class="text-center">Description</th>
                          <th class="text-center">Prices</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Action</th>
                      </tr>
                    </thead>
                   <tbody>
                      <?php foreach($Menus as $menu){ ?>
                      <tr>
                      <td class="text-center"><?php echo $menu->shop_menu_id; ?></td>
                      <td class="text-center"><?php echo $menu->menu_name; ?></td> 
                      <td class="text-center"><?php echo $menu->description; ?></td>
                      <td class="text-center"><?php echo $menu->price; ?></td>
                      <td class="text-center"><?php if($menu->picture!=""){ ?><div class="cat-img" style="width: 50px;"><img width="100%" height="100%" src="<?php echo $this->config->item('base_url').'uploads/'.$menu->picture; ?>" /></div> <?php } ?></td>
                       <td class="td-actions text-centet"><div class="btn-group">
                      <?php echo anchor('Restaurants/editMenus/'.$menu->shop_menu_id, '<button type="button" rel="tooltip" class="btn btn-success btn-round">
                      <i class="material-icons">edit</i>
                      </button>', array("class"=>"")); ?>

                      <?php echo anchor('Restaurants/delete_menu/'.$menu->shop_menu_id, '<button type="button" rel="tooltip" class="btn btn-danger btn-round">
                      <i class="material-icons">close</i>
                      </button>', array("class"=>"", "onclick"=>"return confirm('Are you sure delete?')")); ?>

                      </div>
                      </td>
                     
                     
                    <?php } ?>
                    </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
    </div>
<!-- end row -->
</div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
   // alert('sas')
    $('#example').dataTable();
} );
</script>

            