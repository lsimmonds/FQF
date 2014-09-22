<?php
  session_start();
  if(empty($_SESSION['teacher']) && (empty($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1)) {
    header("Location: profile_trainer_public.php");
    exit;
  }
?>
<?php include 'fw_open.html'; ?>
<?php include 'fw_top_nav.php'; ?>

<body class="page-profile">
<div class="container">
     <div class="panel">
		<div class="panel-body">
            <!-- Begin content here -->
            
           		<div class="profile-full-name">
            <span class="text-slim"><span class="text-light-gray">Dave Trainer / </span>Trainer Profile Page</span>
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
						<span class="panel-title">Your Top Clients</span>
					</div> <!-- / .panel-heading -->
					<div class="panel-body">

						<div class="follower">
							<img src="assets/images/pixel-admin/avatar.png" alt="" class="follower-avatar">
							<div class="body">
								<a href="#" class="follower-name">John Doe</a><br>
								<a href="#" class="follower-username">Los Angeles, CA</a>
							</div>
						</div>
                        
                      <div class="follower">
							<img src="assets/images/pixel-admin/avatar.png" alt="" class="follower-avatar">
							<div class="body">
								<a href="#" class="follower-name">John Doe</a><br>
								<a href="#" class="follower-username">Los Angeles, CA</a>
							</div>
						</div>
                        
                        <div class="follower">
							<img src="assets/images/pixel-admin/avatar.png" alt="" class="follower-avatar">
							<div class="body">
								<a href="#" class="follower-name">John Doe</a><br>
								<a href="#" class="follower-username">Los Angeles, CA</a>
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
							<a href="#profile-tabs-appts" data-toggle="tab" id="app-tab">Appointments</a>
						</li>
						<li>
							<a href="#profile-tabs-availability" data-toggle="tab">Availability</a>
						</li>
                    	<li>
							<a href="#profile-tabs-profile" data-toggle="tab" id="pub-tab">Public Profile Settings</a>
						</li>
                        <li>
							<a href="#profile-tabs-equipment" data-toggle="tab">Billing</a>
						</li>
					</ul>

					<div class="tab-content tab-content-bordered panel-padding">
						
                        <div class="widget-article-comments tab-pane panel no-padding no-border fade in active" id="profile-tabs-news">

							<em>This is the page the trainer will see when they login to their profile. It has different options from the client profile. A trainer will also need a public profile which is what the clients / users will see when they're viewing a trainer. The trainer should have the ability to update their public profile from this section.</em>

						</div>
                        
<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-appts">
<!-- All below added by LS -->
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>

  <script> var tappointments; </script>
<?php include 'demo_profile_trainer_appts.html'; ?>
  <script>
  $("#app-tab").click(function() {display_tappointments();});
  </script>
</div>
                        
<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-availability">
<?php include 'demo_profile_trainer_availability.html'; ?>
</div>

<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-profile">
<?php include 'demo_profile_trainer_public.html'; ?>
  <script>
  $("#pub-tab").click(function() {fill_in_trainer();});
  </script>
</div>

<div class="widget-article-comments tab-pane panel no-padding no-border fade in" id="profile-tabs-equipment">
Coming Soon
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

<script>
  var check_log_in = function(redir_page) {
    if(typeof(sessionStorage) =='undefined' || sessionStorage.token == null || sessionStorage.token == "" || sessionStorage.token == "undefined") {
      console.log("check_log_in sessionStorage.token: "+JSON.stringify(sessionStorage.token)+ " ");
      window.location.href = redir_page;
    }
    console.log("check_log_in sessionStorage: "+JSON.stringify(sessionStorage)+ " ");
  }

  document.onload = check_log_in("login.php");
</script>

