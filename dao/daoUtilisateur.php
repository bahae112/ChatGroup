<?php
include "../model/utilisateur.php";
class DaoUtilisateur{
private $dbh;

public function __construct(){
    try{
        $this->dbh=new PDO('mysql:host=localhost;dbname=test_dbaa',"root","");
    }
    catch(PDOException $e){
        print ('Erreur :'.$e->getMessage()."<br>");
        die();
    }  
}
public function saveUser(Utilisateur $user){
    $stm=$this->dbh->prepare("INSERT into utilisateur values(?,?,?,?,?,?,?,?)");
    $stm->bindValue(1,$user->getEmail());
    $stm->bindValue(2,$user->getPsw());
    $stm->bindValue(3,$user->getName());
    $stm->bindValue(4,$user->getBirthday());
    $stm->bindValue(5,$user->getTel());
    $stm->bindValue(6,$user->getVisibility());
    $stm->bindValue(7,$user->getSite());
    $stm->bindValue(8,$user->getDesc());
    
    $stm->execute();
}
public function findUser($email,$psw){
    $user=null;
    $stm=$this->dbh->prepare("SELECT * from utilisateur where email=? and password=?");
    $stm->bindParam(1,$email);
    $stm->bindParam(2,$psw);
    $stm->execute();
    $result=$stm->fetch(PDO::FETCH_ASSOC);
    if (!empty($result)){
        $user=new Utilisateur($result['email'],$result['password'],$result['name'],$result['birthdate'],$result['telephone'],$result['visibility'],$result['website'],$result['description']);
    }
    return $user;
}

}


?>