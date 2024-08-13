<?php
    namespace PHP\Modelo;

    class Livro{
        //Declarando as variáveis
        protected string $tituloLivro;
        protected int $anoLivro;
        protected string $autor;
        protected string $preco;
        protected string $idioma;
        protected string $estoque;

        //Metodo Construtor
        public function __construct(string $tituloLivro, int $anoLivro, string $autor, string $preco, string $idioma, string $estoque){
            $this->tituloLivro = $tituloLivro;
            $this->anoLivro = $anoLivro;
            $this->autor = $autor;
            $this->preco = $preco;
            $this->idioma = $idioma;
            $this->estoque = $estoque;

        }//fim do construtor

        public function estoqueLivros(int $numeroLivros){
            $resultado = $this->estoque - $numeroLivros;
            if($numeroLivros <= $this->estoque){
                echo "<br<br><br> A quantidade de livros solicitada é: ".$numeroLivros."."."  E a quantidade que ainda restam no estoque é: ".$resultado;
            }else{
                echo "<br><br> A quantidade desejada não está disponivel em nosso estoque.";
            }
            
        }

        public function __get(string $nome){
            return $this->nome;
        }
    
        public function __set(string $campo,string $valor){
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string 
        {
            return "<br>Título do Livro: ".$this->tituloLivro.
                    "<br>Ano do Livro: ".$this->anoLivro.
                    "<br>Autor: ".$this->autor.
                    "<br>Preço: ".$this->preco.
                    "<br>Idioma: ".$this->idioma.
                    "<br>Estoque: ".$this->estoque;

        }//fim do imprimir

    }//fim da classe

?>