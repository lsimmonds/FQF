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
							<input type="text" class="form-control" placeholder="Select Date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
						</div>
                        <hr />
                                                <p>Please select your trainer:</p>
							<select class="form-control form-group-margin">
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
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" class="px">
											<span class="lbl">30 minutes</span>
										</label>
									</div> <!-- / .radio -->
									<div class="radio" style="margin-bottom: 0;">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" class="px">
											<span class="lbl">60 minutes</span>
										</label>
									</div>
                        <hr />
                        <div class="btn-group btn-group-justified">
							<a href="schedule_session_2.php" class="btn">Find a Time</a>
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
