<?php include 'layout/cabecalho.php';
require("dados.php");
?>

<section class="container-pratos">
    <?php
    foreach ($items as $key => $value) {
    ?>
    <article class="prato">
        <h2><?= $value['marmita']; ?></h2>
        <img src="<?= $value['figura']; ?>" title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>" />
        <p class="descricao"> <?=substr( $value['detalhes'], 0, 20) ?>...</p>           
        <p class="btn-comprar"> <a href="prato.php?id=<?= $value['id']; ?>"> Provar mais </a></p>           
    </article>
    <?php } ?>
</section>

<?php include 'layout/footer.php' ?>
</body>

</html>