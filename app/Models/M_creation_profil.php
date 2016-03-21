<?php
    namespace Models;

    use Core\Model;

    class M_enregistrement extends Model
    {
        private $login;
        private $password;
        private $mail;
        function __construct()
        {
            parent::__construct();
            $this->login = new login ();
            $this->password = new password();
            $this->mail = new mail();
;        }

        public function Enregistrement()
        {

            $this->db->insert('utilisateur', array('login'=> $login, 'password'=> $password, 'mail'=> $mail)) ;

            return true;
        }
    }
?>