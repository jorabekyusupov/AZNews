<? 
require "./connect.php";
$connect = new DB;
if ($connect) {
    $db = $connect -> getConnect();
    
    if (isset($_POST['newscreate'])) {
        $title1 = $_POST['title'];
        $title2 = $_POST['title2'];
        $bodytext = $_POST['bodytext'];
        $newtext = str_replace("'","`",$bodytext);
        $image = $_FILES['image'];
        $category_id = $_POST['category_id'];
        $status = $_POST['status'];
        $hour = $_POST['hour'];
        $create_time = $_POST['create_time'];
        $update_time = $_POST['update_time'];
       
        if (isset($_FILES['image'])) {
            $folder_read ='/assets/images/news/';
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
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                            $path2 =  $folder_read . $_FILES['image']['name'];
                        } else {
                            echo "error IMAGE";
                        }
                    }
                }
               
            }  
            else{

                if ($_FILES['image']['size'] > 50000000) {
                    echo "faylni hajmi 5mb dan ortib ketdi";
                    die();
                } else {
                    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'bmp') {
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                            $path2 =  $folder_read . $_FILES['image']['name'];
                        } else {
                            echo "error IMAGE";
                        }
                    }
                }
               
            }
        
        } else {
            echo "Image null!!";
        }
        
        if ($title1 && $title2 && $bodytext && $path && $category_id && $create_time && $update_time && $hour) {
            $news = $db -> query("INSERT INTO news (title,title2,bodytext,img,category_id,update_time,create_time,status,hour) values
             (\"$title1\",\"$title2\",'$newtext',\"$path2\",\"$category_id\",\"$create_time\",\"$update_time\",$status, \"$hour\") ");
           if ($news) {
               header("Location: /admin/");
            }
            else{
                echo "data not save".$db->error;
            }
        }
        else{
            echo "no date";
        }
    }
    $c_create = $_POST['c_create'];
    if (isset($c_create)) {
        $name = $_POST['name'];
        $id_href ="nav-".$_POST['name'];
       $status = $_POST['status'];
       if($name && $status){
        $category = $db->query("insert into categories (name, status,id_href) values ('$name',$status,'$id_href')");
        if ($category) {
            header("Location: /admin/");
         }
         else{
             echo "data not save".$db->error;
         }
       }
    }
}


?>