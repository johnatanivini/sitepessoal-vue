$(document).ready(function(){
   $('.banner ul').before('<div id="nav">').cycle({
      pager:  '#nav'
   });
   //
   ////fancybox
   $('.ampliar').fancybox();
   //mapa
    //mapa
   $("a.map").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '80%',
		height		: '80%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
   //// galeria
   // desenvolvido por johnatan ivini
   // carrega a primeira imagem
   $('.thumbnails-galeria .img:first').html(function(){
      var min = $(this).find('img').attr('src');
      $('.img-grande').html(
         '<a class="ampliar" href='+min+' >'+
         '<img  src='+min+' style="float:none; height:280px"/>'+
         '</a>')
   })
   // funcao para abrir a imagem dentro do quadro
   $('.thumbnails-galeria .img').click(function(){
      //pega a atributo src
      var min = $(this).find('img').attr('src');
      // pega o titulo
      var title = $(this).find('img').attr('alt');
      $('.img-grande').html(
         '<a class="ampliar" href='+min+' title='+title+' >'+
         '<img  src='+min+' title='+title+' style="float:none; height:280px"/>'+
         '</a>')
   })
   
   //habilitando o PIE se IE
   if(window.PIE){
      $('.redondo').each(function(){
         PIE.attach(this);
      });
                   
   }
   // tabs
   jQuery("#tabswitch ul li:first").addClass("active");
   jQuery("#tabswitch div.tab-container:first").show();
   
   jQuery("#tabswitch > ul > li").click(function(){

      jQuery("#tabswitch div.tab-container").hide();

      jQuery("#tabswitch > ul > li").removeClass("active");


      var tab_class = jQuery(this).attr("class");


      jQuery("#tabswitch > div." + tab_class).show();

      jQuery("#tabswitch > ul li." + tab_class).addClass("active");
      jQuery("#tabswitch div.tab-container." + tab_class).addClass("active-container");

   })
   
});


