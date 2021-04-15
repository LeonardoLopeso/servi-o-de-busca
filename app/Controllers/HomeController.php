<?php

namespace App\Controllers;

use App\Views\MainView;
use App\Models\CRUDModel;
use App\Models\MySqlModel;

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
        //Adicionar no array o resultado da pesquisa do usuário
        $msgWhats = "Contato%20conseguido%20pelo%20site%20_du%20morro. site: ".'http://localhost/search_services/';
        $consulta = CRUDModel::select(self::search());
        $total = CRUDModel::totalCadastros();
        $this->view->render(array('titulo'=>'Serviço de busca','consulta'=>$consulta,'total-servicos'=>$total,'msgWhats'=>$msgWhats));
    }

    /**
     * Metódo responsável por retornar a pesquisa do usuário
     */
    public static function search()
    {   
        if(isset($_POST['acao'])) {
            $pesquisa = $_POST['pesquisa'];
            $query = " WHERE nome_negocio LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%'";
            return $query;
        }else{
            return $query = '';
        }
    }
}
