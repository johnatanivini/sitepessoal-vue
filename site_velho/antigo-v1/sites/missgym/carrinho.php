<?php
//incluindo o header
include('includes/inc.header.php');
//incluindo a lateral
include('includes/inc.lateral.php');
?>
<div class="grid_18 pagina alpha omega right">
    <!-- conteudo -->
    <div class="conteudo carrinho">
        <!-- titulo e filtro -->
        <div class="redondo titulo_pagina">
            <h1>SUA SACOLA</h1>
        </div>
        <div class="clear"></div>
        <!-- produtos carrinho -->
        <div class="lista-pedido">
            <form action="#" method="post">
                <?php
                $p = 0;
                while ($p < 3):
                    ?>
                    <div class="content redondo">

                        <div class="img thumbnail">
                            <img src="images/blusa.jpg" alt="blusa"/>
                        </div>
                        <p class="titulo">LOREM IPSUM DOLOR SIT AMET...</p>
                        <div class="descricao">
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                        <!-- atualizar item-->
                        <div class="preco-carrinho redondo">

                            <input type="text" class="redondo" style="position:relative;" name="preco" value="2" />
                            <input type="button" name="remover" value="REMOVER" />
                            <p class="preco">R$ 23,00</p>
                        </div>

                        <div class="clear"></div>

                    </div>

                    <?php $p++;
                endwhile; ?>
               <!-- botões carrinho-->
                <div class="botoes-carrinho left">
                    <input type="button" name="atualizar" value="ATUALIZAR"/>
                    <input type="button" name="finalizar" value="FINALIZAR" onclick="javascript:location.href='confirmacao.php'"/>
                    <div class="clear"></div>
                </div>
               <!-- total do carrinho -->
                <div class="total-carrinho redondo">
                    <div class="titulo redondo">TOTAL</div>
                    <div class="preco redondo">R$ 45,00</div>
                </div>
            </form>
        </div>
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