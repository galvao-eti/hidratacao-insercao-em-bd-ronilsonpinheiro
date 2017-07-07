<?php

namespace TrabalhoPos\Traits;

trait Hidratacao {

    public function populaobjeto(array $data) {

        try {
            foreach( $data as $key => $val ) {
                $this->$key = $val;
            }
        } catch (Exception $e) {
            echo $e;
        }

    }
    
}