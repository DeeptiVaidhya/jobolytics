/*=============================================
				Add Delete Function
=============================================== */
$(document).ready(function () {
	var counter_project = 0;
	var count = 0;
	var x = 0;

	$(".addCF").click(function () {
		//counter_project = 0;
		counter_project = 0;
		count = count + 1;
		// x = count;
		//alert(count);
		$("#Addcompany").append('<div class="Addcompany" id="Addcompany">\
            <div class="col-md-12">\
              <div class="form-group clearfix">\
                <label for="pwd">Company Name</label>\
                <a href="javascript:void(0);" style="margin-left:10px;" class="float-right formbox1 remove_add_company"><i class="fa fa-minus" aria-hidden="true"></i></a>\
                <a href="javascript:void(0);" class="addCF plusAdd float-right formbox1"><i class="fa fa-plus"></i></a>\
                <input type="text" class="form-control formbox" id="companyid" name="company['+count+'][companyname]" required>\
              </div>\
            </div>\
            <div class="col-md-12">\
              <div class="form-group">\
                <label for="pwd">Company Email ID</label>\
                <input type="email" class="form-control formbox" id="comEmailid" name="company['+count+'][companyemail]">\
              </div>\
            </div>\
            <div class="col-md-12">\
              <div class="row">\
                <div class="col-sm-6">\
                  <div class="form-group">\
                    <label for="fname">From</label>\
                    <input type="date" class="form-control formbox" name="company['+count+'][startdate]" id="startdate" placeholder="DD/MM/YY" required>\
                  </div>\
                </div>\
                <div class="col-sm-6">\
                  <div class="form-group">\
                    <label for="lname">To</label>\
                    <input type="date" class="form-control formbox" name="company['+count+'][enddate]" id="todate" placeholder="DD/MM/YY" required disabled>\
                  </div>\
                </div>\
              </div>\
            </div>\
            <div class="col-md-12">\
              <div class="form-group">\
                <label for="pwd">Designation</label>\
                <input type="text" class="form-control formbox" name="company['+count+'][designation]" id="designation" required>\
              </div>\
            </div>\
            <div class="col-md-12">\
              <div class="boxxsize">\
                <label for="ctc">CTC</label>\
              </div>\
              <div class="row">\
                <div class="col-sm-6">\
                  <div class="form-group">\
                    <input type="text" class="form-control formbox" id="cts_lakhs" name="company['+count+'][cts_lakhs]" placeholder="Lakhs" required>\
                  </div>\
                </div>\
                <div class="col-sm-6">\
                  <div class="form-group">\
                    <input type="text" class="form-control formbox" id="cts_thousands" name="company['+count+'][cts_thousands]" placeholder="Thousands" required>\
                  </div>\
                </div>\
              </div>\
            </div>\
            <div class="projectAdd" id="projectAdd">\
              <div class="col-md-12">\
                <div class="form-group">\
                  <label for="pwd"> Projects</label>\
                  <input type="text" class="form-control formbox" id="proj" name="company['+count+'][pro_detail][0][project]" placeholder="Project title" required>\
                </div>\
              </div>\
              <div class="col-md-12">\
                <div class="form-group">\
                  <label for="cpwd"></label>\
                  <textarea class="form-control formbox" id="desp2" name="company['+count+'][pro_detail][0][project_description]" placeholder="Description" cols="2" rows="2" required></textarea>\
                </div>\
              </div>\
              <div class="col-md-12">\
                <div class="form-group">\
                  <label for="cpwd"></label>\
                  <input type="text" class="form-control formbox" id="url" name="company['+count+'][pro_detail][0][project_url]" placeholder="URL" required>\
                </div>\
              </div>\
            </div>\
            <div class="col-md-12 head-top bottomm">\
              <a href="javascript:void(0);" class="add_project text-center"><h3>Add more projects</h3></a>\
            </div>');
		/* $("#presnt"+count).click(function() {
		   $("#todate"+count).attr('disabled', !$("#todate").attr('disabled'));
		});  */
		/*
		$("input[name='atpresent']").click(function () {
			if ($("#presnt"+count).is(":checked")) {
				$("#todate"+count).attr("disabled", "disabled");
				alert('if'+count);
			} else {
				$("#todate"+count).removeAttr("disabled", "disabled");
				alert('else'+count);
			}
		});
		*/

		console.log(count);


		/* tdate disable when click on 'at present'  button  */
		$("body").on('click', 'input[name="atpresent"]', function () {
			var id = $(this).attr('id');
			var id2 = id.split('_');
			$('[id^=todate]').removeAttr('disabled');
			$('#todate_' + id2[1]).attr('disabled', 'disabled');
		});

		$("body").on('click', '#presnt', function () {
			$('[id^=todate]').removeAttr('disabled');
			$('#todate').attr('disabled', 'disabled');
		});




		/*Add project Script start when click on add company*/

		// var counter = 0;
		// $("body").on('click', '#add_project' + count, function () {
		// 	counter += 1;
		// 	$("#projectAdd" + count).append('<div id="projectAdd' + count + '">\
		// 			<div class="col-md-12">\
		// 				<div class="form-group">\
		// 					<label for="Projects"> Projects</label>\
		// 					<a href="javascript:void(0);" class="float-right formbox1 remove_add_project1"><i class="fa fa-minus" aria-hidden="true"></i></a>\
		// 					<input type="text" class="form-control formbox" id="proj" name="company[' + count + '][' + counter + '][project]" placeholder="Project title" required>\
		// 				</div>\
		// 			</div>\
		// 			<div class="col-md-12">\
		// 				<div class="form-group">\
		// 					<label for="cpwd"></label>\
		// 					<textarea class="form-control formbox" id="desp2" name="company[' + count + '][' + counter + '][project_description]" placeholder="Description" cols="2" rows="2" required></textarea>\
		// 				</div>\
		// 			</div>\
		// 			<div class="col-md-12">\
		// 				<div class="form-group">\
		// 					<label for="cpwd"></label>\
		// 					<input type="text" class="form-control formbox" id="url" name="company[' + count + '][' + counter + '][project_url]" placeholder="URL" required>\
		// 				</div>\
		// 			</div>\
		// 		</div>\
		// 	');

		// });
		// $("#projectAdd" + count).on('click', '.remove_add_project1', function () {
		// 	$(this).parent().parent().parent().remove();
		// });

		/*Add project Script End on add company*/

	});
	$("#Addcompany").on('click', '.remCF', function () {
		$(this).parent().parent().remove();
	});




	/* first tdate enable when click add more button  */
	$("body").on('click', '.plusAdd', function () {
		$('[id^=todate]').removeAttr('disabled');
		$('#presnt').removeAttr('checked');

	});


	/*Add project Script start*/

	// var counter = 0;
	// $("body").on('click', '.add_project', function () {
	// 	counter += 1;
	// 	$(".projectAdd").append('<div id="projectAdd">\
	// 			<div class="col-md-12">\
	// 				<div class="form-group">\
	// 					<label for="Projects"> Projects</label>\
	// 					<a href="javascript:void(0);" class="float-right formbox1 remove_add_project"><i class="fa fa-minus" aria-hidden="true"></i></a>\
	// 					<input type="text" class="form-control formbox" id="proj" name="company[0][' + counter + '][project]" placeholder="Project title" required>\
	// 				</div>\
	// 			</div>\
	// 			<div class="col-md-12">\
	// 				<div class="form-group">\
	// 					<label for="cpwd"></label>\
	// 					<textarea class="form-control formbox" id="desp2" name="company[0][' + counter + '][project_description]" placeholder="Description" cols="2" rows="2" required></textarea>\
	// 				</div>\
	// 			</div>\
	// 			<div class="col-md-12">\
	// 				<div class="form-group">\
	// 					<label for="cpwd"></label>\
	// 					<input type="text" class="form-control formbox" id="url" name="company[0][' + counter + '][project_url]" placeholder="URL" required>\
	// 				</div>\
	// 			</div>\
	// 		</div>\
	// 	');

	// });
	// $("#projectAdd").on('click', '.remove_add_project', function () {
	// 	$(this).parent().parent().parent().remove();
	// });

	/*Add project Script End*/

	$('body').on('click', '.add_project', function () {
		counter_project = counter_project + 1;
		console.log('event Click');
		$(this).parent().prev()
			.append('<div class="projectAdd_innerBox">\
					<div class="col-md-12">\
						<div class="form-group">\
							<label for="Projects"> Projects</label>\
							<a href="javascript:void(0);" class="float-right formbox1 remove_add_project"><i class="fa fa-minus" aria-hidden="true"></i></a>\
							<input type="text" class="form-control formbox" id="proj" name="company['+count+'][pro_detail][' + counter_project + '][project]" placeholder="Project title" required>\
						</div>\
					</div>\
					<div class="col-md-12">\
						<div class="form-group">\
							<label for="cpwd"></label>\
							<textarea class="form-control formbox" id="desp2" name="company['+count+'][pro_detail][' + counter_project + '][project_description]" placeholder="Description" cols="2" rows="2" required></textarea>\
						</div>\
					</div>\
					<div class="col-md-12">\
						<div class="form-group">\
							<label for="cpwd"></label>\
							<input type="text" class="form-control formbox" id="url" name="company['+count+'][pro_detail][' + counter_project + '][project_url]" placeholder="URL" required>\
						</div>\
					</div>\
				</div>')
	});

	var counter_degree = 0;
	$('body').on('click', '.add_degree', function () {
		counter_degree = counter_degree + 1;
		console.log('event Click');
		$(this).parent().prev()
			.append('<div class="degreeAdd" id="degreeAdd">\
						<div class="col-md-12">\
							<div class="form-group">\
								<label for="pwd">Degree Name</label>\
								<a href="javascript:void(0);" class="float-right formbox1 remove_add_degree"><i class="fa fa-minus" aria-hidden="true"></i></a>\
								<input type="text" class="form-control formbox degree_name" id="degree_name" name="degree[0][' + counter_degree + '][name]"" placeholder="Enter your Degree" autocomplete="my-field-name" required>\
								<span id="degree_name_error" style="color:#F56780"></span>\
							</div>\
						</div>\
						<div class="col-md-12">\
							<div class="form-group">\
								<label for="pwd">Specialization</label>\
								<input type="text" class="form-control formbox specialization" id="specialization" name="degree[0][' + counter_degree + '][specialization]" placeholder="Enter your specialization" autocomplete="my-field-name" required>\
								<span id="specialization_error" style="color:#F56780"></span>\
							</div>\
						</div>\
						<div class="col-md-12">\
							<div class="form-group">\
								<label for="pwd">Year of Admission</label>\
								<input type="date" class="form-control formbox" id="year_of_admission" name="degree[0][' + counter_degree + '][year_of_admission]" placeholder="Enter your Admission Year" autocomplete="my-field-name" required>\
								<span id="year_of_admission_error" style="color:#F56780"></span>\
							</div>\
						</div>\
						<div class="col-md-12">\
							<div class="form-group">\
								<label for="pwd">Year of Passing</label>\
								<input type="date" class="form-control formbox" id="year_of_passing_error" name="degree[0][' + counter_degree + '][year_of_passing]" placeholder="Enter your Passing Year" autocomplete="my-field-name" required>\
								<span id="year_of_passing_error" style="color:#F56780"></span>\
							</div>\
						</div>\
					</div>')
	});

	var counter_certificate = 0;
	$('body').on('click', '.add_certificate', function () {

		
		counter_certificate = counter_certificate + 1 ;
		console.log('event Click');
		$(this).parent().prev()
			.append('<div class="certificateAdd" id="certificateAdd">\
              <div class="col-md-12">\
                <div class="form-group">\
                  <label for="pwd">Ceritificate Name</label>\
                  <a href="javascript:void(0);" class="float-right formbox1 remove_add_certificate"><i class="fa fa-minus" aria-hidden="true"></i></a>\
                  <input type="text" class="form-control formbox" id="certificate_name" name="certificate[0]['+counter_certificate+'][name]" placeholder="Enter your Ceritificate" autocomplete="my-field-name" required="">\
                  <span id="certificate_name_error" style="color:#F56780"></span>\
                </div>\
              </div>\
              <div class="col-md-12">\
                <div class="form-group">\
                  <label for="pwd">Year of Admission</label>\
                  <input type="date" class="form-control formbox" id="year_of_certificate" name="certificate[0]['+counter_certificate+'][year_of_certificate]" placeholder="Enter Certificate Date" autocomplete="my-field-name" required="">\
                  <span id="year_of_certificate_error" style="color:#F56780"></span>\
                </div>\
              </div>')
	});

	$('body').on('click', '.submit', function () {
		
		alert("Clicked")
		console.log('event Click');

	});


	$("body").on('click', '.remove_add_project', function () {
		counter_project = counter_project - 1;
		$(this).parent().parent().parent().remove();
	});

	$("body").on('click', '.remove_add_degree', function () {
		counter_degree = counter_degree - 1;
		$(this).parent().parent().parent().remove();
	});

	$("body").on('click', '.remove_add_certificate', function () {
		counter_certificate = counter_certificate - 1;
		$(this).parent().parent().parent().remove();
	});

	$("body").on('click', '.remove_add_company', function () {
		count = count - 1;
		$(this).parent().parent().parent().remove();
	});



});