<?
session_start();
if (!isset($_SESSION['admin_token'])) {
    header("Location: /admin/login.php");
  }
require "./layouts/Action/connect.php";
$connect = new DB;
$items = [];

if ($connect) {
  $db = $connect->getConnect();
    if(isset($_GET['id']) ){
      $id = $_GET['id'];
        $news = $db->query("select * from news where id = $id");
        if ($news->num_rows > 0) {
            while ($items = $news->fetch_object()) {
                $n[] = $items;
            }
        }
    }
  $categories = $db->query("select id, name from categories");
  if ($categories->num_rows > 0) {
    while ($items = $categories->fetch_object()) {
      $rows[] = $items;
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
  <title>AzNews - Admin</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
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
      <? include  './layouts/navbar.php'; ?>
      <? include  './layouts/sidebar.php'; ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <form action="./layouts/Action/edit.php" method="POST" enctype="multipart/form-data">

              <?
              if (isset($_GET['id'])) {
                foreach ($n as $item) { ?>
                  <?php include  './layouts/newsedit.php' ?>
              <?php }
              }
              else{
                include './layouts/c_edit.php';
              }  ?>

            </form>

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
  <script src="assets/bundles/summernote/summernote-bs4.js"></script>
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  <script src="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/page/create-post.js"></script>
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->

</html>