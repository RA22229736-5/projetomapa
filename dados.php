<?php

$title = "Marmitas da Dona Rita";
$author = "&copy;2022 Desenvolvido por Kédma Costa - Acadêmica em SISIN - Unicesumar";
$contato = 'A Rita da Marmita entrega  <img id="delivery" src="./img/icondelivery.png"/><br>WhatsApp 11 99192-9394<br/> Rod. dos Imigrantes, 1 - Jabaquara, São Paulo - SP';
$icon_delivery ="./img/icondelivery.png";

$items = array(
    0 => array('id' => '1', 
    'figura' => 'img/muqueca.png',
    'title_img' => 'Prato Muqueca',
    'marmita' => 'Muqueca de Cação', 
    'tamanho' => '<span class="tamanho">
    Escolha o tamanho <br/>
    <span class="preco-tammanho"><input value="P" type="radio" name="tamanho"/> P 
    <input value="M" type="radio" name="tamanho" /> M 
    <input value="G" type="radio" name="tamanho"/> G</span>
    </span>', 
    'detalhes' => 'Caldo de peixe com ervas frescas, garantindo que a moqueca seja ainda mais saborosa, essa receita temperamos com uma combinação de ervas frescas.<br/> Usamos hortelã, limão, manjericão, cebolinha e coentro.', 
    'preco' => '<span class="preco-tammanho">R$20,00 / R$30,00 / R$40,00</span>'),
    1 => array('id' => '2', 
    'figura' => 'img/carnepanela.png',
    'title_img' => 'Prato Carne de Panela', 
    'marmita' => 'Carne de panela', 
    'tamanho' => '<span class="tamanho">
    Escolha o tamanho <br/>
    <span class="preco-tammanho"><input value="P" type="radio" name="tamanho"/> P 
    <input value="M" type="radio" name="tamanho" /> M 
    <input value="G" type="radio" name="tamanho"/> G</span>
    </span>',
    'detalhes' =>'Carne na panela de pressão com batata, mandioquinha, cenoura e alguns temperos especiais deixam o molho e a carne com aquele sabor inesquecível.', 
    'preco' => '<span class="preco-tammanho">R$20,00 / R$30,00 / R$40,00</span>'),
    2 => array('id' => '3', 
    'figura' => 'img/prato5.png',
    'title_img' => 'Prato Frango com Molho', 
    'marmita' => 'Frango ao molho mostarda',
    'tamanho' => '<span class="tamanho">
    Escolha o tamanho <br/>
    <span class="preco-tammanho"><input value="P" type="radio" name="tamanho"/> P 
    <input value="M" type="radio" name="tamanho" /> M 
    <input value="G" type="radio" name="tamanho"/> G</span>
    </span>',
    'detalhes' => 'Frango ao molho mostarda, ervas finas e arroz branco, simples e delicioso.',
    'preco' => '<span class="preco-tammanho">R$20,00 / R$30,00 / R$40,00</span>'),
    3 => array('id' => '4', 
    'figura' => 'img/prato1.png',
    'title_img' => 'Prato Salmão com Brócolis', 
    'marmita' => 'Salmão com Brócolis', 
    'tamanho' => '<span class="tamanho">
    Escolha o tamanho <br/>
    <span class="preco-tammanho"><input value="P" type="radio" name="tamanho"/> P 
    <input value="M" type="radio" name="tamanho" /> M 
    <input value="G" type="radio" name="tamanho"/> G</span>
    </span>',
    'detalhes' => 'Salmão com legumes e brócolis refogados, um sabor sofisticado.',
    'preco' => '<span class="preco-tammanho">R$20,00 / R$30,00 / R$40,00</span>'),
    4 => array('id' => '5', 
    'figura' => 'https://images.unsplash.com/photo-1528738064262-9f834cbdfda1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80', 
    'title_img' => 'Prato Penne ao Molho', 
    'marmita' => 'Penne ao Molho de Iguarias', 
    'tamanho' => '<span class="tamanho">
    Escolha o tamanho <br/>
    <span class="preco-tammanho"><input value="P" type="radio" name="tamanho"/> P 
    <input value="M" type="radio" name="tamanho" /> M 
    <input value="G" type="radio" name="tamanho"/> G</span>
    </span>',
    'detalhes' => 'Macarrão Penne ao molho de iguarias, cebola, azeitonas e azeite',
    'preco' => '<span class="preco-tammanho">R$20,00 / R$30,00 / R$40,00</span>'),
    5 => array('id' => '6', 
    'figura' => 'https://images.unsplash.com/photo-1540432797114-187727adf19b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80', 
    'title_img' => 'Prato Arroz integral', 
    'marmita' => 'Arroz integral e gratinados', 
    'tamanho' => '<span class="tamanho">
    Escolha o tamanho <br/>
    <span class="preco-tammanho"><input value="P" type="radio" name="tamanho"/> P 
    <input value="M" type="radio" name="tamanho" /> M 
    <input value="G" type="radio" name="tamanho"/> G</span>
    </span>',
    'detalhes' => 'Arroz frito, batata doce e mandioca gratinados com arroz de beterraba',
    'preco' => '<span class="preco-tammanho">R$20,00 / R$30,00 / R$40,00</span>'),
    6 => array('id' => '7', 
    'figura' => 'https://images.unsplash.com/photo-1555949258-eb67b1ef0ceb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80', 
    'title_img' => 'Prato Penne com Kani', 
    'marmita' => 'Penne com creme de Kani', 
    'tamanho' => '<span class="tamanho">
    Escolha o tamanho <br/>
    <span class="preco-tammanho"><input value="P" type="radio" name="tamanho"/> P 
    <input value="M" type="radio" name="tamanho" /> M 
    <input value="G" type="radio" name="tamanho"/> G</span>
    </span>',
    'detalhes' => ' Macarrão Penne com creme de Kani e ervas finas',
    'preco' => '<span class="preco-tammanho">R$20,00 / R$30,00 / R$40,00</span>'),
);

