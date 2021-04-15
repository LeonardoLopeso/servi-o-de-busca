<?php

namespace App\Controllers;

use App\Views\MainView;
/**
 * 
 */
class SobreController
{

    public function __construct()
    {
        $this->view = new MainView('sobre');
    }

    public function executar()
    {
        $this->view->render(array('titulo'=>'Sobre'));
    }
}