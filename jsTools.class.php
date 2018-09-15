<?php 
	/**
	*	Classe criada para gerar codigos Javascript (Otimizar a vida é muito melhor :D)
	*	Author: Gabriel Azuaga Barbosa <gabrielbarbosaweb7@gmail.com>
	*	Github: https://github.com/gabrielweb7
	*	Site pessoal: http://gabrieldaluz.com.br
	*	Version: 1.0.3
	*/
	class jsTools {

		/**
		*	Função criada para criar alert em javascript utilizando php 
		*/
		public static function alert($text) {
			if(isset($text)) { 
				self::echoScript("alert('".$text."');");
			}
		}

		/** 
		*	Escreve console.log em javascript utilizando php 
		*/
		public static function consoleLog($text = false, $css = false) {
			if($text) {
				if(!$css) {
					self::echoScript("console.log('".$text."')");
				} else {
					self::echoScript("console.log('".$text."','".$css."')");
				}
			}
		}

		/**
		*	Função criada para redirecionar de uma página para outra
		*/
		public static function redirecionar($url = false) {
			if($url) {  
				self::echoScript("document.location.href=\"{$url}\";");
			}
		}

		/**
		*	Escreve dentro de tags <script> ... </script> 
		*/
		public static function echoScript($valor = false) {
			if($valor) {
			  echo "<script>".$valor."</script>";
			}
		}
	
	}

?>