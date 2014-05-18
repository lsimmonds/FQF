<?php include 'fw_open.html'; ?>
<?php include 'fw_top_nav.html'; ?> 
<div class="container">
     <div class="panel">
		<div class="panel-body">
            <!-- Begin content here -->
            <?php include 'fw_account_nav.html'; ?>
            <div class="page-header">
                <h1>My Dashboard</h1>
            </div>

            <div class="row padding-xs-vr no-padding-b">
				<div class="col-xs-8">
                  <div class="panel widget-messages-alt panel-warning panel-dark">
					<div class="panel-heading">
						<span class="panel-title"><strong>0</strong> Scheduled Sessions</span>
					</div>
					<div class="panel-body">
						<p>You have no scheduled sessions. That's sad.</p>
                        <p>Why don't you schedule a session now by clicking on the button below. One of our trainers will be happy to help you get moving.</p>
                        <hr />
                        <button class="btn btn-outline btn-sm btn-labeled btn-success"><span class="btn-label icon fa fa-calendar"></span>Schedule a Session Now</button>
					</div>
				</div>
                </div>
				<div class="col-xs-4">
                    <div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">Messages</span>
						<div class="panel-heading-controls">
							<div class="panel-heading-icon"><i class="fa fa-inbox"></i></div>
						</div>
					</div>
					<div class="panel-body">
						You have no messages
                        <hr />
                        <button class="btn btn-outline btn-sm btn-labeled btn-success"><span class="btn-label icon fa fa-envelope-o"></span>Send a Message Now</button>
					</div>
				    </div>
                </div>
			</div>
            
            
            <div class="row">
				<div class="col-xs-8">
        			<div class="panel colourable">
					<div class="panel-heading">
						<span class="panel-title">FitQik Trainers</span>
                    <div class="panel-heading-controls">
							<ul class="pagination pagination-xs">
								<li><a href="#">«</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">»</a></li>
							</ul>
						</div>
					</div>
					<div class="panel-body">
				    
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
					</div>
				</div>
                </div>
				<div class="col-xs-4">
                    <div class="panel panel-light">
					<div class="panel-heading">
						<span class="panel-title">News</span>
						<div class="panel-heading-controls">
							<div class="panel-heading-icon"><i class="fa fa-rss"></i></div>
						</div>
					</div>
					<div class="panel-body">
						Latest news Here
                        <hr />
                        Visit our <a href="#">blog</a>
					</div>
				    </div>
                </div>
			</div>
            
            
            
            <hr />
            Alternative with messages and schedule
            <hr />
            <div class="row padding-xs-vr">
				<div class="col-xs-8">
                  <div class="panel widget-messages-alt panel-success panel-dark">
					<div class="panel-heading">
						<span class="panel-title"><strong>6</strong> Upcoming Sessions</span>
					</div>
					<div class="panel-body no-padding">
                        <?php include 'demo_data_table.html'; ?>
                    </div>
                    <div class="panel-padding no-padding-t">
                    <button class="btn btn-outline btn-sm btn-labeled btn-success">
                        <span class="btn-label icon fa fa-calendar"></span>Schedule a Session Now</button>
                    
                    </div>
				</div>
                </div>
				<div class="col-xs-4">
                  <div class="panel widget-messages-alt panel-success panel-dark">
					<div class="panel-heading">
						<span class="panel-title"><strong>6</strong> New Messages</span>
						<div class="panel-heading-controls">
							<div class="panel-heading-icon"><i class="fa fa-inbox"></i></div>
						</div>
					</div>
					<div class="panel-body no-padding">
						<div class="messages-list">

							<div class="message">
								<img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
								<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
								<div class="message-description">
									from <a href="#">Robert Jang</a>
									&nbsp;&nbsp;·&nbsp;&nbsp;
									2h ago
								</div> <!-- / .message-description -->
							</div> <!-- / .message -->

							<div class="message">
								<img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
								<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
								<div class="message-description">
									from <a href="#">Michelle Bortz</a>
									&nbsp;&nbsp;·&nbsp;&nbsp;
									2h ago
								</div> <!-- / .message-description -->
							</div> <!-- / .message -->

							<div class="message">
								<img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
								<a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
								<div class="message-description">
									from <a href="#">Timothy Owens</a>
									&nbsp;&nbsp;·&nbsp;&nbsp;
									2h ago
								</div> <!-- / .message-description -->
							</div> <!-- / .message -->

							<div class="message">
								<img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
								<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
								<div class="message-description">
									from <a href="#">Denise Steiner</a>
									&nbsp;&nbsp;·&nbsp;&nbsp;
									2h ago
								</div> <!-- / .message-description -->
							</div> <!-- / .message -->

							<div class="message">
								<img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
								<a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
								<div class="message-description">
									from <a href="#">Robert Jang</a>
									&nbsp;&nbsp;·&nbsp;&nbsp;
									2h ago
								</div> <!-- / .message-description -->
							</div> <!-- / .message -->

							<div class="message">
								<img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
								<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
								<div class="message-description">
									from <a href="#">Michelle Bortz</a>
									&nbsp;&nbsp;·&nbsp;&nbsp;
									2h ago
								</div> <!-- / .message-description -->
							</div> <!-- / .message -->

						</div> <!-- / .messages-list -->
						<a href="#" class="messages-link">MORE MESSAGES</a>
					</div> <!-- / .panel-body -->
				</div>  
                    

                </div>
			</div>
            <!-- End content here -->
		</div>
	</div>
</div>
<?php include 'fw_footer.html'; ?>
<?php include 'fw_close.html'; ?>