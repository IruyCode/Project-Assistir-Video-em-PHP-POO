<?php
require_once '/xampp/htdocs/poo_php/Project-Assistir-Video-em-PHP-POO/Video/Class_video.php';
require_once '/xampp/htdocs/poo_php/Project-Assistir-Video-em-PHP-POO/Pessoa/Class_users.php';

    Class Visualizacao{
        private $espectador;
        private $filme;

        // *** Construct ***
        public function __construct($esp,$fil)
        {   $this->espectador = $esp;
            $this->filme = $fil;
            $this->filme->setViews($this->filme->getViews() + 1); // Acrescenta +1 valor ao atributo Views na Classe Video 
            $this->espectador->setTotAssistir($this->espectador->getTotAssistir() + 1);
        }

        // *** Métodos Setters e Guetters ***
        public function getEspectador(){
            return $this->espectador;
        }
        public  function setEspectador($esp){
            $this->espectador = $esp;
        }

        public function getFilme(){
            return $this->filme ;
        }
        public function setFilme($fil){
            $this->filme = $fil ;
        }

        // *** Métodos da Classe ***
        public function avaliar(){
            $this->filme->setAvaliacoes(5);
        }
        public function avaliarNota($nota){
            $this->filme->setAvaliacoes($nota);
        }
        public function avaliarPorc($porc){
            $nova = 0 ; 
            if($porc <= 20){
               $nova = 3; 
            }   elseif( $porc <= 50 ){
                $nova = 5 ;
                }elseif($porc <= 90){
                    $nova = 8 ;
                }else {
                    $nova = 10 ;
                }
                $this->filme->setAvaliacoes($nova);
        }
    }

?>