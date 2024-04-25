<?php
// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $documento = $_POST['documento_registro'];
    $tipo = $_POST['tipo'];

    // Verificar se o visitante está registrado
    // Aqui você pode implementar a lógica para verificar se o visitante está registrado
    // Por exemplo, verificar em um banco de dados MySQL ou em um arquivo CSV
    // Exemplo básico de verificação em arquivo CSV:
    $file = fopen('visitantes.csv', 'r');
    $visitorFound = false;
    while (($row = fgetcsv($file)) !== false) {
        if ($row[1] == $documento) {
            $visitorFound = true;
            break;
        }
    }
    fclose($file);

    if ($visitorFound) {
        // Registrar entrada ou saída do visitante
        // Aqui você pode implementar a lógica para registrar a entrada ou saída do visitante
        // Por exemplo, salvar em um banco de dados MySQL ou em um arquivo de registro
        // Após registrar, redirecione para a página inicial
        header("Location: index.php");
        exit;
    } else {
        // Visitante não encontrado, mostrar mensagem de erro
        echo "Visitante não encontrado.";
    }
}
?>
