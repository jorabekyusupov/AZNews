<?
require './connect.php';
session_start();

$connect = new DB;
if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST['login'])) {
    $users = $db->query("select * from user");
    if ($users->num_rows>0) {
        while ($rows=$users->fetch_object()) {
            $user[]=$rows;
        }
    }
    $username =strtolower($_POST['username']);
    $password =strtolower($_POST['password']);
    $token=bin2hex(random_bytes(20));
        foreach ($user as $item) {
            if ($item->username == $username && $item->password == $password) {
                $_SESSION['admin_token'] = $token;
                $_SESSION['firstname'] = $item->firstname;
                $_SESSION['lastname'] = $item->lastname;
                if ($item->reg_admin == 1) {
                    $_SESSION['reg_admin'] = $item->reg_admin;
                    header("Location: /admin/");
                }
                header("Location: /admin/");
            }
            else {
                header("Location: /admin/");
            }
        }

   
    }
}


?>