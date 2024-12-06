<?php
require 'includes/header.php';
require 'includes/produtos.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produto = $produtos[$id];
} else {
    echo "<h1>Não foi possível localizar o produto desejado!</h1>";
    exit;
}
?>
<nav class="breadcrumb">
    <a href="index.php">Produtos</a>
    <p><?= $produto['nome']; ?></p>
</nav>
<section>
    <div class="det-foto col-6 br-8">
        <img src="assets/<?= $produto['foto']; ?>" alt="">
    </div>
    <div class="det-desc col-6">
        <h2><?= $produto['nome']; ?></h2>
        <p class="lead"><?= $produto['descricao']; ?></p>
        <h1>R$ <?= $produto['preco']; ?></h1>
        <button>Comprar</button>
    </div>
</section>
<?php
require 'includes/footer.php';
?>