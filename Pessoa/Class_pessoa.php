<?php 
   abstract Class Pessoa {
        protected $nome,$idade,$sexo ; 
        protected $experiencia ;

        public function __construct($no,$se){
            $this->setNome($no);
            $this->setIdade(99);
            $this->setSexo($se);
            $this->setExperiencia(0);
        }
        // *** Metodos Setters e Guetters ***
            public function getNome(){
                return $this->nome;
            }
            public function setNome($no){
                $this-> nome = $no ;
            }

            public function getIdade(){
                return $this->idade;
            }
            public function setIdade($id){
                $this-> idade = $id ;
            }

            public function getSexo(){
                return $this->sexo;
            }
            public function setSexo($se){
                $this->sexo = $se;
            }

            public function getExperiencia(){
                return $this->sexo;
            }
            public function setExperiencia($exp){
                $this->experiencia = $exp;
            }

            // *** Métodos da Classe *** 
            protected function ganharExp($n){
                $this->setExperiencia($this->getExperiencia() + $n);
            }
    }
?>