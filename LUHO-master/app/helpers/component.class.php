<?php
class Component{
	//Este es el combobox 
    public static function showSelect($label, $name, $value, $data){
		print("<div class='combo2'>");

		print("<select id='select-el' class='combo-input' name='$name' required>");
		if($data){
			if(!$value){
				print("<option value='' disabled selected>$label</option>");
			}
			foreach($data as $row){
				if($value == $row[0]){
					print("<option value='$row[0]' selected>$row[1]</option>");
				}else{
					print("<option value='$row[0]'>$row[1]</option>");
				}
			}
		}else{
			print("<option value='' disabled selected>No hay opciones disponibles</option>");
		}
		print("</select>");
		print("</div>");

	}

	public static function filtrar($label, $name, $value, $data){
		print("<select name='$name' required>");
		print("<optgroup label='team 1'>");
		if($data){
			if(!$value){
				print("<option value='' disabled selected>$label</option>");
			}
			foreach($data as $row){
				if($value == $row[0]){
					print("<option value='$row[0]' selected>$row[1]</option>");
				}else{
					print("<option value='$row[0]'>$row[1]</option>");
				}
			}
		}else{
			print("<option value='' disabled selected>No hay opciones disponibles</option>");
		}
		print("</optgroup>");
		print("</select>");
	}
	public static function showGeneros($label, $name, $value, $data){
		print("<div class='combo'>");

		print("<select id='select-el' class='combo-input' name='$name' required>");
		

		if($data){
			if(!$value){
				print("<option value='' disabled selected>Seleccione una opción</option>");
			}
			foreach($data as $row){
				if($value == $row[0]){
					print("<option value='$row[0]' selected>$row[0]</option>");
				}else{
					print("<option value='$row[0]'>$row[0]</option>");
				}
			}
		}else{
			print("<option value='' disabled selected>No hay opciones disponibles</option>");
		}
		print("</select>");
		print("</div>");
	}

	public static function showMessage($type, $message, $url){
		if(is_numeric($message)){
			switch($message){
				case 1045:
					$text = "Autenticación desconocida";
					break;
				case 1049:
					$text = "Base de datos desconocida";
					break;
				case 1054:
					$text = "Nombre de campo desconocido";
					break;
				case 1062:
					$text = "Dato duplicado, no se puede guardar";
					break;
				case 1146:
					$text = "Nombre de tabla desconocido";
					break;
				case 1451:
					$text = "Registro ocupado, no se puede eliminar";
					break;
				case 2002:
					$text = "Servidor desconocido";
					break;
				default:
					$text = "Ocurrió un problema, contacte al administrador :(";
			}
		}else{
			$text = $message;
		}

		switch($type){
			case 1:
				$title = "Éxito";
				$icon = "success";
				break;
			case 2:
				$title = "Error";
				$icon = "error";
				break;
			case 3:
				$title = "Advertencia";
				$icon = "warning";
				break;
			case 4:
				$title = "Aviso";
				$icon = "info";
		}

		if($url){
			print("<script> swal({title: '$title', text: '$text', icon: '$icon', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}).then(value=>{location.href = '$url'}) </script>");
		}else{
			print("<script> swal({title: '$title', text: '$text', icon: '$icon', button: 'Aceptar', closeOnClickOutside: false, closeOnEsc: false}) </script>");
		}
	}
}
?>