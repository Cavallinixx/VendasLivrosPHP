<?php
    namespace PHP\Modelo;

    //
    class Usuario{
        //Variaveis
        protected string $nome;
        protected string $usuario;
        protected string $senha;
        protected string $telefone;
        protected string $cpf;


        //Metodo Construtor
        public function __construct(string $nome, string $nome,string $usuario, string $senha, string $telefone, string $cpf){
            $this->nome =$nome;
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->telefone =$telefone;
            $this->cpf = $cpf;
        }//fim do construtor

        public function loginValidar(string $loginDigitado,string $senhaDigitada){
            if ($this->login == $loginDigitado && $this->senha == $senhaDigitada){
                echo "Sucesso no Login!";    
            }else
            {
                echo "Erro no Login!";
            }//if/else
            
        }//fim do metodo validar

        public function __get(string $nome){
            return $this->nome;
        }

        public function __set(string $campo,string $valor){
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string
        {
            return "<br>Nome: ".$this->nome.
                    "<br>Usuário: ".$this->usuario.
                    "<br>Senha: ".$this->senha.
                    "<br>Telefone: ".$this->telefone.
                    "<br>CPF: ".$this->cpf;
                    
                    
        }//fim do metodo imprimir

    
    }//fim da classe
?>