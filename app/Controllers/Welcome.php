<?php
/**
 * Welcome controller.
 *
 * @author David Carr - dave@daveismyname.com
 *
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 */
namespace Controllers;

use Core\Controller;
use Core\View;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Welcome extends Controller
{
    /**
     * Call the parent construct.
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Welcome');
    }

    /**
     * Define Index page title and load template files.
     */
    public function index()
    {
        $data['title'] = 'Créez votre portfolio en quelques clics!';
        $data['welcome_message'] ='welcome_message';

        View::renderTemplate('header', $data);
        View::render('welcome/welcome', $data);
        View::renderTemplate('footer', $data);
    }

    /**
     * Define Subpage page title and load template files.
     */
    public function subPage()
    {
        $data['title'] = 'subpage_text';
        $data['welcome_message'] ='subpage_message';

        View::renderTemplate('header', $data);
        View::render('welcome/subpage', $data);
        View::renderTemplate('footer', $data);
    }

    /**
     * Définit la page inscription et charge les éléments nécessaires à son affichage
     */
    public function Inscription()
    {
        $data['title'] = 'Inscription';
        $data['welcome_message'] ='Inscription_message';

        View::renderTemplate('header', $data);
        View::render('welcome/Inscription', $data);
        View::renderTemplate('footer', $data);
    }


}
