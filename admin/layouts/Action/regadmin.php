<?
session_start();
require './connect.php';
$connect = new DB;

if ($connect) {
    $db = $connect->getConnect();
    if (isset($_POST['reg'])) {
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $username = strtolower($_POST['username']);
         $password = strtolower($_POST['password']); 
      
        if (!isset($_POST['reg_admin'])) {
            $reg_admin = 0;
        }
        else {
            $reg_admin = 1;
        }
    
    
        if ($firstname && $lastname && $username && $password) {
          $add = $db->query("INSERT INTO user (firstname,lastname,username,password,reg_admin) VALUES ('$firstname','$lastname','$username','$password',$reg_admin)");
            if ($add) {
               header("Location: /admin");
            }
            else {
                echo "no create".$db->error;
            }
       
        }
    }
}
