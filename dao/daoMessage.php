<?php
include "../model/message.php";
class DaoMessage{
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
public function saveMsg(Message $msg){
    $stm=$this->dbh->prepare("INSERT into message values(?,?,?,?)");
    $stm->bindValue(1,$msg->getId());
    $stm->bindValue(2,$msg->getMessage());
    $stm->bindValue(3,$msg->getEmetteur());
    $stm->bindValue(4,$msg->getDate()); 
    $stm->execute();
}
public function recieveMsg($id){
    $msg=null;
    $stm=$this->dbh->prepare("SELECT * from message where id=?");
    $stm->bindParam(1,$id);
    $stm->execute();
    $result=$stm->fetch(PDO::FETCH_ASSOC);
    if (!empty($result)){
        $msg=new Message($result['id'],$result['message'],$result['emetteur'],$result['date']);
    }
    return $msg;
}

}


?>