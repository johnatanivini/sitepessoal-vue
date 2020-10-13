<div class="timeline">
	<span class="title-top-timeline">Veja seu estágio na linha do tempo</span>
	<div class="clear"></div>
	<span class="title-timeline"> LINHA DO TEMPO </span>
	<div id="TLHolderIF">
		<a class="prevPage browse left"></a>
		<!-- "previous page" action -->

		<!-- root element for scrollable -->
		<div class="scrollable" id="scrollable">
			<div class="items">
				<!--  1 semana até a 40 semana -->
				<?php 
			for($i=0;$i<=40;$i++){?>
				<a id="0104" class="tlSqr lessThan1k" href="/stages/0104/"
					onMouseOver="stageTipOverOut(this);;" rel="nofollow" target="_top">
					<div class="stageTip">
						<?=$i?>
						&ordf; Semana
					</div> <?php if($i==0){?> <span class="pregBlurb">Gestação</span> <?php } else {?>
					<!--  nada  --> <?php }?>
				</a>
				<?php }?>
				<!--  1 Mês até 12 mês  -->
				<?php 
			for($i=0;$i<=48;$i++){?>
				<a id="1000" class="tlSqr equal1k" href="/stages/1000/"
					onMouseOver="stageTipOverOut(this);;" rel="nofollow" target="_top">

					<div class="stageTipRtAlign">
						O bebê de
						<?=$i?>
						semana
					</div> <?php if($i==0){?> <span class="duedateBlurb">O bebê
						recém-nascido</span> <?php } else {?> <!--  nada  --> <?php }?>
				</a>
				<?php }?>
				<!-- <a id="2200" class="tlSqr Year1BDay"
				href="/stages/2200/"
				onMouseOver="stageTipOverOut(this);;" rel="nofollow"
				target="_top"> <span class="year1BDayBlurb">O bebê de 1 ano</span>-->
				</a>
			</div>
			<!-- / items -->
		</div>
		<!-- / scrollable -->

		<a class="nextPage browse right"></a>
		<!-- "next page" action -->
		<br clear="all" />
	</div>
</div>

