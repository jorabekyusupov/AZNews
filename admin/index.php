<?
  session_start();
  require "./layouts/Action/connect.php";
  $connect = new DB;
  if (!isset($_SESSION['admin_token'])) {
    header("Location: /admin/login.php");
  }
  $items=[];
  if ($connect) {
    $db = $connect -> getConnect();
    $news = $db -> query("select * from news order by id desc");
    $categories = $db -> query("select * from categories order by id asc");
    $users = $db->query("select id,firstname,lastname,username,reg_admin,status from user");
    if ($users -> num_rows > 0) {
        while ($rows = $users -> fetch_object()) {
          $user[] = $rows;
        }
    }
    if ($news -> num_rows > 0) {
        while ($rows = $news -> fetch_object()) {
          $items[] = $rows;
        }
    }
    if ($categories -> num_rows > 0) {
        while ($rows = $categories -> fetch_object()) {
          $category[] = $rows;
        }
    }
  
  
  }

?>

<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <? include  './layouts/navbar.php'; ?>
      <? include  './layouts/sidebar.php'; ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">

          
            <? include  './layouts/t_news.php' ?>
            <?
             include  './layouts/t_category.php' ?>
            <?
             include  './layouts/admin.php' ?>


          </div>
        </section>
        <? include "./layouts/settingSidebar.php"; ?>
      </div>
      <? include "./layouts/footer.php"; ?>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->

</html>