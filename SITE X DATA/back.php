<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

// Cria a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Verifica se o formulário foi submetido
if (isset($_POST['submit'])) {
	// Obtém os valores dos campos do formulário
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	// Prepara a consulta SQL para inserir os valores na tabela
	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

	// Executa a consulta SQL
	if (mysqli_query($conn, $sql)) {
	    echo "Cadastro realizado com sucesso!";
	} else {
	    echo "Erro ao cadastrar: " . mysqli_error($conn);
	}
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);


?>
