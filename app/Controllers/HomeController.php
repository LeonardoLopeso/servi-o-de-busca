<?php

namespace App\Controllers;

use App\Views\MainView;

/**
 * 
 */
class HomeController
{
    
    public function __construct()
    {
        $this->view = new MainView('home');
    }

    public function executar()
    {
        $this->view->render(array('titulo'=>'Título da page'));
    }
}
