<?php session_start(); ?>
<div id="main-navbar" class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-inner">
      <div class="navbar-header">
        <!-- Logo -->
        <a href="index.php" class="navbar-brand">FitQik</a>
        <!-- Main navbar toggle -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>
      </div> <!-- / .navbar-header -->
      <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
        <div>

          <div class="right clearfix">
            <ul class="nav navbar-nav pull-right right-navbar-nav">
                            
                           <!--
                           
                           <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                <span class="label label-success">3</span>
                            </a>
                            
                            -->

                <!-- NOTIFICATIONS -->
                
                <!-- Javascript 
                <script>
                  init.push(function () {
                    $('#main-navbar-notifications').slimScroll({ height: 250 });
                  });
                </script>
                / Javascript -->

               <!-- <div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
                  <div class="notifications-list" id="main-navbar-notifications">

                    <div class="notification">
                      <div class="notification-title text-info">News</div>
                      <div class="notification-description">5 new members joined today.</div>
                      <div class="notification-ago">3h ago</div>
                      <div class="notification-icon fa fa-users bg-info"></div>
                    </div>
                                           <div class="notification">
                      <div class="notification-title text-warning">Account</div>
                      <div class="notification-description">Your balance is due</div>
                      <div class="notification-ago">6h ago</div>
                      <div class="notification-icon fa fa-warning bg-warning"></div>
                    </div>
                                                            <div class="notification">
                      <div class="notification-title text-success">System</div>
                      <div class="notification-description">You have updated your profile</div>
                      <div class="notification-ago">9h ago</div>
                      <div class="notification-icon fa fa-user bg-success"></div>
                    </div>
                  </div>
                  <a href="#" class="notifications-link">MORE NOTIFICATIONS</a>
                </div>
              </li>
              <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope">&nbsp;</i>
                                <span class="label label-success">5</span>
                            </a>
							-->
                <!-- MESSAGES -->
                
                <!-- Javascript
                <script>
                  init.push(function () {
                    $('#main-navbar-messages').slimScroll({ height: 250 });
                  });
                </script>
                / Javascript -->


<!--
                <div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
                  <div class="messages-list" id="main-navbar-messages">
                    <div class="message">
                      <img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
                      <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                      <div class="message-description">
                        from <a href="#">Robert Jang</a>
                        &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago
                      </div>
                    </div>
                                                       <div class="message">
                      <img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
                      <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                      <div class="message-description">
                        from <a href="#">Robert Jang</a>
                        &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago
                      </div>
                    </div>
                                                            <div class="message">
                      <img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
                      <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                      <div class="message-description">
                        from <a href="#">Robert Jang</a>
                        &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago
                      </div>
                    </div>
                                                            <div class="message">
                      <img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
                      <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                      <div class="message-description">
                        from <a href="#">Robert Jang</a>
                        &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago
                      </div>
                    </div>
                                                            <div class="message">
                      <img src="assets/images/pixel-admin/avatar.png" alt="" class="message-avatar">
                      <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                      <div class="message-description">
                        from <a href="#">Robert Jang</a>
                        &nbsp;&nbsp;·&nbsp;&nbsp;
                        2h ago
                      </div>
                    </div>

                  </div>
                  <a href="#" class="messages-link">MORE MESSAGES</a>
                </div>
              </li>
<!-- End Messages Section -->
<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="debug">
              <i class="fa fa-bars"></i>
              <span>Temp Nav<i class="caret"></i></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="my-fitqik">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile_trainer.php">Profile - Trainer</a></li>
                <li><a href="profile_trainer_public.php">Profile - Trainer Public</a></li>
                <li><a href="profile_user.php">Profile - User</a></li>
                <li><a href="sign-up.php">Sign Up</a></li>
                <li><a href="trainers.php">Trainers List</a></li>
                <li><a href="schedule_session.php">Schedule Session</a></li>
              </ul>
            </li>
                            
                            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="my-fitqik">
              <i class="fa fa-bars"></i>
              <span>My FitQik <i class="caret"></i></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="my-fitqik">
                <li><a href="schedule_session.php">Schedule a Session</a></li>
                <li class="divider"></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li class="divider"></li>
                <li><a href="profile.php">Profile</a></li>
              </ul>
            </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                  <img src="assets/images/pixel-admin/avatar.png" alt="">
                  <span><?php !empty($_SESSION['user_name'])?print $_SESSION['user_name']:print "Users Name" ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Profile <span class="label label-warning pull-right">new</span></a></li>
                  <li><a href="#">Account <span class="badge badge-primary pull-right">new</span></a></li>
                  <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                </ul>
              </li>
                          <li>
							<a href="login.php">Login</a>
						</li>
            </ul> <!-- / .navbar-nav -->
          </div> <!-- / .right -->
        </div>
      </div> <!-- / #main-navbar-collapse -->
    </div> <!-- / .navbar-inner -->
  </div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->
</div>
<div style="height:60px">&nbsp;</div>
