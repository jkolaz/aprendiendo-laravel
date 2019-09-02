<?php
namespace Models;

class Users
{
    public static function listUser( $params = array() ) {
        $data = DB::connecction( 'CnSqlServer' )->select("
            SELECT * FROM TBL_USER WHERE ID_ESTADO = :STATUS AND NOM_USER = :USER
        ", $params );

        return $data;
    }
}
