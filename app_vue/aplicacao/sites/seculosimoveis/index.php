<?php include('includes/inc_header.php'); ?>
<?php include('includes/inc_busca.php'); ?>
<div class="paginas">
    <a href="quero-vender.php">
        <img src="css/i/bg_sell_imovel.png" alt="Quero vender"/>
    </a>
    <div class="banner_pagina">
        <ul class="cycle">
            <li>
                <a href="#">
                    <img src="banner/banner_1.jpg" alt="Banner"/>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="banner/banner_2.jpg" alt="Banner"/>
                </a>
            </li>
        </ul>
        <div id="nav"></div>
        <a href="#" id="prev"><img src="css/i/prev.png" alt="anterior"/></a>
        <a href="#" id="next"><img src="css/i/next.png" alt="próxima"/></a>
    </div>
    <div class="tabs">
        <!-- tabs -->
        <ul class="tabNavigation">
            <li><a href="#pre">PRE-LANÇAMENTO</a></li>
            <li><a href="#lanca">LANÇAMENTOS</a></li>
            <li><a href="#venda">PRONTOS E REVENDA</a></li>
            <li><a href="#terrenos">TERRENOS</a></li>
        </ul>
        <!-- tab containers -->
        <div id="pre" class="box">

            <div class="slid-item">
                <ul>
                    <?php
                    $i = 0;

                    while ($i < 3):
                        ?>
                        <li>
                            <div class="item">
                                <div class="foto-item">
                                    <img src="images/predio.jpg" alt="pre lancamento"/>
                                </div>
                                <h2>PRÉ-LANÇAMENTO</h2>
                                <p>Trade center</p>
                                <a href="imoveis.php" class="leiaMais"></a>
                            </div>
                        </li>
                        <? $i++;
                    endwhile; ?>
                </ul>
            </div>
            <div class="nav-slid">
                <a href="#" class="prev">&lsaquo;</a>
                <a href="#" class="next">&rsaquo;</a>
            </div>
        </div>
        <div id="lanca" class="box">
            <div class="slid-item">
                <ul>
                    <?php
                    $i = 0;

                    while ($i < 3):
                        ?>
                        <li>
                            <div class="item">
                                <div class="foto-item">
                                    <img src="images/predio.jpg" alt="pre lancamento"/>
                                </div>
                                <h2>LANÇAMENTOS</h2>
                                <p>Trade center</p>
                                <a href="imoveis.php" class="leiaMais"></a>
                            </div>
                        </li>
                        <? $i++;
                    endwhile; ?>
                </ul>
            </div>
            <div class="nav-slid">
                <a href="#" class="prev">&lsaquo;</a>
                <a href="#" class="next">&rsaquo;</a>
            </div>
        </div>
        <div id="venda" class="box">
            <div class="slid-item">
                <ul>
                    <?php
                    $i = 0;

                    while ($i < 3):
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
            <div class="nav-slid">
                <a href="#" class="prev">&lsaquo;</a>
                <a href="#" class="next">&rsaquo;</a>
            </div>
        </div>
        <div id="terrenos" class="box">
            <div class="slid-item">
                <ul>
                    <?php
                    $i = 0;
                    while ($i < 3):
                        ?>
                        <li>
                            <div class="item">
                                <div class="foto-item">
                                    <img src="images/predio.jpg" alt="pre lancamento"/>
                                </div>
                                <h2>TERRENOS</h2>
                                <p>Trade center</p>
                                <a href="imoveis.php" class="leiaMais"></a>
                            </div>
                        </li>
                        <? $i++;
                    endwhile; ?>
                </ul>
            </div>
            <div class="nav-slid">
                <a href="#" class="prev">&lsaquo;</a>
                <a href="#" class="next">&rsaquo;</a>
            </div>
        </div>
    </div>
   <?php include('includes/inc_atendimento.php')?>
</div> 
<?php
include('includes/inc_footer.php')?>
 