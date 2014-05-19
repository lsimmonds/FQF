<?php include 'fw_open.html'; ?>
<?php include 'fw_top_nav.php'; ?>
<body class="page-profile">
<div class="container">
     <div class="panel">
		<div class="panel-body">
            <!-- Begin content here -->
            <?php include 'fw_account_nav.html'; ?>         
            
           		<div class="profile-full-name">
            <span class="text-slim"><span class="text-light-gray">Dave Trainer / </span>Trainer Public Profile Page</span>
		</div>
	 	<div class="profile-row padding-sm-vr">
			<div class="left-col">
				<div class="profile-block">
					<div class="panel profile-photo">
						<img src="assets/images/pixel-admin/avatar_lg.png" alt="">
                        				
					</div>
                    	<a href="#" class="btn">Contact Trainer</a><br>
				</div>
                
                <div class="panel panel-transparent">
					<div class="panel-heading">
						<span class="panel-title">About me</span>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <a href="#">dolore magna</a> aliqua.
					</div>
				</div>

				<div class="panel panel-transparent">
					<div class="panel-heading">
						<span class="panel-title">$Name's Statistics</span>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item"><strong>10,263</strong> Calories Burned</a>
						<a href="#" class="list-group-item"><strong>15</strong> Hours of Workouts</a>
					</div>
				</div>
			</div>
			<div class="right-col">

				<hr class="profile-content-hr no-grid-gutter-h">
				
				<div class="profile-content">

					<ul id="profile-tabs" class="nav nav-tabs nav-tabs-sm">
                        <li class="active">
							<a href="#profile-tabs-news" data-toggle="tab">News Feed</a>
						</li>
						<li>
							<a href="#profile-tabs-goals" data-toggle="tab">Biography</a>
						</li>
                    	<li>
							<a href="#profile-tabs-health" data-toggle="tab">Skills and Specialties</a>
						</li>
					</ul>

					<div class="tab-content tab-content-bordered panel-padding">
						
                        <div class="widget-article-comments tab-pane panel no-padding no-border fade in active" id="profile-tabs-news">

							Coming Soon

						</div>
						<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-goals">
							
                            Biography
                            
						</div>
                    						<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-health">
							
                           Skills and Specialties
                            
						</div>

					</div> <!-- / .tab-content -->
				</div>
			</div>
		</div>  
            
            
            
            
            <!-- End content here -->
		</div>
	</div>
</div>
<?php include 'fw_footer.html'; ?>
<?php include 'fw_close.html'; ?>
