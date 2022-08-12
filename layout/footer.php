<?php
	require("dados.php");
?>
<footer>
    <ul class="footer-menu">
        <li>Inscrever-se</li> 
        <form action="form.php"  method="POST" class="form-footer">
            <input type="text" name="nome" placeholder="Seu nome"/>
            <input type="email" name="email" placeholder="Seu e-mail"/>
            <button>Ok</button>           
        </form>
        <li></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="#">Redes Sociais</a></li>
        <li><a href="#">Politica de Privacidade</a></li>
        <li><a href="#">Termo de Uso</a></li>
    </ul>
    <hr />
    <p class="autoral"><?php $author ?> </p>
</footer>