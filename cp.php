<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PianoForte | CP</title>
	<?php include ("php/header.php"); ?>
	<meta name="robots" content="noindex, nofollow" />
	<link rel="stylesheet" type="text/css" href="css/cp.css">
</head>
<body>
<div id="background-image"></div>
<div id="content">
<?php if(isset($_SESSION['user'])) { ?>
	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left header-hidden" id="menu">
		<h3 class="h3-menu">Menu <span class="span-close">&#x2715;</span></h3>
		<a href="" class="op-menu" id="add">Agregar</a>
		<a href="" class="op-menu" id="edit">Editar</a>
		<a href="#" class="op-menu" id="logout">Cerrar Sesion</a>
	</nav>
	<div class="container-fluid">
		<div class="col-md-12 col-xs-12 ">
			<button id="showLeft" class="header"><span class="span-menu">&#9776;</span></button>
			<!-- <h1 id="titulo">Panel de Control</h1> -->
		</div>
	</div>
	<section id="contenido" class="container-fluid ">
	<!--Formulario para Agregar-->
		<form class="form-horizontal col-md-11 col-md-offset-2 col-sm-offset-2 form-hidden" id="form" method="POST" action="" >
			<br>
			<div class="col-md-5 col-sm-5">
				<div class="wrap">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
						<h3>Datos Generales</h3>
					</div>
					<div class="form-group">
						<label for="id_piano" class="control-label col-md-12"><p class="text-center">ID:</p></label>
						<div class="col-md-12">
							<input type="text" placeholder="-(ID)-" class="form-control input input-lg" name="id_piano" id="id_piano" autocomplete="on" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="costo" class="control-label col-md-12"><p class="text-center">Costo:</p></label>
						<div class="col-md-12">
							<input type="number" placeholder="-(solo numero)-" class="form-control input input-lg" name="costo" id="costo" min="0" step="any" autocomplete="on" required="required">
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
						<h3>Tipo</h3>
					</div>
					<div class="form-group">
						<!-- <label for="tipo" class="control-label col-md-12"><p class="text-center">Tipo:</p></label> -->
						<div class="col-md-12 col-sm-12 col-xs-12">
							<select type="text" class="form-control input input-lg" name="tipo" id="tipo" required="required">
								<option value="cola">De Cola</option>
								<option value="vertical">Vertical</option>
							</select>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
						<h3>Agregar imagen</h3>
					</div>
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12 upload">
							<span class='glyphicon glyphicon-picture'></span>
							<p>Browse</p>
							<input type="file" placeholder="----" class="form-control input" name="myfile" accept="image/*" id="file" required="required">
						</div>
						<input id="file-load" class="col-md-9 col-sm-9 col-xs-9 input-lg input" disabled="disabled" value=" - - - - - - "/>
						<div class="col-md-3 col-sm-3 col-xs-3 input input-lg" id="file-reset"><span class="glyphicon glyphicon-remove"></span></div>
					</div>
				</div>
			</div>
			<div class="col-md-5 col-sm-5">
				<div class="wrap">
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
						<h3>Descripcion</h3>
					</div>
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea type="text" placeholder="-(Informacion a detalle)-" class="form-control input" name="descripcion" id="descripcion" rows="16" required="required"></textarea>
						</div>
					</div>
					<span id="helpBlock" class="help-block text-center">* Todos los campos son requeridos</span>
					<hr id="line">
				</div>
				<div class="col-md-12">
					<button type="submit" id="btn" class="btn btn-lg btn-primary col-md-offset-1 input"><span class='glyphicon glyphicon-save'></span><br>Guardar</button>
					<div id="msgArchivos" class="alert alert-info" role="alert"></div>
				</div>
			</div>
		</form>
	<!--Formulario para Editar-->
		<div class="col-md-offset-2 col-sm-offset-2 form-hidden" id="form-edit">
			<br>
			<div class="col-md-11" >
				<div class="col-md-6 col-sm-6" >
					<div class="wrap">
						<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
							<h3>Ver:</h3>
						</div>
						<div class="col-md-12 flex">
							<button type="button" id="1" class="btn input btn-flex active">TODOS</button>
							<button type="button" id="2" class="btn input btn-flex">DE COLA</button>
							<button type="button" id="3" class="btn input btn-flex">VERTICAL</button>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="wrap">
						<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
							<h3>Busqueda especifica:</h3>
						</div>
						<form class="form-horizontal" id="form-busqueda" method="POST" action="">
							<div class="col-md-12 input-group">
								<input type="text" placeholder="ingresa ID" class="form-control input " name="busqueda" id="busqueda" autocomplete="on">
								<span class="input-group-btn">
							        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
							     </span>
							</div>
						</form>
					</div>
				</div>
			 	<table class='table table-condensed table-hover '>
					<thead>
						<tr>
							<th >ID</th>
							<th >IMAGEN</th>
							<th >CONTACTO</th>
							<th >TIPO</th>
							<th >PRECIO</th>
							<th >DESCRIPCION</th>
							<th >A/I</th>
							<th >OPC</th>
						</tr>
					</thead>
					<tbody class="detalles">
					<?php
						include ("php/conexion.php"); 
						$res = mysqli_query($con, "select * from catalogo");
						while($aux=mysqli_fetch_array($res)){
							if($aux['status'] == 1){
								$status = "Activo";
							}else{
								$status = "Inactivo";
							}
							echo "<tr>
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
					?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal_edit" >
		<div class="modal-dialog modal-lg" >
			<div id="img_modal">
				<form action="" id="edit_piano">
					<div class="col-md-5 col-sm-5" id="imgE">

					</div>
					<div class="col-md-5 col-sm-5">
						<div class="wrap">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
								<h3>Editar</h3>
							</div>
							<div class="form-group">
								<label for="contacto" class="control-label col-md-12"><p class="text-center">Id:</p></label>
								<div class="col-md-12">
									<input type="text" placeholder="-(ID)-" class="form-control input" name="id_pianoE" id="id_pianoE" autocomplete="on" required="required">
								</div>
							</div>
							<div class="form-group">
								<label for="costo" class="control-label col-md-12"><p class="text-center">Costo:</p></label>
								<div class="col-md-12">
									<input type="number" placeholder="-(solo numero)-" class="form-control input" name="costoE" id="costoE" min="0" step="any" autocomplete="on" required="required">
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
								<h3>Tipo</h3>
							</div>
							<div class="form-group">
								<!-- <label for="tipo" class="control-label col-md-12"><p class="text-center">Tipo:</p></label> -->
								<div class="col-md-12 col-sm-12 col-xs-12">
									<select type="text" class="form-control input" name="tipoE" id="tipoE" required="required">
									</select>
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
								<h3>Status</h3>
							</div>
							<div class="form-group">
								<!-- <label for="tipo" class="control-label col-md-12"><p class="text-center">Tipo:</p></label> -->
								<div class="col-md-12 col-sm-12 col-xs-12">
									<select type="text" class="form-control input" name="statusE" id="statusE" required="required">
									</select>
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 legend">
								<h3>Descripcion</h3>
							</div>
							<div class="form-group">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<textarea type="text" placeholder="-(Informacion a detalle)-" class="form-control input" name="descripcionE" id="descripcionE" rows="6" required="required"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div id="msjE" class="alert alert-info" role="alert"></div>
								<button type="submit" id="btnE" class="btn btn-primary col-md-offset-1 input"><span class='glyphicon glyphicon-save'></span><br>Guardar</button>
								<button type="button" id="cancelE" class="btn btn-default col-md-offset-1 input"><span class='glyphicon glyphicon-remove'></span><br>Cancelar</button>
							</div>
						</div>			
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--Modal para ingresar contraseña para confirmacion de operaciones-->
	<div class="modal fade" id="modal_confirmacion">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="icon_cerrar_arch"><span aria-hidden="true">&times;</span></button>
					<p class="text-center" style="margin-top: 5%">Se requiere confirmación</p>
					<p class="text-center" style="margin-bottom: 5%">Ingrese contraseña de administrador:</p>
					<form class="modal-body" id="confirmar_pass" style= "margin-top: 1%" method="POST" action="">
						<div class="form-group col-md-10 col-md-offset-1">						
							<input type="password" placeholder="" class="form-control input" name="conf_pw" id="conf_pw" required="required">						
						</div>
						<input type="hidden" name="id_piano" id="id_piano">
						<div class="form-group">
							<center>
								<div class="button-group">
									<button type="submit" id="btnConfirmar" class="btn btn-primary input">Confirmar</button>
									<button type="button" id="btnCConf" class="btn btn-default input" data-dismiss="modal">Cancelar</button>
								</div>
							</center>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } else { ?>
	<header class="col-md-12 col-sm-12 col-xs-12">
		<center><img src="images/logo2pianos-corto-blanco.svg" alt="" class="img-responsive" id="logo"></center>
	</header>
	<form action="" class="form-horizontal col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3" id="form-login">
		<div class="form-group">
			<input type="text" autocomplete="on" class="form-control input-login" placeholder="Usuario" name="nombre" id="nombre" required="required">
		</div>
		<div class="form-group">
			<input type="password" class="form-control input-login" placeholder="Contraseña" name="pw" id="pw" required="required">
		</div>
		<div class="form-group">
			<button type="submit" id="btn-login" class="btn btn-primary  col-md-12 col-sm-12 col-xs-12 input">Iniciar Sesi&oacute;n</button>
		</div>
		<div class="form-group">
			<p id="msj" class="col-md-12 col-sm-10col-xs-8 text-center"></p>
		</div>
	</form>
<?php } ?>
</div>
	<script>
	function load_todos(e){
		$(".flex").find(".active").removeClass('active');
		$("#"+e).addClass("active");
		$(".detalles").html("<center><img src='images/camera-loader.GIF'></center>");
		$("#busqueda").val("");
		$.ajax({
			url: "php/ajax_procesos.php?caso=5",
			type: "POST",
			data: "tipo=" + e,
			success: function(data){
				$(".detalles").html(data);
			},
			error: function(data){
				$(".detalles").html(data);
			}
		});
	}
	$(document).ready(function()
	{
	//esconder elementos para mostrarlos con animacion
	$("#form-login, #titulo, #logo, #msgArchivos, #msj, #msjE").hide();
	$("#showLeft, #titulo").delay(500).fadeIn(500);
	$("#form-login").delay(500).fadeIn(500);
	$("#logo").delay(300).fadeIn(500);

	//mostrar u ocultar el menu
	$("#showLeft, .span-close, .op-menu").click(function(){
		$("#menu").toggleClass('cbp-spmenu-open');
	});

	//formulario de agregar piano
	$("#form").submit(function(){
		$("#btn").html("<span class='glyphicon glyphicon-refresh'></span><br>Loading").attr("disabled", "disabled");
		var fd = new FormData(document.getElementById("form"));
		$.ajax({
			url: "php/ajax_procesos.php?caso=10",
			type: "POST",
			data: fd,
			processData: false,  // tell jQuery not to process the data
  			contentType: false,   // tell jQuery not to set contentType
  			success: function(data){
  				$("#msgArchivos").html(data).show(500).delay(2500).fadeOut(1500);
  				$("#btn").html("<span class='glyphicon glyphicon-save'></span><br>Guardar").attr("disabled", false);
  				$("#file, #descripcion").val("");//reset de escripcion y archivo para facilitar el upload masivo
  				$("#file-load").val("- - - - - -");
  			},
  			error: function(data){
  				$("#msgArchivos").html(data).show(500).delay(2500).fadeOut(1500);;
  				$("#btn").html("<span class='glyphicon glyphicon-save'></span><br>Guardar").attr("disabled", false);
  			}
		});
		return false;
	});
	//enviar fomulario de login
	$("#form-login").submit(function(){
		$("#form-login").find(":submit").attr("disabled", "disabled");
			// $("#btn").html("<img src='images/loader.GIF'>");
			$.ajax({
				url: "php/ajax_procesos.php?caso=1",
				data: $("#form-login").serialize(),
				type: 'POST',
				success: function(data){
					if(data == "1"){
						$("#msj").html("Welcome").show(800).delay(500).queue(function(n){
							$("#msj").fadeOut(800);
							n();
						});
						// $("#btn").html("Iniciar Sesi&oacute;n");
						setTimeout(function(){window.location.reload()} , 2500);
					}else if(data == "2"){
						$("#msj").html("Contraseña incorrecta").fadeIn(1000);
						$("#form-login").find(":submit").attr("disabled", false);
						$("#btn").html("Iniciar Sesi&oacute;n");
					}else if(data == "4"){
						$("#msj").html("Welcome").show(1000).delay(1000).queue(function(n){
							$("#form-login, #logo").fadeOut(1000);
							n();
						});
						$("#btn").html("Iniciar Sesi&oacute;n");
						setTimeout(function(){window.location.reload()} , 2500);
					}else{
						$("#msj").html("Usuario incorrecto").fadeIn(1000);
						$("#form").find(":submit").attr("disabled", false);
						$("#btn").html("Iniciar Sesi&oacute;n");
					}
				},
				error: function(data){
					$("#msj").html("Error al inicar sesi&oacute;n").fadeIn(1000);
					$("#form").find(":submit").attr("disabled", false);
					$("#btn").html("Iniciar Sesi&oacute;n");
				}
			});
		return false;
	});
	//boton de cerrar sesion
	$("#logout").click(function(){
		$.ajax({
			url: "php/ajax_procesos.php?caso=2",
			success: function(data){
				if (data == "1"){
					$("#showLeft, #titulo, #form").delay(200).fadeOut(500);
					setTimeout(function(){window.location.reload()} , 1000);
				}
			}
		});
		return false;
	});
	//se selecciona la opcio de agregar en el menu
	$("#add").click(function(){
		//mostrar el agregar
		$("#form").removeClass('form-slideOut');
		$("#form").addClass('form-slidein');
		$("#form").removeClass('form-hidden');
		$("#form").removeClass('form-hidden1');
		//quitar el editar
		$("#form-edit").addClass('form-slideout');
		$("#form-edit").removeClass('form-slidein');
		$("#form-edit").addClass('form-hidden1');
		return false;
		
	});
	//se selecciona la opcion de editar en el menu
	$("#edit").click(function(){
		//mostrar el editar
		$("#form-edit").removeClass('form-slideOut');
		$("#form-edit").addClass('form-slidein');
		$("#form-edit").removeClass('form-hidden');
		$("#form-edit").removeClass('form-hidden1');
		// quitar el agregar
		$("#form").addClass('form-slideout');
		$("#form").removeClass('form-slidein');
		$("#form").addClass('form-hidden1');
		return false;
	
	});
	//cuando cambia el archivo cargado
	$("#file").change(function(){
		// alert(this.files[0].size);
		var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
		// $("#file-load").val(filename);
		$(this).val()=="" ? $("#file-load").val("- - - - - -") : $("#file-load").val(filename);
	});
	//click en el boton de resetar el input file
	$("#file-reset").click(function(){
		$("#file").val("");
		if($("#file").val()==""){
			$("#file-load").val("- - - - - -");
		}
	});
	//seleccionar el tipo de pianos a mostrar
	$(".flex").on("click", "button", function(){
		load_todos($(this).attr('id'));
	});
	//buscar por ID especifico
	$("#form-busqueda").submit(function(){
		$(".detalles").html("<center><img src='images/camera-loader.GIF'></center>");
		$.ajax({
			url: "php/ajax_procesos.php?caso=6",
			type: "POST",
			data: "id=" + $("#busqueda").val(),
			success: function(data){
				$(".detalles").html(data);
			},
			error: function(data){
				$(".detalles").html(data);
			}
		});
		return false;
	});
	//editar info de un piano
	$(".detalles").on("click","span[class='glyphicon glyphicon-edit']",function(){
			var id = $(this).attr('id');
			$("#btnE").attr('disabled', "disabled");
			$("#imgE").html("<center><img src='images/camera-loader.GIF'></center>");
			$("#modal_edit").modal("show");
			// alert(id);
			$.ajax({
				url: "php/ajax_procesos.php?caso=7",
				type: "POST",
				dataType: "json",
				data: "id=" + id,
				success: function(data){
					// alert(data);
					$("#id_pianoE").val(data.id_piano);
					$("#costoE").val(data.costo);
					$("#tipoE").html(data.tipo);
					$("#statusE").html(data.statusE);
					$("#descripcionE").val(data.descripcion);
					$("#imgE").html(data.imagen);
					/*agregar el id del servicio para cuando se envie el form*/
					$("#edit_piano").append($("<input type=\"hidden\" name=\"id\"/>").val(id));
					$("#btnE").attr('disabled', false);
				},
				error: function(data){

				}
			});
		});
	//cancel del modal de editar
	$("#cancelE").click(function(){
		$("#modal_edit").modal("hide");
		$("#edit_piano").each(function(){
			this.reset();
		});
	});
	//guardar cambios de la edicion de piano
	$("#edit_piano").submit(function(){
		$("#btnE").html("<span class='glyphicon glyphicon-refresh'></span><br>Loading").attr("disabled", "disabled");
		$.ajax({
			url: "php/ajax_procesos.php?caso=8",
			type: "POST",
			data: $("#edit_piano").serialize(),
  			success: function(data){
  				$("#msjE").html(data).show(500).delay(1500).fadeOut(1500).queue(function(n){
					$("#modal_edit").modal("hide");
					//refresh de los datos
					load_todos("1");
					n();
				});
  				$("#btnE").html("<span class='glyphicon glyphicon-save'></span><br>Guardar").attr("disabled", false);
  				
  			},
  			error: function(data){
  				$("#msE").html(data).show(500).delay(2500).fadeOut(1500);;
  				$("#btnE").html("<span class='glyphicon glyphicon-save'></span><br>Guardar").attr("disabled", false);
  			}
		});
		return false;
	});
	$("#busqueda").change(function(){
		if($(this).val()==""){
			load_todos("1");
		}
	});
	//eliminar piano selecionado
		$("#confirmar_pass").submit(function(){
			$.ajax({
				url: "php/ajax_procesos.php?caso=9",
				type: "POST",
				data: 'conf_pw='+ $("#conf_pw").val() + '&id_piano=' + $("#id_piano").val(),
				success: function(data){
					if(data == true){
						$("#modal_confirmacion").modal("hide");
						load_todos("1");
						alert("Archivo borrado con éxito");
						$("#conf_pw").val('');
					}else{
						$("#modal_confirmacion").modal("hide");
						alert("Datos incorrectos");
						$("#conf_pw").val('');
					}					
				},
				error: function(data){
					alert(data);
				}
			});
		return false;
		});
		$(".detalles").on("click","span[class='glyphicon glyphicon-remove']",function(){
			$("#id_piano").val($(this).attr('id'));
		});
	});
	</script>
</body>
</html>