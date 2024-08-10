<?php

namespace PHP\Modelo\DAO;
require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

class Excluir{

    function excluirCliente(Conexao $conexao,string $cpf){

        try{
            $conn = $conexao->conectar();
            $sql = "delete from cliente where cpf = '$cpf'";
            $result = mysqli_query($conn,$sql);

            mysqli_close($conn);
            if($result){
                echo "Excluido com sucesso!";
            }else{
                echo "Não foi possivel excluir";
            }

        }catch(Exception $erro){
            echo $erro;
        }//fim do catch
    }//fim do metodo


}//fim da classe

?>