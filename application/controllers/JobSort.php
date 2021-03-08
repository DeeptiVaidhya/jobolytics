
<?php
 
class JobSort extends CI_Controller {
 
		public function __construct(){
		 
		    parent::__construct();
		    $this->load->helper('url');
		    $this->load->database();
		    $this->load->view('include/time_function');
		}
		 

		public function JobSortBYTime(){

		    $sort_value = $this->input->post("sort_value");
		    $job_title = $this->input->post("job_title");
		    if(!empty($job_title)){
		    	$condtion = "AND `job_title` = '".$job_title."'";	
		    }else{
		    	$condtion = "";
		    }
		    $sort_value;

		    switch ($sort_value) {
		    	case "last_mint":
			       		$query = "SELECT * FROM `job_posting`  WHERE `date` >= DATE_SUB(now(), INTERVAL 30 MINUTE) ".$condtion." ORDER BY `date` DESC ";
		   				$result =  $this->db->query($query)->result();
		   				//print_r($result);
			        break;
			    case "last_hour":
			           $query = "SELECT * FROM `job_posting`  WHERE `date` >= DATE_SUB(now(), INTERVAL 2 Hour) ".$condtion." ORDER BY `date` DESC";
		   				$result =  $this->db->query($query)->result();
		   				//print_r($result);
			        break;
			    case "last_days":
			        	$query = "SELECT * FROM `job_posting`  WHERE `date` >= DATE_SUB(now(), INTERVAL 3 DAY) ".$condtion." ORDER BY `date` DESC";
		   				$result =  $this->db->query($query)->result();
		   				//print_r($result);
			        break;
			     case "last_week":
			    		$query = "SELECT * FROM `job_posting`  WHERE `date` >= DATE_SUB(now(), INTERVAL 3 WEEK) ".$condtion." ORDER BY `date` DESC";
		   				$result =  $this->db->query($query)->result();
		   				//print_r($result);
			         
			        break;
			    case "last_month":
			            $query = "SELECT * FROM `job_posting`  WHERE `date` >= DATE_SUB(now(), INTERVAL 1 MONTH) ".$condtion." ORDER BY `date` DESC";
		   			    $result =  $this->db->query($query)->result();
		   			    //print_r($result);
			         
			        break;
			    default:
			        echo "No job found";
		    }


			if(!empty($result)){
				//echo count($job);
				$counter = 0;
				$parent = 1;
				foreach($result as $job_field){


				$time  =  time_elapsed_string($job_field->date, true).'</br>';
				$times  = explode (", ", $time);
          		//print_r($times);
                $time_count =  count($times);


          		if($time_count == 5){
              		//echo 'years';
              		$comm_time = $times[0].' ago';
         		}
         		else{
					$comm_time  = '';
			     }

                 if($time_count == 4){
                      //echo 'days';
                     $comm_time = $times[0].' ago';
                 }else{
					$comm_time  = '';
			     }


                if($time_count == 3){
                      //echo 'hours';
                      $comm_time = $times[0].' ago';
                  }
                else{
					$comm_time  = '';
				}


                if($time_count == 2){
                     // echo 'minutes';
                     $comm_time = $times[0].' ago';
                  }else{
					$comm_time  = '';
			     }


                if($time_count == 1){
                     // echo 'seconds ';
                      $comm_time = $times[0];

                  }else{
					$comm_time  = '';
			     }

			    if($counter == 0){
			    	if($parent == 1){
								$hide = "";
							} else {
								$hide = "style='display:none'";
							}
			    	  
			    	 echo '<ul class="post-job-bx browse-job show_result" id="parent'.$parent.'" '.$hide.'>';
			    	  $parent++;
			    }
			   

				echo '<li>
						<div class="post-bx">
							<div class="d-flex m-b30">
								<div class="job-post-company">
									<span><img alt="" src="'.base_url().'/assets/images/logo/icon1.png"/></span>
								</div>
								<div class="job-post-info">
									<h4><a href="'.base_url().'home/JobDetail">'.$job_field->job_title.'</a></h4>
									<ul>
										<li><i class="fa fa-map-marker"></i> '.$job_field->location.'</li>
										<li><i class="fa fa-bookmark-o"></i> '.$job_field->job_type.'</li>
										<li><i class="fa fa-clock-o"></i> Published ';
										if($time_count == 5){
	                                  		//echo 'years';
	                                  		echo $comm_time = $times[0].' ago';
	                             		}
	                             		else{
											$comm_time  = '';
									     }

						                 if($time_count == 4){
						                      //echo 'days';
						                     echo $comm_time = $times[0].' ago';
						                 }else{
											$comm_time  = '';
									     }


						                if($time_count == 3){
			                                  //echo 'hours';
			                                 echo $comm_time = $times[0].' ago';
			                              }
			                            else{
											echo $comm_time  = '';
										}


			                            if($time_count == 2){
			                                 // echo 'minutes';
			                                 echo $comm_time = $times[0].' ago';
			                              }else{
											$comm_time  = '';
									     }


			                            if($time_count == 1){
			                                 // echo 'seconds ';
			                                 echo  $comm_time = $times[0];

			                              }else{
											$comm_time  = '';
									     }

										 
								echo' </li>
									</ul>
								</div>
							</div>
							<div class="d-flex">
								<div class="job-time mr-auto">';
								$job_types  = $job_field->job_type;
								$job_type = explode(", ",$job_types);
								foreach ($job_type as $key => $value) {
									echo '<a href="javascript:void(0);"><span>'.$value.'</span></a>&nbsp;&nbsp;';
								}

					 echo '</div>
								<div class="salary-bx">
									<span>'.$job_field->salary.'</span>
								</div>
							</div>
							<label class="like-btn">
								  <input type="checkbox">
								  <span class="checkmark"></span>
							</label>
						</div>
					</li>';

					$counter++;
					if($counter == 5){
						echo '</ul>';
						$counter = 0;
					}
					
			}
		}

		else {
				echo '
					<ul class="post-job-bx browse-job" id="0">
						<li><div class="post-bx">
								<div class="d-flex m-b30">
									<div class="job-post-company">
										<span><img alt="" src="'.base_url().'assets/images/logo/icon1.png"></span>
									</div>
									<div class="job-post-info">
										<h4>No job found </h4>
										 
									</div>
								</div>
								 
							</div>
						</li>
					</ul>';

				$counter = "";
			}
				 
		}

	}
?>