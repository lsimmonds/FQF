<?php include 'fw_open.html'; ?>
<?php include 'fw_top_nav.php'; ?>
<body class="page-profile">
<div class="container">
     <div class="panel">
		<div class="panel-body">
            <!-- Begin content here -->
            <?php include 'fw_account_nav.html'; ?>         
            
           		<div class="profile-full-name">
            <span class="text-slim"><span class="text-light-gray">John Doe / </span>User Profile Page</span>
		</div>
	 	<div class="profile-row padding-sm-vr">
			<div class="left-col">
				<div class="profile-block">
					<div class="panel profile-photo">
						<img src="assets/images/pixel-admin/avatar_lg.png" alt="">
					</div><br>
					<a href="#" class="btn">Edit Picture</a>
				</div>

				<div class="panel panel-transparent">
					<div class="panel-heading">
						<span class="panel-title">Your Statistics</span>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item"><strong>10,263</strong> Calories Burned</a>
						<a href="#" class="list-group-item"><strong>15</strong> Hours of Workouts</a>
					</div>
				</div>
                
            <div class="panel widget-followers panel-transparent panel-padding">
					<div class="panel-heading">
						<span class="panel-title">Your Top Trainers</span>
					</div> <!-- / .panel-heading -->
					<div class="panel-body">

						<div class="follower">
							<img src="assets/images/pixel-admin/avatar.png" alt="" class="follower-avatar">
							<div class="body">
								<a href="#" class="follower-name">Dave Trainer</a><br>
								<a href="#" class="follower-username">Yoga, Pilates, Mobility</a>
							</div>
						</div>
                        
                      <div class="follower">
							<img src="assets/images/pixel-admin/avatar.png" alt="" class="follower-avatar">
							<div class="body">
								<a href="#" class="follower-name">Dave Trainer</a><br>
								<a href="#" class="follower-username">Yoga, Pilates, Mobility</a>
							</div>
						</div>
                        
                        <div class="follower">
							<img src="assets/images/pixel-admin/avatar.png" alt="" class="follower-avatar">
							<div class="body">
								<a href="#" class="follower-name">Dave Trainer</a><br>
								<a href="#" class="follower-username">Yoga, Pilates, Mobility</a>
							</div>
						</div>

					</div> <!-- / .panel-body -->
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
							<a href="#profile-tabs-goals" data-toggle="tab">Goals</a>
						</li>
                    	<li>
							<a href="#profile-tabs-health" data-toggle="tab">Health</a>
						</li>
                        <li>
							<a href="#profile-tabs-equipment" data-toggle="tab">Equipment</a>
						</li>
                        <li>
							<a href="#profile-tabs-video" data-toggle="tab">Video</a>
						</li>
					</ul>

					<div class="tab-content tab-content-bordered panel-padding">
						
                        <div class="widget-article-comments tab-pane panel no-padding no-border fade in active" id="profile-tabs-news">

								<em>This is the page the clients see when they login and view their profile. They should have the ability to update settings, view appointments etc. from here. Also, if we extend the social element this will be a news feed area as well.</em>

						</div>
						<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-goals">
							
                            <?php include 'demo_profile_goals.html'; ?>
                            
						</div>
                    						<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-health">
							
                            <?php include 'demo_profile_health.html'; ?>
                            
						</div>
                    						<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-equipment">
							
                            <?php include 'demo_profile_equipment.html'; ?>
                            
						</div>
                    						<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-video">
							
                            <?php include 'demo_profile_video.html'; ?>
                            
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
