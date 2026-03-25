<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
    <style>
        body { font-family: sans-serif; margin: 50px; line-height: 1.6; }
        form { margin-bottom: 20px; border: 1px solid #ccc; padding: 20px; width: 300px; }
        input { display: block; margin-bottom: 10px; width: 100%; }
        .resultado { font-weight: bold; font-size: 1.2em; color: blue; }
    </style>
</head>
<body>

    <h2>Cálculo de Média do Aluno</h2>
    
    <!-- Formulário que envia os dados para a própria página -->
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" required>
        
        <label>Nota 1:</label>
        <input type="number" name="m1" step="0.1" min="0" max="10" required>
        
        <label>Nota 2:</label>
        <input type="number" name="m2" step="0.1" min="0" max="10" required>
        
        <label>Nota 3:</label>
        <input type="number" name="m3" step="0.1" min="0" max="10" required>
        
        <button type="submit" name="calcular">Calcular Média</button>
    </form>

    <?php
    // Verifica se o botão "calcular" foi clicado
    if (isset($_POST['calcular'])) {
        
        // Coleta os dados digitados
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $M1 = $_POST['m1'];
        $M2 = $_POST['m2'];
        $M3 = $_POST['m3'];

        // Calcula a média
        $media = ($M1 + $M2 + $M3) / 3;

        // Lógica do conceito (seu código original)
        if ($media > 10) {
            $conceito = "Erro Na Contagem";
        }
        elseif ($media >= 9) {
            $conceito = "MB";
        }
        elseif ($media >= 7) {
            $conceito = "B";
        }   
        elseif ($media >= 4) {
            $conceito = "R";
        }
        elseif ($media >= 0.5) {
            $conceito = "I";
        }
        else {
            $conceito = "NA";
        }

        // Exibe a mensagem final
        echo "<div class='resultado'>";
        echo "O aluno $nome $sobrenome obteve a média " . number_format($media, 2) . ".<br>";
        echo "Situação/Conceito: $conceito";
        echo "</div>";
    }
    ?>

</body>
</html>