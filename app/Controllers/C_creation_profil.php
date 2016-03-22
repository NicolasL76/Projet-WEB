<?php
namespace Controllers;

use Core\Controller;
use Core\Models;

    class C_creation_profil extends Controller
    {

        private $C_creation_profil;

        function __construct()
        {
            parent::__construct();
            $this->C_creation_profil=new \Models\M_creation_profil(); //instanciation d'un objet C_creation_profil
            var_dump($this);

            if(isset($_POST['inscription'])){

            }

        }

        /**
         * Fonction permettant d'enregistrer des éléments dans la base de données
         */
        public function Insert()
        {
            $enregistrement = new \Models\M_creation_profil();
            $enregistrement->Enregistrement($_POST['login'], $_POST['mdp'], $_POST['mail']);
        }
    }


?>