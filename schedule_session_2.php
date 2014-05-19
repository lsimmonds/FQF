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
							<strong>Monday, 27th May, 2014</strong>
						</div>
                        <hr />
                                                <p>Trainer:</p>
														<strong>Trainer Name</strong>
                        <hr />
                            <p>Session length:</p>
						<strong>30 minutes</strong>
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
							<a href="#" class="btn disabled">12:00 am</a>
							<a href="#" class="btn disabled">12:30 am</a>
							<a href="#" class="btn disabled">1:00 am</a>
							<a href="#" class="btn disabled">1:30 am</a>
						</div>  
                                                                    <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn disabled">2:00 am</a>
							<a href="#" class="btn disabled">2:30 am</a>
							<a href="#" class="btn disabled">3:00 am</a>
							<a href="#" class="btn disabled">3:30 am</a>
						</div>  
                                                <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn disabled">4:00 am</a>
							<a href="#" class="btn disabled">4:30 am</a>
							<a href="#" class="btn disabled">5:00 am</a>
							<a href="#" class="btn disabled">5:30 am</a>
						</div>  
                        <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn">6:00 am</a>
							<a href="#" class="btn">6:30 am</a>
							<a href="#" class="btn">7:00 am</a>
							<a href="#" class="btn disabled">7:30 am</a>
						</div>    
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn">8:00 am</a>
							<a href="#" class="btn">8:30 am</a>
							<a href="schedule_session_3.php" class="btn">9:00 am</a>
							<a href="#" class="btn">9:30 am</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn disabled">10:00 am</a>
							<a href="#" class="btn disabled">10:30 am</a>
							<a href="#" class="btn">11:00 am</a>
							<a href="#" class="btn">11:30 am</a>
						</div>
                                            <p class="text-xs" style="padding-top:10px"><strong>Afternoon</strong></p>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn">12:00 pm</a>
							<a href="#" class="btn">12:30 pm</a>
							<a href="#" class="btn">1:00 pm</a>
							<a href="#" class="btn">1:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn disabled">2:00 pm</a>
							<a href="#" class="btn">2:30 pm</a>
							<a href="#" class="btn disabled">3:00 pm</a>
							<a href="#" class="btn">3:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn disabled">4:00 pm</a>
							<a href="#" class="btn disabled">4:30 pm</a>
							<a href="#" class="btn">5:00 pm</a>
							<a href="#" class="btn">5:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn">6:00 pm</a>
							<a href="#" class="btn">6:30 pm</a>
							<a href="#" class="btn disabled">7:00 pm</a>
							<a href="#" class="btn disabled">7:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn">8:00 pm</a>
							<a href="#" class="btn">8:30 pm</a>
							<a href="#" class="btn">9:00 pm</a>
							<a href="#" class="btn">9:30 pm</a>
						</div>
                       <div class="btn-group btn-group-justified btn-group-xs">
							<a href="#" class="btn">10:00 pm</a>
							<a href="#" class="btn">10:30 pm</a>
							<a href="#" class="btn">11:00 pm</a>
							<a href="#" class="btn">11:30 pm</a>
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
