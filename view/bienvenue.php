<?php
include "../model/utilisateur.php";
session_start();
if(isset($_SESSION['utilisateur'])){
    header('location:chat.html');
}
else {
    header('location:login.html');
}
?>