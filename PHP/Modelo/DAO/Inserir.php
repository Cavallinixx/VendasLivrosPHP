<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    

    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        public Conexao $conexao;
        public string $tabela;
        public string $nome;
        public string $usuario;
        public string $senha;
        public string $telefone;
        public string $cpf;

     
        function cadastrarCliente(
            Conexao $conexao,
            string $nome,
            string $usuario,
            string $senha,
            string $telefone,
            string $cpf
            
        )
        {
            try{
                $conn = $conexao->conectar();//Abrir a conexão com o banco
                $sql  = "Insert into cliente 
                (nome, usuario, senha, telefone, cpf) 
                values ('$nome','$usuario','$senha',
                '$telefone','$cpf')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do método

        


    }//fim da classe
?>