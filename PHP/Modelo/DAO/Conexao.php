<?php
class Conexao {
    private $host = 'localhost'; // Alterar conforme necessário
    private $usuario = 'root';    // Alterar conforme necessário
    private $senha = '';          // Alterar conforme necessário
    private $banco = 'livrariati18n'; // Alterar conforme necessário
    private $conn;

    public function conectar() {
        $this->conn = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
?>

