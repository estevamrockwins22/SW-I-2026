<?php include 'includes/header.php'; ?>

<section class="contato">

<form method="POST">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="mensagem" placeholder="Mensagem"></textarea>
    <button type="submit">Enviar</button>
</form>

<?php
if($_POST){
    echo "<p>Mensagem enviada.</p>";
}
?>

</section>

<?php include 'includes/footer.php'; ?>