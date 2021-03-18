<?php

namespace App\Views;

/**
 * 
 */
class MainView
{
    private $fileName;
    private $header;
    private $footer;

    const TITULO = 'Produto | Serviços';
    public $menuItems = array('Inicio','Sobre','Contato');

    public function __construct($fileName,$header = 'header',$footer = 'footer')
    {
        $this->fileName = $fileName;
        $this->header = $header;
        $this->footer = $footer;
    }

    public function render($arr = [])
    {
        include 'pages/templates/'.$this->header.'.php';
        include 'pages/'.$this->fileName.'.php';
        include 'pages/templates/'.$this->footer.'.php';
    }
}