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
            
            <div class="page-header">
                <h1>Schedule a Workout</h1>
            </div>

            &nbsp;<br />
            <em>To get us started this is just a basic form to schedule a session. We'll need to iterate this to make it more advanced.</em>
            <div class="row padding-xs-vr no-padding-b">
				<div class="col-xs-4">
                  <div class="panel panel-success panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Step 1: Get Started</span>
					</div>
					<div class="panel-body">
                        Date:
						<div style="padding-top: 10px;">
							<strong><span id="session-date">Monday, 27th May, 2014</span></strong>
						</div>
                        <hr />
                                                <p>Trainer:</p>
												<strong><span id="session-trainer">Trainer Name</span></strong>
                        <hr />
                                                                        <p>Session Type:</p>
												<strong><span id="session-type">Yoga</span></strong>
                        <hr />
                            <p>Session length:</p>
						<strong><span id="session-length">30 minutes</strong></span>
                        <hr />
                        <div class="btn-group btn-group-justified">
							<a href="schedule_session.php" class="btn">Edit Details</a>
						</div>

					</div>
				</div></div>
                    				<div class="col-xs-4">
                    <div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Step 2: Select a time</span>
					</div>
					<div class="panel-body">
                        <p><em>Choices available based on the trainer name / date schedule (pick 9:00am):</em></p>
                        <p class="text-xs"><strong>Morning</strong></p>
                                                                                            <div class="btn-group btn-group-justified btn-group-xs">
							<a id="0000" class="btn disabled time_pick">12:00 am</a>
							<a id="0030" class="btn disabled time_pick">12:30 am</a>
							<a id="0100" class="btn disabled time_pick">1:00 am</a>
							<a id="0130" class="btn disabled time_pick">1:30 am</a>
						</div>  
                                                                    <div class="btn-group btn-group-justified btn-group-xs">
							<a id="0200" class="btn disabled time_pick">2:00 am</a>
							<a id="0230" class="btn disabled time_pick">2:30 am</a>
							<a id="0300" class="btn disabled time_pick">3:00 am</a>
							<a id="0330" class="btn disabled time_pick">3:30 am</a>
						</div>  
                                                <div class="btn-group btn-group-justified btn-group-xs">
							<a id="0400" class="btn disabled time_pick">4:00 am</a>
							<a id="0430" class="btn disabled time_pick">4:30 am</a>
							<a id="0500" class="btn disabled time_pick">5:00 am</a>
							<a id="0530" class="btn disabled time_pick">5:30 am</a>
						</div>  
                        <div class="btn-group btn-group-justified btn-group-xs">
							<a id="0600" class="btn time_pick">6:00 am</a>
							<a id="0630" class="btn time_pick">6:30 am</a>
							<a id="0700" class="btn time_pick">7:00 am</a>
							<a id="0730" class="btn disabled time_pick">7:30 am</a>
						</div>    
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="0800" class="btn time_pick">8:00 am</a>
							<a id="0830" class="btn time_pick">8:30 am</a>
							<a id="0900" class="btn time_pick">9:00 am</a>
							<a id="0930" class="btn time_pick">9:30 am</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1000" class="btn disabled time_pick">10:00 am</a>
							<a id="1030" class="btn disabled time_pick">10:30 am</a>
							<a id="1100" class="btn time_pick">11:00 am</a>
							<a id="1130" class="btn time_pick">11:30 am</a>
						</div>
                                            <p class="text-xs" style="padding-top:10px"><strong>Afternoon</strong></p>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1200" class="btn time_pick">12:00 pm</a>
							<a id="1230" class="btn time_pick">12:30 pm</a>
							<a id="1300" class="btn time_pick">1:00 pm</a>
							<a id="1330" class="btn time_pick">1:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1400" class="btn disabled time_pick">2:00 pm</a>
							<a id="1430" class="btn time_pick">2:30 pm</a>
							<a id="1500" class="btn disabled time_pick">3:00 pm</a>
							<a id="1530" class="btn time_pick">3:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1600" class="btn disabled time_pick">4:00 pm</a>
							<a id="1630" class="btn disabled time_pick">4:30 pm</a>
							<a id="1700" class="btn time_pick">5:00 pm</a>
							<a id="1730" class="btn time_pick">5:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1800" class="btn time_pick">6:00 pm</a>
							<a id="1830" class="btn time_pick">6:30 pm</a>
							<a id="1900" class="btn disabled time_pick">7:00 pm</a>
							<a id="1930" class="btn disabled time_pick">7:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="2000" class="btn time_pick">8:00 pm</a>
							<a id="2030" class="btn time_pick">8:30 pm</a>
							<a id="2100" class="btn time_pick">9:00 pm</a>
							<a id="2130" class="btn time_pick">9:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="2200" class="btn time_pick">10:00 pm</a>
							<a id="2230" class="btn time_pick">10:30 pm</a>
							<a id="2300" class="btn time_pick">11:00 pm</a>
							<a id="2330" class="btn time_pick">11:30 pm</a>
						</div>
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
    if(typeof(sessionStorage) =='undefined' || sessionStorage.token == null || sessionStorage.token == "" || sessionStorage.token == "undefined") {
      console.log("check_log_in sessionStorage.token: "+JSON.stringify(sessionStorage.token)+ " ");
      window.location.href = redir_page;
    }
    console.log("check_log_in sessionStorage: "+JSON.stringify(sessionStorage)+ " ");
  }

  document.onload = check_log_in("login.php");

  store_trainer_map= function(data) {
    console.log("store_trainer_map: "+JSON.stringify(data));
    sessionStorage.trainer_map = JSON.stringify(data);
    console.log("trainer map:"+JSON.stringify(sessionStorage.trainer_map));
    display_trainer_map(sess1.day);
  }

  String.prototype.lpad = function(padChar, length) {
    var str = this;
    while (str.length < length)
      str = padChar + str;
    return str;
  }

  display_trainer_map = function(sess_date) {
    if(session_db_date) {
      sess_date=session_db_date;
    }
    console.log("display_trainer_map");
    data = JSON.parse(sessionStorage.trainer_map);
    console.log("map data: "+JSON.stringify(data)+" type: "+typeof data+" type input: "+typeof sessionStorage.trainer_map);
    for(var hour = 0;hour <= 24;hour++) {
      for(var min = 0;min < 60;min=min+30) {
	index = hour.toString().lpad("0",2)+min.toString().lpad("0",2);
	console.log("Looking at index "+index+" hour: "+hour+" min: "+min+" sess_date: "+sess_date);
	if(JSON.stringify(data[sess_date][index]) === "{}") {
	  console.log("Got data["+sess_date+"]["+index+"]: "+JSON.stringify(data[sess_date][index]));
	  $("#"+index).toggleClass("disabled",false);
	}
	else {
	  console.log("Index "+index+" is not set: "+JSON.stringify(data[sess_date][index]));
	  $("#"+index).toggleClass("disabled",true);
	}
        console.log("End of min "+min);
      }
      console.log("End of hour "+hour);
    }
  }

 
  trainer_map = function(trainer_id,map_date) {
    console.log("trainer_map: http://199.195.192.136:3000/api/teachers/"+trainer_id+"/day_map?date="+map_date+"&token="+sessionStorage.token+"&email="+sessionStorage.email);
    api_results = $.ajax({
            type: "GET",
            url: "http://199.195.192.136:3000/api/teachers/"+trainer_id+"/day_map?date="+map_date+"&token="+sessionStorage.token+"&email="+sessionStorage.email,
            async: true,
            //beforeSend : function(req) {
            //    req.setRequestHeader(‘Token’, sessionStorage.token);
            //},
            success: store_trainer_map,
            error: display_trainer_map
        });
    console.log("fq_trainer: api_results - "+JSON.stringify(api_results));
  }

  var sess1;
  var trainer;
  var session_db_date;
  get_sess1 = function() {
    sess1 = JSON.parse(JSON.parse(sessionStorage.sess1));
    console.log("sess1: "+JSON.stringify(sess1));
    console.log("day: "+sess1.day);
    console.log("trainer: "+sess1.trainer);
    console.log("length: "+sess1.length);
    trainers = JSON.parse(sessionStorage.trainers);
    trainer = "";
    for (var index = 0; index < trainers.length; index++) {
      if(trainers[index].id == sess1.trainer) {
        trainer=trainers[index];
	break;
      }
    }
    types = JSON.parse(sessionStorage.types);
    type = "";
    for (var index = 0; index < types.length; index++) {
      if(types[index].id == sess1.type) {
        type=types[index];
	break;
      }
    }
    sessionStorage.trainer = JSON.stringify(trainer);
    sessionStorage.type = JSON.stringify(type);
    $( "#session-date" ).text(sess1.day);
    $( "#session-trainer" ).text(trainer.name);
    $( "#session-type" ).text(type.name);
    $( "#session-length" ).text(sess1.length+" Minutes");
    console.log("Calling trainer_map("+trainer.id+","+sess1.day+")");
    var date_array = sess1.day.split("/");
    session_db_date = date_array[2]+"-"+date_array[0]+"-"+date_array[1];
    trainer_map(trainer.id,session_db_date);
  }

  get_student = function(data) {
    console.log("get_student: "+JSON.stringify(data));
console.log("aaaaaaaaaa");
    if(typeof(data) != 'undefined') {
      if (data.message == "none") {
        console.log("fetching student from api");
        var student_data = { student: { name: sessionStorage.name }, email: sessionStorage.email, token: sessionStorage.token };
        api_results = $.ajax({
          type: "POST",
          url: "http://199.195.192.136:3000/api/students?token="+sessionStorage.token+"&email="+sessionStorage.email,
          data: student_data,
          async: true,
          //beforeSend : function(req) {
          //    req.setRequestHeader(‘Token’, sessionStorage.token);
          //},
          success: get_student,
          error: function(data) {console.log("student fail: "+JSON.stringify(data));}
        });
        return;
      }
      else { //must have some real student data
        sessionStorage.student = JSON.stringify(data);
	if(sessionStorage.mid_apt) {
	  finish_book_session();
	}
	else {
	  return JSON.parse(sessionStorage.student);
	}
      }
    }
    else if(typeof(sessionStorage) == 'undefined' || sessionStorage.student == null || sessionStorage.student == "") {
console.log("bbbbbbbbbb");
      console.log("get_student sessionStorage.student: "+JSON.stringify(sessionStorage.student)+ " ");
      api_results = $.ajax({
        type: "GET",
        url: "http://199.195.192.136:3000/api/my_student?token="+sessionStorage.token+"&email="+sessionStorage.email,
        async: true,
        //beforeSend : function(req) {
        //    req.setRequestHeader(‘Token’, sessionStorage.token);
        //},
        success: get_student,
        error: function(data) {console.log("student fail: "+JSON.stringify(data));}
      });
    }
    else {
console.log("sessionStorage.mid_apt: "+sessionStorage.mid_apt.toString());
	if(sessionStorage.mid_apt) {
console.log("finishing...");
	  finish_book_session();
	}
	else {
          return JSON.parse(sessionStorage.student);
	}
    }
  }

  display_appointment = function(data) {
    console.log("Got appointment: "+JSON.stringify(data));
    sessionStorage.appointment = JSON.stringify(data);
    window.location.href = "schedule_session_3.php";
  }

  start_book_session = function(event) {
    console.log("start_book_session: "+JSON.stringify(sess1));
    console.log("event.target.id:val - "+JSON.stringify(event.target.id)+":"+event.target.text);
    sessionStorage.mid_apt = true;
    var arry = sess1.day.split("/");
    console.log("arry: "+JSON.stringify(arry));
    //year, mon, day, hour, min
    sessionStorage.target_time = new Date(arry[2], arry[0]-1, arry[1], event.target.id.substr(0,2),event.target.id.substr(2,2));
    console.log("In start_book_session target_time: "+JSON.stringify(sessionStorage.target_time));
    var student = get_student();
  }

  finish_book_session = function() {
    student = JSON.parse(sessionStorage.student);
    console.log("In finish_book_session student: "+JSON.stringify(student));
    console.log("In finish_book_session student.id: "+student.id);
    console.log("In finish_book_session target_time: "+JSON.stringify(sessionStorage.target_time));
    var new_date = new Date(sessionStorage.target_time);
    console.log("new_date: "+new_date);
    var utc_date = new_date.toUTCString();
    console.log("utc_date: "+utc_date);
    //var appointment = { subject: { id: sess1.type }, student: [ { id: student.id } ], teacher: [ { id: sess1.trainer } ], when: utc_date };
    //var appointment_data = { "appointment": appointment, "token": sessionStorage.token, "email": sessionStorage.email };
    appointment_data = { "appointment": { "subject": { "id": sess1.type }, "student": [ { "id": student.id } ], "teacher": [ { "id": sess1.trainer } ], "when": utc_date, "length": sess1.length } };
    console.log("appointment data: "+JSON.stringify(appointment_data));
    appointment_url = "http://199.195.192.136:3000/api/appointments?token="+sessionStorage.token+"&email="+sessionStorage.email;
    if(typeof(sessionStorage) !='undefined') {
      if(sessionStorage.appointment != null) {
	appointment = JSON.parse(sessionStorage.appointment);
	if(appointment.id != null) {
	  appointment_url = "http://199.195.192.136:3000/api/appointments/"+appointment.id+"?token="+sessionStorage.token+"&email="+sessionStorage.email;
	}
      }
    }

    api_results = $.ajax({
      type: "POST",
      url: appointment_url,
      data: appointment_data,
      async: true,
      success: display_appointment,
      error: function(data) {console.log("appointment fail: "+JSON.stringify(data));}
    });
    sessionStorage.mid_apt = false;
  }

  $( ".time_pick" ).click(start_book_session);

  $(document).ready(get_sess1);

</script>
