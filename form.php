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
    <h4>Olá <?=$nome?> sua inscrição foi realizada com sucesso!</h4>    
    <em>Você receberá semanalmente no cardápio em seu email <?=$email;?> </em>
</div>


<?php include 'layout/footer.php';