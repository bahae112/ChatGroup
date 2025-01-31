<?php
$login=$_POST['email'];
$psw=$_POST['psw'];

$con=new mysqli('localhost','root','','test_dbaa');
if (!$con){
    die("erreur".mysqli_error($con));
}
if (isset($login,$psw)){
    $sql="SELECT * from utilisateur where email='$login' and password='$psw'";
    $result=$con->query($sql);
    $user=$result->fetch_assoc();
    if (!empty($user)){
        session_start();
        $_SESSION['utilisateur']=$user['name'];
        header('location:chat.html');
    }
    else 
    {
header('location:login.html');
}
    
}
?>