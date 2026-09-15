<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 1 - Validação de Acesso</title>
</head>
<body>

    <h2>Verificação de Acesso</h2>

    <form method="POST" action="5a_desafio1.php">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="ano_nascimento">Ano de Nascimento:</label><br>
        <input type="number" id="ano_nascimento" name="ano_nascimento" required><br><br>

        <button type="submit">Verificar</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $ano_nascimento = (int)$_POST['ano_nascimento'];
    $ano_atual = (int)date("Y");
    
    $idade = $ano_atual - $ano_nascimento;

    if ($idade >= 18) {
        echo "<p style='color: green;'>Acesso permitido, " . $nome . "!</p>";

        $data_hora = date("Y-m-d H:i:s");
        $log = "Data/Hora: " . $data_hora . " | Nome: " . $nome . " | Idade: " . $idade . " anos\n";

        file_put_contents("log_acessos.txt", $log, FILE_APPEND);
    } else {
        echo "<p style='color: red;'>Acesso negado, " . $nome . "!</p>";
    }
}
?>

</body>
</html>