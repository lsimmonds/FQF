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
        <h1>Password Reset</h1>
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
              <div class="form-group" style="margin-bottom: 0;">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" class="btn btn-primary" id="signUpSubmit" >Send Password Reset Link</button>
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

  after_signup = function (data) {
    //will return on success: {"id":11,"created_at":"2014-02-02T03:57:55.826Z","updated_at":"2014-02-02T03:57:55.842Z","creator_id":null,"updater_id":null,"email":"test18@leonsimmonds.com"}, typeof: object
    //will return on failure: {"readyState":4,"responseText":"{\"errors\":{\"email\":[\"has already been taken\"]}}","responseJSON":{"errors":{"email":["has already been taken"]}},"status":422,"statusText":"Unprocessable Entity "}, typeof: object
    console.log("after_signup: "+JSON.stringify(data)+", typeof: "+typeof data);
    if ( data.status >= 200 && data.status < 300 || data.status === 304 ) {
      $( "#inputNameMsg" ).toggle(false);
      //$( "#inputPasswordMsg" ).toggle(false);
      $( "#inputEmailMsg" ).toggle(false);
      var user_data = { "email": $( "#inputEmail" ).val(), "password": $( "#inputPassword" ).val() };
      fq_login(user_data);
    }
    else {
      console.log("resp status: "+JSON.stringify(data.status));
      console.log("resp status msg: "+JSON.stringify(data.statusText));
      console.log("resp text: "+JSON.stringify(data.responseText));
      console.log("resp JSON: "+JSON.stringify(data.responseJSON));
      if(data.responseJSON && data.responseJSON["errors"]) { 
	console.log("got errors: "+ JSON.stringify(data.responseJSON["errors"]))
	if(data.responseJSON["errors"]["name"]) {
	  $( "#inputNameMsg" ).text(data.responseJSON["errors"]["name"][0]).toggle(true);
	}
	else { $( "#inputNameMsg" ).toggle(false); }
	if(data.responseJSON["errors"]["email"]) {
	  if(data.responseJSON["errors"]["email"][0] == "has already been taken" && !data.responseJSON["errors"]["email"][1] && !data.responseJSON["errors"]["password"]) {
	    var user_data = { "email": $( "#inputEmail" ).val(), "password": $( "#inputPassword" ).val() };
	    fq_login(user_data);
	  }
	  else {
	    $( "#inputEmailMsg" ).text(data.responseJSON["errors"]["email"][0]).toggle(true);
	  }
	}
	else { $( "#inputEmailMsg" ).toggle(false); }
	if(data.responseJSON["errors"]["password"]) {
	  $( "#inputPasswordMsg" ).text(data.responseJSON["errors"]["password"][0]).toggle(true);
	}
	else {$( "#inputPasswordMsg" ).toggle(false);}
      }
    }
  }

  after_login = function (data) {
    console.log("after_login: "+JSON.stringify(data)+", typeof: "+typeof data);
    if ( !data.status || (data.status >= 200 && data.status < 300 || data.status === 304 )) {
      console.log("success: "+JSON.stringify(data));
      sessionStorage.token=data.token;
      sessionStorage.email=data.email;
      sessionStorage.name=data.name;
      //var user_data = { user: { name: data.name, email: data.email, token: data.token } };
//      var user_data = { name: data.name, email: data.email, token: data.token };
      //var user_data = "name="+data.name+"&email="+data.email+"&token="+data.token ;
      //$.post("_set_user.php", user, function() { alert("set PHP session"); }, "json");
      //$.post("_set_user.php", user, function() { window.location.href = "index-logged-in.php"; }, "json");
//console.log("sending user: "+JSON.stringify(user_data));
//        $.ajax({
//            type: "POST",
//            url: "_set_user.php",
//            //contentType: "application/json; charset=utf-8",
//            data: { 'user': JSON.stringify(user_data) },
//            dataType: 'json',
////            cache: false,
//            async: false,
////            success: function(response) {
////                    window.location.href = "dashboard.php";
////                }
//        });
//      //window.location.href = "index-logged-in.php";
    }
    else {
      console.log("resp status: "+JSON.stringify(data.status));
      console.log("resp status msg: "+JSON.stringify(data.statusText));
      $( "#loginFailMsg" ).text("Login failed!").toggle(true);
    }
  }

  fq_login = function(user_data) {
    login_data = { "api_user": { "email": user_data["email"], "password": user_data["password"] } };
    console.log("fq_login: login_data - "+JSON.stringify(login_data));
    //api_results = myFQ.post("http://199.195.192.136:3000/api/users/sign_in", login_data, after_login);
    api_results = $.ajax({
            type: "POST",
            //url: "http://199.195.192.136:3000/api/users/sign_in",
            url: "_set_user.php",
            data: login_data,
            dataType: 'json',
            //async: false,
            async: true,
            success: after_login,
            error: after_login
        });
 
    console.log("fq_login: api_results - "+JSON.stringify(api_results));
    window.location.href = "dashboard.php";
  }

  $( "#signUpSubmit" )
    .on("click",function(event) {
      var data = {"api_user": {}};
      data["api_user"]["name"]                  = $("#inputName").val();
      data["api_user"]["email"]                 = $("#inputEmail").val();
      data["api_user"]["password"]              = $("#inputPassword").val();
      data["api_user"]["password_confirmation"] = $("#inputPassword").val();
console.log("data: "+JSON.stringify(data));
        $.ajax({
            type: "POST",
            url: "http://199.195.192.136:3000/api/users",
            data: data,
            dataType: 'json',
            async: false,
            success: after_signup,
            error: after_signup
        });
    })
    .error(function() { alert( "Handler for .error() called." ); });

</script>

