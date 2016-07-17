<?php
include ("conexion.php");

if(isset($_GET['caso']) && !empty($_GET['caso'])){
	switch ($_GET['caso']) {
		//login
		case 1:
			session_start();
			require ("PasswordHash.php");
			$hasher = new PasswordHash(8,TRUE);

			$res = mysqli_query($con, "select * from usuarios where nombre ='".mysqli_real_escape_string($con,$_POST['nombre'])."'");

			if(mysqli_num_rows($res) > 0){
				$aux = mysqli_fetch_array($res);
				$check = $hasher->CheckPassword($_POST['pw'], $aux['password']);
				if($check){
					$_SESSION['user'] = $aux['nombre'];
					$_SESSION['tipo'] = $aux['tipo'];
					$_SESSION['id_usuario'] = $aux['id_usuario'];
					if($_SESSION['tipo'] == 1){
						echo "4";
					}else{
						echo "1";
					}
				}else{
					echo "2";
				}
			}else{
				echo "3";
			}
		break;
		//logout
		case 2:
			session_start();
			unset($_SESSION['user']);
			if(!isset($_SESSION['user'])){
				echo "1";
			}else{
				echo "2";
			}
		break;
		case 3://contenido de modal de imagen en el catalogo
			$str = "<center><h3>No encontrado</h3></center>";
			$res = mysqli_query($con, "select * from catalogo where id = '$_POST[id]'");
			if(mysqli_num_rows($res) > 0){
				$aux = mysqli_fetch_array($res);
				$str = "<div class='modal-header'>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close' id='icon_cerrar_arch'><span aria-hidden='true'>&times;</span></button>
						</div>
						<div class='info'>
							<img src='".$aux['ruta']."' alt='".$aux['nombre']."'>
							<div class='datos'>
								<p>ID: <b>".$aux['id']."</b></p>
								<p>Costo: $ ".number_format($aux['costo'], 2, '.', ',')." M.N.</p>
								<p><i class='fa fa-phone'></i> Cel y WhatsApp: (443) 145 - 8351</p>
								<p><i class='fa fa-envelope'></i><a href='mailto:musicalpianoforte@hotmail.com' title='Enviar correo a musicalpianoforte@hotmail.com'> ".$aux['contacto']."</a></p>
								<p class='descripcion'>".str_replace("rn", "", str_replace("<br />", "\n", utf8_encode(stripslashes($aux['descripcion']))))."</p>
								<button class='opc' id='".$aux['id']."'>Contactar</button>
							</div>
						</div>";
			}
			echo $str;
		break;
		case 4://envio de comentarios
			require ("../vendor/autoload.php");

			$mail = new PHPMailer();

			$str = "DE: <strong>".utf8_decode($_POST['name'])."</strong><br>";
			$str .= "<strong>MENSAJE: </strong>".utf8_decode($_POST['Message']);

			$mail->setFrom($_POST['Email'], $_POST['name']);
			$mail->addAddress('pianoforte2003@hotmail.com');
			$mail->addCC('musicalpianoforte@hotmail.com');
			$mail->Subject = utf8_decode($_POST['Subject']);
			$mail->msgHTML($str);

			$send = false;

			if($mail->send()){
				$send = true;
			}

			if($send){
				echo true;
			}
		break;
		case 5://lista de pianos seleccionados, todos, de cola, vertical
			$query = "";
			switch ($_POST['tipo']) {
				case 1:
					$query = "select * from catalogo";
					break;
				case 2:
					$query = "select * from catalogo where tipo = 'cola'";
					break;
				case 3:
					$query = "select * from catalogo where tipo = 'vertical'";
					break;
			}
			$str = "";
			$res = mysqli_query($con, $query);
			while($aux=mysqli_fetch_array($res)){
				if($aux['status'] == 1){
					$status = "Activo";
				}else{
					$status = "Inactivo";
				}
				$str .= "<tr>
						<td class='text-right' nowrap>".$aux['id']."</td>								
						<td >
							<img src='".$aux['ruta']."' alt='".$aux['nombre']."''>
						</td>								
						<td >".$aux['contacto']."</td>
						<td class='text-center'>".ucwords($aux['tipo'])."</td>
						<td class='text-right'>$ ".number_format($aux['costo'], 2, '.', ',')."</td>
						<td class='text-justify'>".substr(str_replace("rn", "", str_replace("<br />", "\n", utf8_encode(stripslashes($aux['descripcion'])))), 0, 120)."...</td>
						<td class='text-center'>$status</td>
						<td class='text-center'>
							<span role='button' class='glyphicon glyphicon-edit' style='color: #001f3f' id='".$aux['id']."'></span>
							<span role='button' data-toggle='modal' data-target='#modal_confirmacion' style='color: #FF4136' id='".$aux['id']."'class='glyphicon glyphicon-remove'></span>
						</td>
					</tr>";
			}
			echo $str;
		break;
		case 6://busqueda especifica por id
			$str = ""; 
			$res = mysqli_query($con, "select * from catalogo where id = '".mysqli_real_escape_string($con,$_POST['id'])."'");
			if(mysqli_num_rows($res) > 0){
				while($aux=mysqli_fetch_array($res)){
					if($aux['status'] == 1){
						$status = "Activo";
					}else{
						$status = "Inactivo";
					}
					$str .= "<tr>
							<td class='text-right' nowrap>".$aux['id']."</td>								
							<td >
								<img src='".$aux['ruta']."' alt='".$aux['nombre']."''>
							</td>								
							<td >".$aux['contacto']."</td>
							<td class='text-center'>".ucwords($aux['tipo'])."</td>
							<td class='text-right'>$ ".number_format($aux['costo'], 2, '.', ',')."</td>
							<td class='text-justify'>".substr(str_replace("rn", "", str_replace("<br />", "\n", utf8_encode(stripslashes($aux['descripcion'])))), 0, 120)."...</td>
							<td class='text-center'>$status</td>
							<td class='text-center'>
								<span role='button' class='glyphicon glyphicon-edit' style='color: #dd012d' id='".$aux['id']."'></span>
								<span role='button' data-toggle='modal' data-target='#modal_confirmacion' style='color: #FF4136' id='".$aux['id']."'class='glyphicon glyphicon-remove'></span>
							</td>
						</tr>";
				}
			}else{
				$str = "<tr><td class='text-center' colspan=8><h4>No encontrado</h4></td></tr>";
			}
			echo $str;
		break;
		case 7://editar info de piano
			$res = mysqli_query($con, "select * from catalogo where id = '$_POST[id]'");
			if(mysqli_num_rows($res) > 0){
				$row = mysqli_fetch_array($res);
                $view['id_piano'] = utf8_encode($row['id']);
                $view['costo'] = utf8_encode($row['costo']);
               	$view['descripcion'] = str_replace("rn", "", str_replace("<br />", "\n", utf8_encode(stripslashes($row['descripcion']))));
				if($row['tipo'] == "cola"){
					$view['tipo'] = "<option value='cola' selected='selected'>Cola</option><option value='vertical'>Vertical</option>";
				}else{
					$view['tipo'] = "<option value='cola''>Cola</option><option value='vertical' selected='selected'>Vertical</option>";
				}
				if($row['status'] == 1){
					$view['statusE'] = "<option value='1' selected='selected'>Activo</option><option value='2'>Inactivo</option>";
				}else{
					$view['statusE'] = "<option value='1'>Activo</option><option value='2' selected='selected'>Inactivo</option>";
				}
				$view['imagen'] = "<img src='".$row['ruta']."' alt='".$row['nombre']."''>";
				echo json_encode($view);
			}else{
				echo "Error";
			}
		break;
		case 8://guardar cambios en edicion de piano
			$quer = "update catalogo set
				id = '".addslashes(mysqli_real_escape_string($con,utf8_decode($_POST['id_pianoE'])))."',
				costo = ".$_POST['costoE'].",
				tipo = '".addslashes(mysqli_real_escape_string($con,utf8_decode($_POST['tipoE'])))."',
				status = ".$_POST['statusE'].",
				descripcion = '".addslashes(mysqli_real_escape_string($con,nl2br(utf8_decode($_POST['descripcionE']))))."'
				where id = '$_POST[id]'";
			$res = mysqli_query($con, $quer);
			if($res){
				echo "<center>Guardado Correctamente</center>";
			}else{
				echo "<center>Error</center>";
			}
			
		break;
		case 9:
			require_once ("PasswordHash.php");
			$output_dir = "../catalogo_img/";
			$find = false;
			$hasher = new PasswordHash(8,TRUE);
			
			$res = mysqli_query($con, "select password from usuarios where tipo = 1");
			while($aux = mysqli_fetch_array($res)){
				$check = $hasher->CheckPassword($_POST['conf_pw'], $aux['password']);
				if($check){
					$find = true;
					$res1 = mysqli_query($con, "select * from catalogo where id = '$_POST[id_piano]' ");
					if(mysqli_num_rows($res1) > 0){
						$aux1=mysqli_fetch_array($res1);
						$fileName =$aux1['nombre'];
						$aux2 = mysqli_query($con, "delete from catalogo where id = '$_POST[id_piano]'");
						if($aux2){//si se borro de la base de datos, lo borramos de la carpeta
							$filePath = $output_dir. $fileName;
							if (file_exists($filePath))
							{
						        unlink($filePath);
						    }

						}
					}
					break;
				}
			}
			echo $find;
		break;
		case 10://upload.php, cargar archivos
			$output_dir = "../catalogo_img/";
			if(isset($_FILES["myfile"]))
			{
				$ret = "";
				$error =$_FILES["myfile"]["error"];
				//You need to handle  both cases
				//If Any browser does not support serializing of multiple files using FormData()
				if(!is_array($_FILES["myfile"]["name"])) //single file
				{
			 	 	$fileName = $_FILES["myfile"]["name"];
			 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
			 		//agregar a la base de datos
			    	$res = mysqli_query($con, "insert into catalogo (
			    			id,
			    			costo,
			    			tipo,
			    			ruta,
			    			nombre,
			    			descripcion)
			    	values (
			    		'".addslashes(mysqli_real_escape_string($con,utf8_decode($_POST['id_piano'])))."',
			    		".addslashes(mysqli_real_escape_string($con,$_POST['costo'])).",
			    		'".addslashes(mysqli_real_escape_string($con,utf8_decode($_POST['tipo'])))."',
			    		'"."catalogo_img/".$fileName."',
			    		'".$fileName."',
			    		'".addslashes(mysqli_real_escape_string($con,nl2br(utf8_decode($_POST['descripcion']))))."')");
			    	if($res){
			    		$ret = "<p>".$fileName."<br><strong>Insertado Correctamente</strong></p>";
			    	}
				}
			    echo $ret;
			 }else{
			 	echo "Necesitas agregar un archivo";
			 }
		break;
		case 11://load.php
			$dir="../$_POST[carpeta_activa]";
			$files = scandir($dir);

			$ret= array();
			foreach($files as $file)
			{
				if($file == "." || $file == "..")
					continue;
				$filePath=$dir."/".$file;
				$details = array();
				$details['name']=$file;
				$details['path']=$filePath;
				$details['size']=filesize($filePath);
				$ret[] = $details;

			}

			echo json_encode($ret);
		break;
		case 12://delete.php, borrar archivos
			$output_dir = "../$_POST[carpeta_activa]/";
			$respuesta = "";
			if(isset($_POST["op"]) && $_POST["op"] == "delete" && isset($_POST['name']))
			{
				$fileName =$_POST['name'];
				$res = mysqli_query($con, "select * from ".$_POST['carpeta_activa']." where nombre = '".$_POST['name']."'");
				if(mysqli_num_rows($res) > 1){//encontro mas de uno solo borrar de la base de datos
					$aux = mysqli_query($con, "delete from ".$_POST['carpeta_activa']." where
						nombre = '".$_POST['name']."' and id = ".$_POST['id_activo']);
					if($aux){
						$respuesta = "Se elimino: ".$fileName."<br>";
					}else{
						$respuesta = "Error";
					}
				}else if(mysqli_num_rows($res) == 1){//solo un registro borrar de bd y de la carpeta
					$aux = mysqli_query($con, "delete from ".$_POST['carpeta_activa']." where
						nombre = '".$_POST['name']."' and id = ".$_POST['id_activo']);
					if($aux){//si se borro de la base de datos, lo borramos de la carpeta
						$filePath = $output_dir. $fileName;
						if (file_exists($filePath))
						{
					        unlink($filePath);
					    }
						$respuesta = "Se elimino: ".$fileName."<br>";
					}else{
						$respuesta = "Error";
					}
				}else{//no enontro nada
					$respuesta = "No se encontro el archivo<br>";
				}
				echo $respuesta;
			}
		break;
	}
}

 ?>