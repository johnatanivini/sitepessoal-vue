<?php


class Funcoes{

		/*
		 * Array letras
		 *  @function params ( página a ser linkada)
		 */
	
		public function alphabect($pagina){
			
			$letras = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','x','z','y','w');
			
			foreach($letras as $l){
				
				echo "<a href=".BASE_URL."/".$pagina."/".$l.">".$l."</a>";

			}
			
		
		}
}

?>