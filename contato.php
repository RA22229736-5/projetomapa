<?php 
require("layout/cabecalho.php");
?>

<div class="pagina-prato descricao">
    <h2>A Rita da Marmita entrega</h2>
    <p>WhatsApp 11 99192-9394
    <img id="delivery" src="./img/icondelivery.png"/></p>
    <p>Rod. dos Imigrantes, 1</p>
    <p>Jabaquara, São Paulo - SP,</p>
    <p>CEP 04329-900</p>
</div>


<section>
    <h1 class="others">Outros Pratos</h1>
    <div class="container-pratos">
        <?php
        foreach ($items as $key => $value) {
            if ($value['id'] !=  $id) {

        ?>
        <article class="prato">
            <h2><?= $value['marmita']; ?></h2>
            <img src="<?= $value['figura']; ?>" />

            <p class="btn-comprar">
                <a href="prato.php?id=<?= $value['id']; ?>"> Provar mais  </a>
            </p>
          
        </article>
        <?php }
        } ?>
    </div>





<?php 
require("layout/footer.php");
?>