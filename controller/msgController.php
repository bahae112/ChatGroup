<?php
include "../dao/daoMessage.php";
$action=$_GET['send'];
$dao=new DaoMessage();
switch($action){
    case 'Send':
        $id=$_POST['id'];
        $message=$_POST['message'];
        $emetteur=$_POST['emetteur'];
        $date=$_POST['date'];
if (isset($id,$message,$emetteur,$date)){
    $msg= new Message($id,$message,$emetteur,$date);
    $dao->saveMsg($msg);
    echo 'message ajouté';
}
break;
    case 'action':
        $id=$_POST['id'];
        if(isset($id)){
            $msg=$dao->recieveMsg($id);
            if ($msg != null){
                session_start();
                $_SESSION['message']=$msg;
                header('location:../view/coversation.php');
            }
            else {
                header('location:../view/login.html');
            }
           
        }
        break;
}

?>