<?php include 'layout/cabecalho.php';

require("dados.php");

?>
<section>
    <div class="pagina-prato">
        <?php
        $id = $_GET['id'];

        foreach ($items as $key => $value) {
            if ($value['id'] ==  $id) {

        ?>
        <article class="pagina-prato">
            <h2><?= $value['marmita']; ?></h2>
            <img src="<?= $value['figura']; ?>" />
            
            <div class=" descricao">
                <p><?= $value['detalhes'] ?></p>
            </div>

            <!-- <p class="btn-comprar"> 
                <a href="prato.php?id=<?= $value['id']; ?>"> Provar mais</a>
            </p> -->
            
            <?php }
        } ?>
        </article>
    </div>
</section>


<section>
    <h1 class="others">Outros Pratos</h1>
    <div class="container-pratos">
        <?php
        foreach ($items as $key => $value) {
            if ($value['id'] !=  $id) {

        ?>
        <article class="prato">
            <!-- <h2>"<?= $value['marmita']; ?>"</h2> -->
            <img src="<?= $value['figura']; ?>" />

            <p class="btn-comprar">
                <a href="prato.php?id=<?= $value['id']; ?>"> Provar mais  </a>
            </p>
          
        </article>
        <?php }
        } ?>
    </div>
</section>
<?php include './layout/footer.php' ?>
</body>

</html>