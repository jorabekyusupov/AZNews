<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>AzNews - Admin</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/cc9f5ac842261e6ad2e996a4e2dc90af.png" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <? include  './layouts/navbar.php';?>
      <? include  './layouts/sidebar.php';?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
                <? echo date("Y-m-d h:i:s"); ?>
        </section>
        <? include "./layouts/settingSidebar.php"; ?>
      </div>
      <? include "./layouts/footer.php"; ?>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>