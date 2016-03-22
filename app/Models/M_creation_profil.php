<?php
    namespace Models;

    use Core\Model;
    use Helpers\Password;

    class M_creation_profil extends Model
    {
        function __construct()
        {
            parent::__construct();
        }

        public function Enregistrement($login, $password, $mail)
        {

            $this->db->insert('utilisateur', array('login'=> $login, 'password'=> Password::make($password), 'mail'=> $mail)) ;

            return true;
        }
    }
?>