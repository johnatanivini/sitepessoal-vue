<?php include('includes/inc_header.php'); ?>
<?php include('includes/inc_busca.php'); ?>
<div class="paginas">
    <a href="quero-vender.php">
        <img src="css/i/bg_sell_imovel.png" alt="Quero vender"/>
    </a>
        <div id="venda" class="tabs" style="background:none">
            <div class="slid-item">
                <ul>
                    <?php
                    $i = 0;

                    while ($i < 12):
                        ?>
                        <li>
                            <div class="item">
                                <div class="foto-item">
                                    <img src="images/predio.jpg" alt="pre lancamento"/>
                                </div>
                                <h2>PRONTOS E REVENDA</h2>
                                <p>Trade center</p>
                                <a href="imoveis.php" class="leiaMais"></a>
                            </div>
                        </li>
                        <? $i++;
                    endwhile; ?>
                </ul>
        </div>
    </div>
   <?php include('includes/inc_atendimento.php')?>
</div>
<?php
include('includes/inc_footer.php')?>
