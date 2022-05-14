<?php 
namespace App\Core;
use App\Exceptions\BdConnexionException;
class DataBase{
    private \PDO|null $pdo=null;
    public function openConnexion(){
        try {
            $this->pdo=new \PDO("mysql:dbname=gestion_scolaire_l2;host=localhost","root");
        } catch (\Exception $ex) {
              die("Erreur Connexion -Veuillez contacter votre Admin");
        }
       
    }
    public function closeConnexion(){
         $this->pdo=null;
    }

    public function executeSelect(string $sql,array $data=[],$single=false){
        $this->openConnexion();
         $stm=$this->pdo->prepare($sql);
         $stm->execute($data);
        if($single){
            $result=$stm->fetch();
        }else{
            $result=$stm->fetchAll();
        }
        $this->closeConnexion();
        return  $result;
        
    }

    public function executeUpdate(string $sql,array $data=[]):int{
        $this->openConnexion();
         $stm=$this->pdo->prepare($sql);
         $stm->execute($data);
         $result=$stm->rowCount();
        $this->closeConnexion();
        return  $result;
    }
}