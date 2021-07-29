<?
require "./connect.php";
$connect = new DB;


if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST['newsedit'])) {
        $newsedit = $_POST['newsedit'];
        $title1 = $_POST['title'];
        $title2 = $_POST['title2'];
        $bodytext = $_POST['bodytext'];
        $newtext = str_replace("'","`",$bodytext);
        $image = $_FILES['image'];
        $category_id = $_POST['category_id'];
        $id = $_POST['id'];
        $status = $_POST['status'];

        $update_time = $_POST['update_time'];
        if (isset($_FILES['image'])) {
            $folder_read = '/assets/images/news/';
            $folder = '../../../assets/images/news/';
            $path = $folder.$_FILES['image']['name'];
       
            if (file_exists($path)) {
                unlink($path);
              
                if ($_FILES['image']['size'] > 50000000) {
                    echo "faylni hajmi 5mb dan ortib ketdi";
                    die();
                } else {
                    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'bmp') {
                        if (!move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                            echo "error IMAGE";
                        } else {
                            $path2 =  $folder_read . $_FILES['image']['name'];
                        }
                    }
                }
            } 
        } else {
            echo "Image null!!";
        }
        if ($title1 && $title2 && $bodytext && $path2 && $bodytext  && $update_time && $status) {
            $news = $db->query("UPDATE news SET title=\"$title1\",title2=\"$title2\",bodytext='$newtext',img='$path2' ,category_id='$category_id',update_time='$update_time', status = $status where id =$id 
            ");
            if ($news) {
                header("Location: /admin/");
            } else {
                echo "data not save" . $db->error;
            }
        } else {
            echo "no date";
        }
    }


    if (isset($_POST['c_update'])) {
          $name = $_POST['name'];
        $id = $_POST['id'];
        $update_time = $_POST['update_time'];
        $status = $_POST['status'];
        if ($name && $id && $update_time && $status) {
            $news = $db->query("UPDATE categories SET name='$name',status=$status,update_time='$update_time' where id = $id ");
            if ($news) {
                header("Location: /admin/");
            } else {
                echo "data not save" . $db->error;
            }
        } else {
            echo "no date";
        }
    }
}
