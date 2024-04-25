<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Portaria</title>
</head>
<body>
    <h1>Sistema de Portaria</h1>
    <h2>Cadastro de Visitantes</h2>
    <form action="register_visitor.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="documento">Documento de Identificação:</label><br>
        <input type="text" id="documento" name="documento" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <h2>Registro de Entrada e Saída</h2>
    <form action="record_entry_exit.php" method="POST">
        <label for="documento_registro">Documento de Identificação:</label><br>
        <input type="text" id="documento_registro" name="documento_registro" required><br><br>
        <label for="tipo">Tipo (Entrada/Saída):</label><br>
        <select id="tipo" name="tipo">
            <option value="entrada">Entrada</option>
            <option value="saida">Saída</option>
        </select><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
