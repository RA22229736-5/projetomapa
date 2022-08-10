<?php include 'layout/cabecalho.php';

require("dados.php");

?>
<section class="pagina-prato">   
        <?php
            if(isset($_GET['id']) && !empty($_GET['id'])){
                $id = $_GET['id'];
            foreach ($items as $key => $value) {
                if ($value['id'] ==  $id) {
            ?>
            <h2><?= $value['marmita']; ?></h2>
            <img src="<?= $value['figura']; ?>" />
            
            <div class="descricao">
                <p><?= $value['detalhes'] ?></p>
                <p class="btn-comprar" id="btn_prato"> <a href="index.php">Provar mais</a> </p>
            </div>
            <?php } }
            }else {
            echo "<h2><em>Página Não Encontrada!</em></h2>";}
        ?>
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