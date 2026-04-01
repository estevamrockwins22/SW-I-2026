<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cálculo de Salário</title>
</head>
<body>

<h2>Cálculo de Salário Líquido</h2>

<form method="POST">
    Nome: <input type="text" name="nome" required><br><br>
    Salário Bruto: <input type="number" name="salario" step="0.01" required><br><br>
    Faltas (dias): <input type="number" name="faltas" required><br><br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_POST) {

    $nome = $_POST['nome'];
    $salario = floatval($_POST['salario']);
    $faltas = intval($_POST['faltas']);

    // =========================
    // CÁLCULO INSS (progressivo)
    // =========================

    $inss = 0;

    if ($salario <= 1621.00) {
        $inss = $salario * 0.075;

    } elseif ($salario <= 2902.84) {
        $inss = (1621.00 * 0.075) +
                (($salario - 1621.00) * 0.09);

    } elseif ($salario <= 4354.27) {
        $inss = (1621.00 * 0.075) +
                ((2902.84 - 1621.00) * 0.09) +
                (($salario - 2902.84) * 0.12);

    } elseif ($salario <= 8475.55) {
        $inss = (1621.00 * 0.075) +
                ((2902.84 - 1621.00) * 0.09) +
                ((4354.27 - 2902.84) * 0.12) +
                (($salario - 4354.27) * 0.14);

    } else {
        // teto
        $inss = (1621.00 * 0.075) +
                ((2902.84 - 1621.00) * 0.09) +
                ((4354.27 - 2902.84) * 0.12) +
                ((8475.55 - 4354.27) * 0.14);
    }

    // =========================
    // DESCONTOS
    // =========================

    // Faltas
    $descontoFaltas = $faltas * ($salario / 30);

    // Vale Transporte (6%)
    $vt = $salario * 0.06;

    // Total descontos
    $totalDescontos = $inss + $descontoFaltas + $vt;

    // Salário líquido
    $salarioLiquido = $salario - $totalDescontos;

    // =========================
    // RESULTADO
    // =========================

    echo "<h3>$nome, o total do seu salário após os descontos é: R$ " 
        . number_format($salarioLiquido, 2, ',', '.') . "</h3>";

    echo "<p>INSS: R$ " . number_format($inss, 2, ',', '.') . "</p>";
    echo "<p>Faltas: R$ " . number_format($descontoFaltas, 2, ',', '.') . "</p>";
    echo "<p>Vale Transporte: R$ " . number_format($vt, 2, ',', '.') . "</p>";
}
?>

</body>
</html>