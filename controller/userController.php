<?php
include "../dao/daoUtilisateur.php";
$action=$_GET['action'];
$dao=new DaoUtilisateur();
switch($action){
    case 'insert':
        $visible=$_POST['visibility'];
        $pseudo=$_POST['pseudo'];
        $site=$_POST['site'];
        $tel=$_POST['telephone'];
        $email=$_POST['email'];
        $psw=$_POST['password'];
        $birth=$_POST['birthdate'];
        $desc=$_POST['description'];
if (isset($visible,$pseudo,$site,$tel,$email,$psw,$birth,$desc)){
    $user= new Utilisateur($email,$psw,$pseudo,$birth,$tel,$visible,$site,$desc);
    $dao->saveUser($user);
    echo 'element ajouté';
}
break;
    case 'login':
        $login=$_POST['email'];
        $psw=$_POST['psw'];
        if(isset($login,$psw)){
            $user=$dao->findUser($login,$psw);
            if ($user != null){
                session_start();
                $_SESSION['utilisateur']=$user;
                header('location:../view/bienvenue.php');
            }
            else {
                header('location:../view/login.html');
            }
           
        }
        break;
}

?>