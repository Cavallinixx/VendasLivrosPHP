<?php
namespace PHP\Modelo\DAO;

require_once('Conexao.php');

use PHP\Modelo\DAO\Conexao;

class Inserir {
    private Conexao $conexao;

    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao;
    }

    public function cadastrarCliente(
        string $nome,
        string $usuario,
        string $senha,
        string $telefone,
        string $cpf
    ): string {
        try {
            $conn = $this->conexao->conectar(); // Abrir a conexão com o banco

            // Preparar a consulta SQL com parâmetros
            $sql = "INSERT INTO cliente (nome, usuario, senha, telefone, cpf) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);

            if ($stmt) {
                // Bind dos parâmetros
                mysqli_stmt_bind_param($stmt, "sssss", $nome, $usuario, $senha, $telefone, $cpf);

                // Executar a consulta
                $result = mysqli_stmt_execute($stmt);

                // Fechar a declaração
                mysqli_stmt_close($stmt);
            } else {
                return "<br><br>Erro ao preparar a consulta: " . mysqli_error($conn);
            }

            // Fechar a conexão
            mysqli_close($conn);

            if ($result) {
                return "<br>Inserido com sucesso!";
            } else {
                return "<br><br>Não inserido!";
            }
        } catch (Exception $erro) {
            return "<br><br>Erro: " . $erro->getMessage();
        }
    }
}
?>
