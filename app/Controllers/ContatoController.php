<?php

namespace App\Controllers;

use App\Views\MainView;

/**
 * 
 */
class ContatoController
{

    public function __construct()
    {
        $this->view = new MainView('contato');
    }

    public function executar()
    {
        $this->view->render(array('titulo'=>'Contato'));
    }
}