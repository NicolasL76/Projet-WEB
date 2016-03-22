<?php
namespace Controllers;

use Core\Controller;
use Core\Models;
use Core\View;

class C_creation_profil extends Controller
    {

        private $C_creation_profil;

        function __construct()
        {
            parent::__construct();
            $this->C_creation_profil=new \Models\M_creation_profil(); //création d'un objet C_creation_profil


            if(isset($_POST['inscription'])){

            }

        }

        /**
         * Fonction permettant d'enregistrer des éléments dans la base de données
         */
        public function C_creation_profil()
        {
            $enregistrement = new \Models\M_creation_profil();  //création d'un objet enregistrement
            $enregistrement->Enregistrement($_POST['login'], $_POST['mdp'], $_POST['mail']);    //Enregistrement prendra en paramètres les "login" "mdp" et "mail" passés par la variable POST

        }
    }


?>