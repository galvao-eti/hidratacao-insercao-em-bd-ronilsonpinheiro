<?php

namespace TrabalhoPos;

class Conecta {

    public function novaConexao() {
        $dsn = 'mysql:dbname=trabalho_pos_2017;host=localhost';       
        $dbn = new \PDO($dsn, 'root', '');
        return $dbn;
    }

}