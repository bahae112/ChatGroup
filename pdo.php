<?php
$login=$_POST['email'];
$psw=$_POST['psw'];
try{
    $pdo=new PDO('mysql:host=localhost;dbname=test_dbaa',"root","");
    $stm=$pdo->prepare("SELECT * from utilisateur where email=? and password=?");
    $stm->bindParam(1,$login);
    $stm->bindParam(2,$psw);
    $stm->execute();
    $result=$stm->fetch(PDO::FETCH_ASSOC);
    if (!empty($result)){
        session_start();
        $_SESSION['utilisateur']=$result['name'];
        header('location:bienvenue.php');
    }

}
catch(PDOException $e){
    print 'Erreur :'.$e->getMessage().'<br>';
}
?>