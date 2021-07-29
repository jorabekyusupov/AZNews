<?

require "./connect.php";
$connect = new DB;



if ($connect) {
    $db = $connect->getConnect();


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $news = $db->query(" DELETE FROM news WHERE id = $id ");
        if ($news) {
            header("Location: /admin/");
        } else {
            echo "data not save" . $db->error;
        }
    } 


    $c_delete = $_POST['category_delete'];
    $c_id = $_POST['id'];
    if (isset($c_delete)) {
        $news = $db->query(" DELETE FROM categories WHERE id = $c_id ");
        if ($news) {
            header("Location: /admin/");
        } else {
            echo "data not save" . $db->error;
        }
    } else {
        echo "no date";
    }
}
