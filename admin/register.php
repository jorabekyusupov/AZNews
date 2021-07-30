<?
session_start();
if (!isset($_SESSION['reg_admin'])) {
    header("Location: /admin/");
  }


?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>AzNews - Admin</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href="/assets/img/logo/cc9f5ac842261e6ad2e996a4e2dc90af.png"/>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="./layouts/Action/regadmin.php">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="firstname" required autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" required name="lastname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="username" class="form-control" required name="username">
                    <div class="invalid-feedback">
                    </div>
                  </div>
               
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" required name="password">
                    </div>
                    <div class="form-group">
                      <div class="control-label">Register Admin</div>
                      <label class="custom-switch mt-2">
                        <input type="checkbox" name="reg_admin" value="1"  class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                  
                      </label>
                    </div>
               
                  <div class="form-group">
                    <button type="submit" name="reg" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>