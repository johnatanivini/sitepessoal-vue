<div class="grid_6 lateral">
    <div class="menu_categoria redondo">
        <div class="top_menu_categoria redondo">
            <h2>CATEGORIAS</h2>
        </div>
        <ul>
            <?php
            $i = 0;
            while ($i < 5):
                ?>
                <li>

                    <a href="#">Categoria <?= $i + 1 ?></a>
                </li>
                <?php
                $i++;
            endwhile;
            ?>
        </ul>
    </div> 
    <div class="clear"></div>
    <div class="lateral-carrinho redondo">
        <div class="top_lateral_carrinho redondo">
            <h2>SACOLA DE COMPRAS</h2>
        </div>
        <div class="total-produtos redondo">
            <p>2 PRODUTOS</p>
        </div>
        <div class="total-compras redondo">
            <p>Total de Compras</p>
            <p class="preco-sacola">
                R$ 0,00
            </p>
        </div>
        <a href="carrinho.php" class="left btn-sacola redondo">VER SACOLA</a>
        <a href="#" class="right btn-finalizar redondo">FINALIZAR</a>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="catalogo redondo">
        <h2 class="redondo">CATÁLOGO</h2>
        <p>
        <p>
            Confira fotos excusivas em nosso <br /> catálogo de produtos
        </p>
        </p>
        <a href="catalogo.php" ></a>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="mais-vendidos">
        <h2>MAIS VENDIDOS</h2>
        <?php
        $b = 0;
        while ($b < 4):
            ?>

            <div class="item_mais_vendidos">
                <p class="titulo">ST BY STAR TRAC DELUXE...</p>
                <p class="descricao"><a href="#">We take part in numerous researches with different health...</a></p>
                <p class="preco-mais-vendido">R$ 200,00</p>
            </div>
            <?php $b++;
        endwhile; ?>
    </div>
</div>