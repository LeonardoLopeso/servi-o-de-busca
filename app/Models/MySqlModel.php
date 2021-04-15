<?php

namespace App\Models;

use PDO;
use App\Util\ConstantesGenericasUtil;

/**
 * 
 */
class MySqlModel
{
    private static $pdo;

    public static function conectar()
    {
        if (self::$pdo == null) {
            try {
                self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                echo ConstantesGenericasUtil::MSG_CADASTRO_ERRO;
            }
        }
        return self::$pdo;
    }
}