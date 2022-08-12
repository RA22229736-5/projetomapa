<?php 
require("layout/cabecalho.php");
?>

<ul>
    <li>A Rita da Marmita entrega _h_--:</li>
    <li>WhatsApp 11 99192-9394</li>
    <li>Rod. dos Imigrantes, 1</li>
    <li>Jabaquara, São Paulo - SP,</li>
    <li>CEP 04329-900</li>
</ul>


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