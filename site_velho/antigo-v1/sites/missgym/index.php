<?php
    //incluindo o header
    include('includes/inc.header.php');
    //incluindo a lateral
    include('includes/inc.lateral.php');
?>
<div class="grid_18 pagina alpha omega right">
    <!-- conteudo -->
    <div class="conteudo">
        <!-- titulo e filtro -->
        <div class="redondo titulo_pagina">
            <form class="right" action="#" method="post">
                <fieldset>
                    <select name="filtro">
                        <option value="0">Filtrar por</option>
                        <option value="1">Opção 1</option>
                        <option value="2">Opção 2</option>
                        <option value="3">Opção 3</option>
                    </select>
                </fieldset>
            </form>
            <h1>DESTAQUES</h1>
        </div>
        <div class="clear"></div>
        <!-- produtos destaques -->
        <?php
        $p = 0;
        while ($p < 9):
            ?>
            <div class="produtos">
                <div class="content">
                    <p class="titulo">LOREM IPSUM DOLOR SIT AMET...</p>
                    <div class="img">
                        <img src="images/blusa.jpg" alt="blusa"/>
                    </div>
                    <div class="clear"></div>
                    <div class="descricao">
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <span class="preco">R$ 24,00</span>
                    </div>
                    <div class="clear"></div>
                    <div class="botoes">
                        <a href="carrinho.php" class="add-carrinho">ADD AO CARRINHO</a>
                        <a href="produto-detalhe.php" class="visualizar right">VISUALIZAR</a>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <?php $p++;
        endwhile; ?>
        <div class="clear"></div>
        <!--paginacao-->
        <div class="paginacao">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </div>
    </div>
</div>
<?php
    //incluindo o rodape
    include('includes/inc.rodape.php');
?>