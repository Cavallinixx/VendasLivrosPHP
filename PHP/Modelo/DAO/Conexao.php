<?php
    namespace PHP\Modelo\DAO;

    class Conexao{

        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','livrariati18n');
                if($conn){
                    echo "<br>Conectado com Sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim do conectar
    }//fim da classe
?>