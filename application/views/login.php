<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="google-signin-client_id" content="742206129940-s0m3fk2iodmk8flt72m6cc045fngkvep.apps.googleusercontent.com">
  <title>Login - My Tasks</title>
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?=base_url();?>assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
       <form role="form" method="post" action="<?= base_url();?>tasks/logar" class="form-login">
          <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email">
          </div>
          <div class="form-group">
            <label for="senha">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password"name="senha" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
        
          <a class="btn btn-primary btn-block" href="index.html">Login</a>
          <div class="g-signin2" data-onsuccess="onSignIn"></div>
        </form>
        
      </div>
    </div>
  </div>
    <p id='msg'></p>
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());
  
}
</script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url();?>assetsvendor/jquery-easing/jquery.easing.min.js"></script>
   <script src="https://apis.google.com/js/platform.js" async defer></script>
</body>

</html>
