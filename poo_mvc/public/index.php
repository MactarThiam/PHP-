<?php
require_once("../vendor/autoload.php");
// Front controller
// Url localhost:8000
echo "je suis sur le front controller"."<br>";
//chargement manuel
//require_once("../modles/User.php");

//A chaque manipuler une classe
//-1-importer la classe

//require_once('./../models/Classe.php');
//require_once('./../models/User.php');

//-2-creer des objets=instantiations

//$classe1=new Classe();
//$classe2=new Classe();
//$classe3=new Classe;

//-3-Donner un etat c a d donner les valeurs aux attributs
//$classe1->setNiveau("L1");
//$classe1->setFiliere("Glrs");
//$classe1->setLibelle("specialite");
//$cl1->setLibelle("L1Glrs");

//cho "Niveau : ".$classe1->getNiveau()."<br>";
//echo "Filliere : ".$classe1->getFiliere()."<br>";
//echo "Libelle : ".$classe1->getLibelle()."<br>";
//creation d'utilisateur
//$user1=new User();
//$user2=new User();
//les setters
//$user1->setLogin('RP');
//$user1->setPassword('pwd');

//$user2->setLogin('AC');
//$user2->setPassword('Inconnu');

//les getters
//echo "user1:  ".$user1->getLogin()."<br>"."password:  ".$user1->getPassword()."<br>";
//echo "user2:  ".$user2->getLogin()."<br>"."password:  ".$user2->getPassword()."<br>";
use App\Models\AC;
$ac =new AC();
$ac->setLogin("ac");
$ac->setPassword("ac");
$ac->insert();
echo "<pre>";
AC::selectAll();
var_dump(AC::selectById(1));
echo "</pre>";
