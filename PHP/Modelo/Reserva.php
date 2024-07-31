<?php
    namespace PHP\Modelo;

    class Reserva{
        protected string $produto;
        protected string $email;
        protected string $quantidade;
        protected string $dataReserva;

        public function __construct(string $produto,string $email, string $quantidade, string $dataReserva){
            $this->produto = $produto;
            $this->email = $email;
            $this->quantidade = $quantidade;
            $this->dataReserva = $dataReserva;

        }//fim do construtor

        public function __get(string $nome){
            return $this->nome;
        }//fim do get 

        public function __set(string $campo, string $valor){
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string 
        {
            return "<br>Qual o livro? ".$this->produto.
                    "<br>E-mail para ser notificado: ".$this->email.
                    "<br>Qual a quantidade que deseja? ".$this->quantidade.
                    "<br>Digite a data: ".$this->dataReserva;
        }
    }//fim da classe
?>