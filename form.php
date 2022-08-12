<?php include 'layout/cabecalho.php'; 

if (isset($_POST)) {
    if (!empty($_POST)) {
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = $_POST['nome'];
            // echo $nome;
        }
    }
   
}

if (isset($_POST)) {
    if (!empty($_POST)) {
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
            // echo $email;
        }
    }
   
}
?>
<div id="dados_formulario">
    <p>Olá <strong><?=$nome?></strong> sua inscrição foi realizada com sucesso!</p>    
    <p id="form">Você receberá semanalmente nosso cardápio em seu email <strong> <?=$email;?> </strong></p>
</div>


<?php include 'layout/footer.php';