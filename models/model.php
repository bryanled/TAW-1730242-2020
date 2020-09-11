<?php
	//Modelo que permite mostrar el enlace de las páginas con las vistas
	class EnlacesPaginas {
		public function enlacesPaginasModel ($enlacesModel){
			//Retorno de los valores de la variable a traves del GET
			if($enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "contactenos"){
					//Mostrar la vista dependiendo del valor de la variable mediante el controlador
					$module = "views/".$enlacesModel.".php";
			}else if($enlacesModel == "index"){
				//Redirecion de contenido basura en URL para seguirdad
				$module = "views/inicio.php";
			}else {
				$module = "views/inicio.php";
			}
			return $module;
		}
	}
?>
