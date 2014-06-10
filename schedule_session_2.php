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
							<a id="0000" class="btn disabled">12:00 am</a>
							<a id="0030" class="btn disabled">12:30 am</a>
							<a id="0100" class="btn disabled">1:00 am</a>
							<a id="0130" class="btn disabled">1:30 am</a>
						</div>  
                                                                    <div class="btn-group btn-group-justified btn-group-xs">
							<a id="0200" class="btn disabled">2:00 am</a>
							<a id="0230" class="btn disabled">2:30 am</a>
							<a id="0300" class="btn disabled">3:00 am</a>
							<a id="0330" class="btn disabled">3:30 am</a>
						</div>  
                                                <div class="btn-group btn-group-justified btn-group-xs">
							<a id="0400" class="btn disabled">4:00 am</a>
							<a id="0430" class="btn disabled">4:30 am</a>
							<a id="0500" class="btn disabled">5:00 am</a>
							<a id="0530" class="btn disabled">5:30 am</a>
						</div>  
                        <div class="btn-group btn-group-justified btn-group-xs">
							<a id="0600" class="btn">6:00 am</a>
							<a id="0630" class="btn">6:30 am</a>
							<a id="0700" class="btn">7:00 am</a>
							<a id="0730" class="btn disabled">7:30 am</a>
						</div>    
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="0800" class="btn">8:00 am</a>
							<a id="0830" class="btn">8:30 am</a>
							<a id="0900" class="btn">9:00 am</a>
							<a id="0930" class="btn">9:30 am</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1000" class="btn disabled">10:00 am</a>
							<a id="1030" class="btn disabled">10:30 am</a>
							<a id="1100" class="btn">11:00 am</a>
							<a id="1130" class="btn">11:30 am</a>
						</div>
                                            <p class="text-xs" style="padding-top:10px"><strong>Afternoon</strong></p>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1200" class="btn">12:00 pm</a>
							<a id="1230" class="btn">12:30 pm</a>
							<a id="1300" class="btn">1:00 pm</a>
							<a id="1330" class="btn">1:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1400" class="btn disabled">2:00 pm</a>
							<a id="1430" class="btn">2:30 pm</a>
							<a id="1500" class="btn disabled">3:00 pm</a>
							<a id="1530" class="btn">3:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1600" class="btn disabled">4:00 pm</a>
							<a id="1630" class="btn disabled">4:30 pm</a>
							<a id="1700" class="btn">5:00 pm</a>
							<a id="1730" class="btn">5:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="1800" class="btn">6:00 pm</a>
							<a id="1830" class="btn">6:30 pm</a>
							<a id="1900" class="btn disabled">7:00 pm</a>
							<a id="1930" class="btn disabled">7:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="2000" class="btn">8:00 pm</a>
							<a id="2030" class="btn">8:30 pm</a>
							<a id="2100" class="btn">9:00 pm</a>
							<a id="2130" class="btn">9:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a id="2200" class="btn">10:00 pm</a>
							<a id="2230" class="btn">10:30 pm</a>
							<a id="2300" class="btn">11:00 pm</a>
							<a id="2330" class="btn">11:30 pm</a>
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
    if(typeof(sessionStorage) =='undefined' || sessionStorage.token == null || sessionStorage.token == "") {
      console.log("check_log_in sessionStorage.token: "+JSON.stringify(sessionStorage.token)+ " ");
      window.location.href = redir_page;
    }      
  }

  document.onload = check_log_in("sign-up.php");

  get_sess1 = function() {
    sess1 = JSON.parse(JSON.parse(sessionStorage.sess1));
    console.log("sess1: "+sess1);
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
    $( "#session-date" ).text(sess1.day);
    $( "#session-trainer" ).text(trainer.name);
    $( "#session-length" ).text(sess1.length+" Minutes");
  }

  $(document).ready(get_sess1);

</script>
