<?php
    namespace PHP\Modelo\DAO;
    
    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        
        function consultarIndividual(Conexao $conexao,string $nomeTabela,string $nomeCampo,string $codigo){

            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela where $nomeCampo = '$codigo'";
                $result = mysqli_query($conn,$sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $codigo ){
                        echo "\nNome: ".$dados["nome"].
                            "\nUsuário: ".$dados["usuario"].
                            "\nSenha: ".$dados["senha"].
                            "\nTelefone: ".$dados["telefone"].
                            "\nCPF: ".$dados["cpf"];
                        return;//Encerrando o processo
                    }
                    echo "CPF digitado não é válido!";
                }//fim do enquanto

            }catch(Exception $erro){
                echo $erro;
            }
        }//fim do metodo

        function consultartudo(Conexao $conexao,string $nomeTabela){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>Nome: ".$dados["nome"].
                        "<br>Usuário: ".$dados["usuario"].
                        "<br>Senha: ".$dados["senha"].
                        "<br>Telefone: ".$dados["telefone"].
                        "<br>CPF: ".$dados["cpf"];
                }//fim do while
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do metodo

    }//fim da classe




?>