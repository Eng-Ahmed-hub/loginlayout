<?php



if(isset($_POST['login'])){

$email    = $_POST["email"];
$password = $_POST["password"];

require "connect.php";

$select = "select * from users where email = '$email' and password = '$password'";
$query = mysqli_query($conn, $select);

if(mysqli_num_rows($query)>0){

    header('Location: https://www.facebook.com/profile.php?id=100005143127685');


}else{

    echo 'wrong';
}



}