<?php




require_once("../vendor/autoload.php");
require_once('./../core/constantes.php');
require_once('./../core/fonctions.php');

use App\Controllers\SecuriteController;
use App\Controllers\ClasseController;
use App\Core\Router;
use App\Exceptions\RouteNotFoundException;

$router=new Router();

//Enregister une route  : uri associe a un Controller et une action

//$router->route("uri",[controller,action]);

$router->route("/",[SecuriteController::class,"connexion"]);
$router->route("/logout",[SecuriteController::class,"deconnexion"]);
$router->route("/classe",[ClasseController::class,"lister"]);
$router->route("/classe-add",[ClasseController::class,"ajouter"]);
$router->route("/classe-up",[ClasseController::class,"modifier"]);
$router->route("/classe-del",[ClasseController::class,"supprimer"]);
$router->route("/etudiant",[ClasseController::class,"lister"]);
$router->route("/etudiant-add",[ClasseController::class,"ajouter"]);
$router->route("/etudiant-up",[ClasseController::class,"modifier"]);
$router->route("/etudiant-del",[ClasseController::class,"supprimer"]);

try {
  $router->resolve();
} catch (RouteNotFoundException $ex) {
   die($ex->message);
}


// Une variable d'une classe


/* use App\Models\Module;
use App\Models\RP;
use App\Core\Request;
use App\Core\DataBase;
use App\Exceptions\BdConnexionException;
use App\Controllers\ClasseController;
$rp =new RP(); */
use App\Models\RP;
/* use App\Models\RP;
$rp =new RP();
$rp->setLogin("rp3");
$rp->setPassword("rp");
$rp->insert();
echo "<pre>";
RP::selectAll();
var_dump(RP::selectById(1));
echo "</pre>";
echo "</pre>"; */
