<?php include 'fw_open.html'; ?>
<?php include 'fw_top_nav.php'; ?>

<script>var init = [];</script>

<!-- Javascript -->
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
				<!-- / Javascript -->


<div class="container">
     <div class="panel">
    <div class="panel-body">
            <!-- Begin content here -->
            
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
                                                <p>Please select your session type:</p>
              <select id="session-type" class="form-control form-group-margin">
                    <option>Yoga</option>
                    <option>General Training</option>
                    <option>Pilates</option>
                    <option>Sports / Performance</option>
                    <option>Therapy / Rehab</option>
                    <option>Aerobics</option>
                    <option>Other</option>
                  </select>
                        <hr />
                            <p>Please select a session length:</p>
            <div class="radio" style="margin-top: 0;">
                    <label>
                      <input type="radio" name="session-length" id="session-length-30" value="30" checked="" class="px">
                      <span class="lbl">30 minutes</span>
                    </label>
                  </div> <!-- / .radio -->
                  <div class="radio" style="margin-bottom: 0;">
                    <label>
                      <input type="radio" name="session-length" id="session-length-60" value="60" class="px">
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

<script type="text/javascript">
	init.push(function () {
		// Javascript code here
	})
	window.PixelAdmin.start(init);
</script>

<!-- All below added by LS -->
<script>
  var trainer;
  var type;
  var session1;

  check_log_in = function(redir_page) {
    if(typeof(sessionStorage) =='undefined' || sessionStorage.token == null || sessionStorage.token == "") {
      console.log("check_log_in sessionStorage.token: "+JSON.stringify(sessionStorage.token)+ " ");
      window.location.href = redir_page;
    }
  }

  document.onload = check_log_in("sign-up.php");

  get_trainers = function() {
    if(typeof(sessionStorage) !='undefined') {
      console.log("sessionStorage.appointment: "+sessionStorage.appointment);
      if(sessionStorage.appointment != null) {
	appointment = JSON.parse(sessionStorage.appointment);
	if(appointment.when != null) {
	  m_date = moment(sessionStorage.appointment.when);
	  $("#session-date").val(m_date.format('MM/DD/YYYY'));
	}
	if(sessionStorage.trainer != null) {
	  trainer = JSON.parse(sessionStorage.trainer);
	  console.log("Got trainer: "+JSON.stringify(trainer));
	  $("#session-trainer").val(trainer.id);
	  $("#session-trainer").val(trainer.id).prop('selected', true);
	}
	if(sessionStorage.type != null) {
	  type = JSON.parse(sessionStorage.type);
	  console.log("Got type: "+JSON.stringify(type));
	  $("#session-type").val(type.id);
	}
	if(sessionStorage.sess1 != null) {
	  session1 = JSON.parse(JSON.parse(sessionStorage.sess1));
	  console.log("Got session1: "+JSON.stringify(session1));
	  radio_id = "#session-length-"+session1.length;
	  $(radio_id).prop('checked', true);
	}
      }
      if(sessionStorage.trainers == null || sessionStorage.trainers == "") {
	fq_trainer();
      }
      else {
	display_trainers();
      }
      if(sessionStorage.types == null || sessionStorage.types == "") {
	fq_type();
      }
      else {
	display_types();
      }
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
	selected = (sessionStorage.trainer != null && trainer.id == data[index].id)?"selected":"";
        $("#session-trainer").append("<option value='" + data[index].id + "' "+selected+">" + data[index].name + "</option>");
    }
  }

  store_types= function(data) {
    sessionStorage.types = JSON.stringify(data);
    console.log("here:"+JSON.stringify(sessionStorage.types));
    display_types();
  }

  display_types = function() {
    data = JSON.parse(sessionStorage.types);
    if(data.length > 0) {
      $("#session-type").empty();
    }
    else {
      return;
    }
    for (var index = 0; index < data.length; index++) {
      console.log( index + ": " + JSON.stringify(data[index]) );
      selected = (sessionStorage.type != null && type.id == data[index].id)?"selected":"";
      $("#session-type").append("<option value='" + data[index].id + "' "+selected+">" + data[index].name + "</option>");
    }
  }

  fq_trainer = function() {
    console.log("fq_trainer:");
    var api_results = $.ajax({
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

  fq_type = function() {
    console.log("fq_type:");
    var api_results = $.ajax({
            type: "GET",
            url: "http://199.195.192.136:3000/api/subjects?token="+sessionStorage.token+"&email="+sessionStorage.email,
            async: true,
            success: store_types,
            error: display_types
        });
    console.log("fq_type: api_results - "+JSON.stringify(api_results));
  }

  begin_session_gathering = function() {
    console.log("#session-date: "+$("#session-date").val());
    console.log("#session-trainer: "+$("#session-trainer").val());
    console.log("#session-type: "+$("#session-type").val());
    console.log("input:radio[name=session-length]:checked: "+$("input:radio[name=session-length]:checked").val());
    day = $( "#session-date" ).val();
    trainer = $( "#session-trainer" ).val();
    type = $( "#session-type" ).val();
    length = $( "input:radio[name=session-length]:checked" ).val();
    fqSessionData = '{"day": "'+day+'", "trainer": "'+trainer+'", "type": "'+type+'", "length": "'+length+'"}';
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
