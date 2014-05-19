<?php include 'fw_open.html'; ?>
<?php include 'fw_top_nav.php'; ?> 
<div class="container">
     <div class="panel">
		<div class="panel-body">
            <!-- Begin content here -->
            <?php include 'fw_account_nav.html'; ?>
            <div class="page-header">
                <h1>Trainers</h1>
            </div>        
            &nbsp;
            <div class="row">
                <div class="col-xs-4">
                    <?php include 'demo_trainer_profile.html'; ?>
                </div>
                <div class="col-xs-4">
                    <?php include 'demo_trainer_profile.html'; ?>
                </div>
                <div class="col-xs-4">
                    <?php include 'demo_trainer_profile.html'; ?>
                </div>
            </div>
            <ul class="pagination">
							<li class="disabled"><a href="#">«</a></li>
							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">»</a></li>
						</ul>

            <!-- End content here -->
		</div>
	</div>
</div>
<?php include 'fw_footer.html'; ?>
<?php include 'fw_close.html'; ?>
