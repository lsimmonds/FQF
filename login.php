<script src="https://code.jquery.com/jquery.js"></script>
<!-- <script src="assets/javascripts/bootstrap.min.js"></script> -->
<script src="http://199.195.192.136:3000/assets/fq.js"></script>
<?php include 'fw_open.html'; ?>
<?php include 'fw_top_nav.php'; ?> 
<div class="container">
  <div class="panel">
    <div class="panel-body">
      <!-- Begin content here -->
      <div class="page-header" style"bottom-padding: 10px">
        <h1>Login</h1>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <!-- <form class="panel panel-transparent"> -->
            <div class="panel-body">
      <span class="alert alert-danger-error" id="loginFailMsg" style="display: none">Something may have gone wrong</span> <!-- Added by LS -->
              <div class="form-group">
                <label for="inputEmail2" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputEmail" placeholder="Email">
	          <span class="alert-error float-right" id="inputEmailMsg" style="display: none">Something may have gone wrong</span> <!-- Added by LS -->
                </div>
              </div> <!-- / .form-group -->
              <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
              </div> <!-- / .form-group -->
      
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                      <span class="lbl"><a href="password-reset.php">Forgot Password?</a></span>
                </div>
              </div> <!-- / .form-group -->
              <div class="form-group" style="margin-bottom: 0;">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" class="btn btn-primary" id="loginSubmit" >Login Now</button>
                </div>
              </div> <!-- / .form-group -->
            </div>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'fw_footer.html'; ?>
<?php include 'fw_close.html'; ?>

<!-- All below added by LS -->
<script>

  after_login = function (data) {
    console.log("after_login: "+JSON.stringify(data)+", typeof: "+typeof data);
    if ( !data.status || (data.status >= 200 && data.status < 300 || data.status === 304 )) {
      sessionStorage.clear();
      console.log("success: "+JSON.stringify(data));
      sessionStorage.token=data.token;
      sessionStorage.email=data.email;
      sessionStorage.name=data.name;
      console.log("student? :" + (typeof data.student).toString());
      console.log("teacher? :" + (typeof data.teacher).toString());
      var user_data = { name: data.name, email: data.email, token: data.token };
      if(typeof data.student == "object") {
        sessionStorage.student = JSON.stringify(data.student);
	user_data.student = data.student;
      }
      if(typeof data.teacher == "object") {
        sessionStorage.teacher = JSON.stringify(data.teacher);
	user_data.teacher = data.teacher;
      }
console.log("sending user: "+JSON.stringify(user_data));
        $.ajax({
            type: "POST",
            url: "_set_user.php",
            data: { 'user': JSON.stringify(user_data) },
            dataType: 'json',
            async: false,
        });
    }
    else {
      console.log("resp status: "+JSON.stringify(data.status));
      console.log("resp status msg: "+JSON.stringify(data.statusText));
      $( "#loginFailMsg" ).text("Login failed!").toggle(true);
    }
    window.location.href = "dashboard.php";
  }

  fq_login = function(user_data) {
    login_data = { "api_user": { "email": user_data["email"], "password": user_data["password"] } };
    console.log("fq_login: login_data - "+JSON.stringify(login_data));
    api_results = $.ajax({
            type: "POST",
            url: "http://199.195.192.136:3000/api/users/sign_in",
            data: login_data,
            dataType: 'json',
            async: true,
            success: after_login,
            error: after_login
        });
    console.log("fq_login: api_results - "+JSON.stringify(api_results));
  }

  $( "#loginSubmit" )
    .on("click",function(event) {
      var user_data = { "email": $( "#inputEmail" ).val(), "password": $( "#inputPassword" ).val() };
      fq_login(user_data);
    })
      .error(function() { alert( "Handler for .error() called." ); });

</script>

