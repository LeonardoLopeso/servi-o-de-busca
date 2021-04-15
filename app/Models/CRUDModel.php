<?php

namespace App\Models;

use PDO;

/**
 * 
 */
class CRUDModel
{
    
    public static function insert($nomeEmp,$nomePessoa,$email,$desc,$whats,$instagram,$facebook,$telefone,$img,$data)
    {
        $sql = MySqlModel::conectar()->prepare("INSERT INTO `negocio` VALUES (null,?,?,?,?,?,?,?,?,?,?)");
        if($sql->execute(array($nomeEmp,$nomePessoa,$email,$desc,$whats,$instagram,$facebook,$telefone,$img,$data)))
            return true;
        else
            return false;
    }

    public static function select($query)
    {
        $sql = MySqlModel::conectar()->prepare("SELECT * FROM `negocio` $query");
        $sql->execute();
        if($sql->rowCount() == 0) {
            $result = [];
        }else{
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;

    }

    public static function update()
    {
        
    }
    
    public static function delete()
    {
        
    }

    /**
     * Função responsavél por buscar o total de serviços cadastrados
     */
    public static function totalCadastros()
    {
        $sql = MySqlModel::conectar()->query("SELECT * FROM `negocio`");
        $result = $sql->rowCount();
        return $result;
    }
}