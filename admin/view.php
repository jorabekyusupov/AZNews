<?
session_start();
if (!isset($_SESSION['admin_token'])) {
    header("Location: /admin/login.php");
  }
require "./layouts/Action/connect.php";
$connect = new DB;
$id = $_GET['id'];
if ($connect) {
    $db = $connect->getConnect();
    $news = $db->query("select * from news where id= $id");
    if ($news->num_rows > 0) {
        while ($rows = $news->fetch_object()) {
            $items[] = $rows;
        }
    }
}




?>
<!DOCTYPE html>
<html lang="en">


<!-- card.html  21 Nov 2019 03:54:26 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>AZNews - Admin </title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/chocolat/dist/css/chocolat.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href="/assets/img/logo/cc9f5ac842261e6ad2e996a4e2dc90af.png" />
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
                    <? foreach ($items as $item) { ?>
                        
                        <? include  './layouts/view.php'; ?>

                    <? } ?>
                </section>
                <? include "./layouts/settingSidebar.php"; ?>
            </div>
            <? include "./layouts/footer.php"; ?>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- card.html  21 Nov 2019 03:54:30 GMT -->

</html>