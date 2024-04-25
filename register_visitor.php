<?php
// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $nome = $_POST['nome'];
    $documento = $_POST['documento'];

    // Salvar os dados do visitante em um banco de dados ou arquivo de registro
    // Aqui você pode implementar a lógica para salvar os dados do visitante
    // Por exemplo, salvar em um banco de dados MySQL ou em um arquivo CSV
    // Exemplo básico de salvamento em arquivo CSV:
    $file = fopen('visitantes.csv', 'a');
    fputcsv($file, array($nome, $documento));
    fclose($file);

    // Redirecionar de volta para a página inicial após o cadastro
    header("Location: index.php");
    exit;
}
?>
