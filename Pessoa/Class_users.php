<?php 
    require_once 'Class_pessoa.php';

        Class Users extends Pessoa{
            private $login,$totAssitir;

            // *** Métodos Setters e Guetters 
            public function getLogin(){
                return $this->login ;
            }
            public function setLogin($lo){
                $this->login = $lo ;
            }

            public function getTotAssistir(){
                return $this-> totAssitir;
            }
            public function setTotAssistir($totA){
                $this->totAssitir = $totA;
            }
            public function __construct($no,$se,$lo)
            {   
                parent::__construct($no,$se);// Chamada ao construtor da super Classe  
                $this->login = $lo;
                $this->totAssitir = 0;
            }
            // *** Método das Classes ***
            public function assistiuMaisUm(){
                $this->totAssitir ++;
            }
        }
?>