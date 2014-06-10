<?php include 'fw_open.html'; ?>
<?php include 'fw_top_nav.php'; ?>
<script>var init = [];</script>
<script>
					init.push(function () {
						var options = {
							todayBtn: "linked",
							orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
						}
						$('#bs-datepicker-example').datepicker(options);

						$('#bs-datepicker-component').datepicker();

						var options2 = {
							orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
						}
						$('#bs-datepicker-range').datepicker(options2);

						$('#bs-datepicker-inline').datepicker();
					});
				</script>

<div class="container">
     <div class="panel">
		<div class="panel-body">
            <!-- Begin content here -->
            <?php include 'fw_account_nav.html'; ?>
            <div class="page-header">
                <h1>Schedule a Workout</h1>
            </div>

            &nbsp;<br />
            <em>To get us started this is just a basic form to schedule a session. We'll need to iterate this to make it more advanced.</em>
            <div class="row padding-xs-vr no-padding-b">
				<div class="col-xs-4">
                  <div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Step 1: Get Started</span>
					</div>
					<div class="panel-body">
                        Please select the date you'd like to schedule your session:
						<div class="input-group date" id="bs-datepicker-component" style="padding-top: 10px;">
							<input type="text" id="session-date" class="form-control" placeholder="Select Date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
                        <hr />
                                                <p>Please select your trainer:</p>
							<select id="session-trainer" class="form-control form-group-margin">
										<option>Trainer Name</option>
										<option>Trainer Name</option>
										<option>Trainer Name</option>
										<option>Trainer Name</option>
										<option>Trainer Name</option>
									</select>
                        <hr />
                            <p>Please select a session length:</p>
						<div class="radio" style="margin-top: 0;">
										<label>
											<input type="radio" name="session-length" id="optionsRadios1" value="30" checked="" class="px">
											<span class="lbl">30 minutes</span>
										</label>
									</div> <!-- / .radio -->
									<div class="radio" style="margin-bottom: 0;">
										<label>
											<input type="radio" name="session-length" id="optionsRadios2" value="60" class="px">
											<span class="lbl">60 minutes</span>
										</label>
									</div>
                        <hr />
                        <div class="btn-group btn-group-justified">
							<!--<a href="schedule_session_2.php" class="btn">Find a Time</a>-->
                  <a type="a" class="btn btn-primary btn-lg btn-block" id="findATime" >Find A Time</a>
						</div>

					</div>
				</div>
                </div>
			</div>
            
           

            
            <!-- End content here -->
		</div>
	</div>
</div>

<?php include 'fw_footer.html'; ?>
<?php include 'fw_close.html'; ?>

<!-- All below added by LS -->
<script>

  check_log_in = function(redir_page) {
    if(typeof(sessionStorage) =='undefined' || sessionStorage.token == null || sessionStorage.token == "") {
      console.log("check_log_in sessionStorage.token: "+JSON.stringify(sessionStorage.token)+ " ");
      window.location.href = redir_page;
    }
  }

  document.onload = check_log_in("sign-up.php");

  get_trainers = function() {
    if(typeof(sessionStorage) =='undefined' || sessionStorage.trainers == null || sessionStorage.trainers == "") {
      sessionStorage.trainers = JSON.stringify(data);
      console.log("here:"+JSON.stringify(sessionStorage.trainers));
      fq_trainer();
    }
    else {
      display_trainers();
    }
  }

  display_trainers = function() {
    data = JSON.parse(sessionStorage.trainers);
    if(data.length > 0) {
      $("#session-trainer").empty();
    }
    else {
      return;
    }
    for (var index = 0; index < data.length; index++) {
        console.log( index + ": " + JSON.stringify(data[index]) );
	$("#session-trainer").append("<option value='" + data[index].id + "'>" + data[index].name + "</option>");
    }
  }

  fq_trainer = function() {
    console.log("fq_trainer:");
    api_results = $.ajax({
            type: "GET",
            url: "http://199.195.192.136:3000/api/teachers?token="+sessionStorage.token+"&email="+sessionStorage.email,
            async: true,
            //beforeSend : function(req) {
            //    req.setRequestHeader(‘Token’, sessionStorage.token);
            //},
            success: display_trainers,
            error: display_trainers
        });
 
    console.log("fq_trainer: api_results - "+JSON.stringify(api_results));
  }

  begin_session_gathering = function() {
    console.log("#session-date: "+$("#session-date").val());
    console.log("#session-trainer: "+$("#session-trainer").val());
    console.log("input:radio[name=session-length]:checked: "+$("input:radio[name=session-length]:checked").val());
    day = $( "#session-date" ).val();
    trainer = $( "#session-trainer" ).val();
    length = $( "input:radio[name=session-length]:checked" ).val();
    fqSessionData = '{"day": "'+day+'", "trainer": "'+trainer+'", "length": "'+length+'"}';
    sessionStorage.sess1 = JSON.stringify(fqSessionData);
    console.log("sesson1: "+JSON.stringify(sessionStorage.sess1));
    window.location.href = "schedule_session_2.php";
  }

  $( "#findATime" ).click(begin_session_gathering);
//  trainer_set = function(event) {
//    $(".active").removeClass("active");
//    event.target.parentNode.className="active";
//    display_trainers(event.target.innerHTML);
//  }

   $(document).ready(get_trainers);

//   $(".teacherSet").click(trainer_set);

</script>
