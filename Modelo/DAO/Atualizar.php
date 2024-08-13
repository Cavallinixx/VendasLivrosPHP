<?php

    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;


    class Atualizar{

        function atualizarCliente(Conexao $conexao,string $campo,string $novoDado,string $cpf){
            try{
                $conn = $conexao->conectar();
                $sql = "update cliente set $campo = '$novoDado' where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br><br>Atualizado com Sucesso!";

                }else{
                    echo "Não foi possivel atualizar!";
                }
            }catch(Exception $ero){
                echo $erro;
            }


        }//fim do function 

    }//fim da classe



?>
