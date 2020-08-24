<?php include('includes/inc_header.php'); ?>
<?php include('includes/inc_busca.php'); ?>
<div class="paginas">
    <div class="breadcumb">
        <p>Voce está em: <a href="#">Imóveis</a> &rsaquo; <a href="#">Pré-lançamento</a></p>
    </div>
    <h1>Pré Lançamento <span class="right" style="width:35px"><a href="#" class="ui-icon ui-icon-minus"></a><a class="ui-icon ui-icon-plus" href="#"></a></span></h1>
    <div class="listagem">
        <ul>
            <?php
            $i = 0;
            $b = 1;
            $arr='ABCDEFGHIJLMNOPQRSTUVXZWKY';                    
            while ($i < 9):
                ?>
                <li <?= $b % 3 == 0 ? 'class="MRnone"' : ''; ?>>
                    <div class="item">
                        <h2>APARTAMENTO <?=$arr[$i];?></h2>
                        <div class="foto-item">
                            <img src="images/predio.jpg" alt="pre lancamento"/>
                        </div>

                        <p>Trade center</p>
                        <p>R$ <?= number_format(234500 * $i, 2, ',', '.') ?>
                            <a href="imoveis.php" class="leiaMais"></a>
                    </div>
                </li>
                <?
                $i++;
                $b++;
            endwhile;
            ?>
        </ul>
    </div>
    <div class="pagination">
        <?php $i = 0;
        while ($i < 8): ?>
            <a href="#"><?= $i + 1; ?></a>
    <?php $i++;
endwhile; ?>
    </div>
<?php include('includes/inc_atendimento.php'); ?>
</div> 
<?php include('includes/inc_footer.php') ?>
 