<?php
namespace Controllers;

use Core\Controller;
use Core\Model;

    class C_enregistrement extends Controller
    {

        private $C_creation_profil;

        function __construct()
        {
            parent::__construct();
            $this->C_creation_profil=new \Models\M_enregistrement(); //instanciation d'un objet C_creation_profil
            var_dump($this);

            if(isset($_POST['inscription'])){

        }

        }

        /**
         * Fonction permettant d'enregistrer des éléments dans la base de données
         */
        public function insert()
        {
            $enregistrement = new \Models\M_enregistrement();
            $enregistrement->Enregistrement(array('login'=>'Pierre', 'password'=> '1234', 'mail'=> 'pierre@lol.fr'));
        }
    }


?>