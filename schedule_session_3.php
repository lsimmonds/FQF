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
						<div id="session-date" style="padding-top: 10px;">
							<strong>Monday, 27th May, 2014</strong>
						</div>
                        <hr />
                                                <div id="session-trainer">
                                                <p>Trainer:</p>
														<strong>Trainer Name</strong>
						</div>
                        <hr />
                                                <div id="session-length">
                            <p>Session length:</p>
						<strong>30 minutes</strong>
						</div>
                        <hr />
                        <div class="btn-group btn-group-justified">
							<a href="schedule_session.php" class="btn">Edit Details</a>
						</div>

					</div>
				</div></div>
                    				<div class="col-xs-4">
                    <div class="panel panel-success panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Step 2: Select a time</span>
					</div>
					<div class="panel-body">
                        Time:
						<div id="session-time" style="padding-top: 10px;">
							<strong>9:00 am</strong>
						</div>
                        <hr />
                                            <div class="btn-group btn-group-justified">
							<a href="schedule_session_2.php" class="btn">Change the Time</a>
						</div>


					</div>
				    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Step 3: Confirm Appointment</span>
					</div>
					<div class="panel-body">
                        <p>Once you submit we'll let the trainer know that you'd like an appointment at this time. They'll contact you as soon as possible if any issue comes up. In the meantime please review our FAQ and getting started guide to make sure you're ready to make the most out of your workout session.</p>
<p>Thanks for scheduling through FitQik and have fun!</p>
                       <div class="btn-group btn-group-justified">
							<a href="schedule_session_confirmed.php" class="btn">Confirm Appointment</a>
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

  var appointment;
  display_appointment = function() {
    console.log("display_appointment: sessionStorage.trainer - "+JSON.stringify(sessionStorage.trainer));
    appointment = JSON.parse(sessionStorage.appointment);
    trainer = JSON.parse(sessionStorage.trainer);
    console.log("appointment: "+JSON.stringify(appointment));
    m_date = moment(appointment.when);
    $( "#session-date" ).html("<strong>"+m_date.format('dddd, Do MMMM YYYY')+"</strong>");
    $( "#session-trainer" ).html("<p>Trainer:</p><strong>"+trainer.name+"</strong>");
    $( "#session-length" ).html("<p>Session length:</p><strong>"+appointment.length+" minutes</strong>");
    $( "#session-time" ).html("<strong>"+m_date.format('h:mm a')+"</strong>");
  }

  $(document).ready(display_appointment);

</script>

