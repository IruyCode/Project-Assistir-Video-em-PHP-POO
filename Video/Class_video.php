<?php 
    require_once 'Interface.php';

        Class Video implements acoesVideo{
            // *** Atributos ***
            private $titulo ;
            private $avaliacoes ;
            private $views ;
            private $curtidas ; 
            private $reproduzindo ;

            // *** Construtor da Class
            public function __construct($ti)
            {
                $this->titulo = $ti;
                $this->avaliacoes = 1;
                $this->views = 0;
                $this->curtidas = 0;
                $this->reproduzindo = false;
            }
            // *** Métodos Setters e Guetters ***
                public function getTitulo(){
                    return $this->titulo;
                }
                public function setTitulo($ti){
                    $this->titulo = $ti ;
                }

                public function getAvaliacoes(){
                    return $this->avaliacoes;
                }
                public function setAvaliacoes($ava){
                    $media = 0;
                    $media = ($this->avaliacoes + $ava) / $this->views;
                    $this->avaliacoes = $media ;
                }

                public function getViews(){
                    return $this->views;
                }
                public function setViews($vi){
                    $this->views = $vi ;
                }

                public function getCurtidas(){
                    return $this->curtidas;
                }
                public function setCurtidas($cu){
                    $this->curtidas = $cu;
                }

                public function getReproduzindo(){
                    return $this-> reproduzindo;
                }
                public function setReproduzindo($rep){
                    $this->reproduzindo = $rep;
                }
                // *** Métodos da Interface ***
                
                public function play(){
                    $this->reproduzindo = true;
                }
                public function pause(){
                    $this->reproduzindo = false ; 
                }
                public function like(){
                    
                    $this->setCurtidas($this->getCurtidas()+1);
                }
        }
        
?>