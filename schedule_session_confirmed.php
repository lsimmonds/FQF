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
                <h1>Workout Confirmed</h1>
            </div>

            &nbsp;<br />
            <em>To get us started this is just a basic form to schedule a session. We'll need to iterate this to make it more advanced.</em>
            <div class="row padding-xs-vr no-padding-b">
				<div class="col-xs-6">
                  <div class="panel panel-success panel-dark">
					<div class="panel-heading">
						<span class="panel-title">Confirmed</span>
					</div>
					<div class="panel-body">
                        <p>Date:</p>
							<strong>Monday, 27th May, 2014</strong>
                        <hr />
                                                <p>Time:</p>
							<strong>9:00am</strong>
                        <hr />
                                                <p>Trainer:</p>
														<strong>Trainer Name</strong>
                        <hr />
                            <p>Session length:</p>
						<strong>30 minutes</strong>
					</div>
				</div>
                </div>
                    				
                <div class="col-xs-6">
                    <div class="panel">
					<div class="panel-heading">
						<span class="panel-title">What next?</span>
					</div>
					<div class="panel-body">
                        <p>We'll let the trainer know that you've booked a session.</p><p>They'll contact you as soon as possible if any issue comes up. In the meantime please review our FAQ and getting started guide to make sure you're ready to make the most out of your workout session.</p>
<p>Thanks for scheduling through <strong>FitQik</strong> and have fun!</p>


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
