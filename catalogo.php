<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogo | Musical Pianoforte</title>
	<?php include ("php/header.php"); ?>
	<meta name="keywords" content="PIANOS EN AGUASCALIENTES, PIANOS EN BAJA CALIFORNIA, PIANOS EN CANCUN,PIANOS EN CHIAPAS, PIANOS EN COLIMA, PIANOS EN D.F.  PIANOS EN DURANGO, PIANOS EN GUADALAJARA, PIANOS EN HERMOSILLO,  PIANOS EN HIDALGO, PIANOS EN IRAPUATO, PIANOS EN MICHOACANA, PIANOS EN MORELIA, PIANOS EN MORELOS, PIANOS EN NAYARIT, PIANOS EN NUEVO LEON, PIANOS EN OAXACA, PIANOS EN QUERETARO, PIANOS EN QUINTANA ROO, PIANOS EN SAN LUIS POTOSI, PIANOS EN SONORA, PIANOS EN SINALONA, PIANOS EN TABASCO, PIANOS EN TAMPAULIPAS, PIANOS EN TLAXCALA, PIANOS EN YUCATAN." />
	<meta name="description" content="GALERIA DE IMAGENES PIANOFORTE, VENTA DE PIANOSPIANOS EN VENTA A MEXICO, PIANOS AFINADOS Y ECONOMICOS, ENVIOS A TODO MEXICO,PIANOS BARATOS, PIANOS SEMINUEVOS, PIANOS AL MEJOR PRECIO DE MEXICO, VENTA DE PIANOS DE CONCIERTO." />
    <meta name="Author" content="Musical Pianoforte" />
    <meta name="robots" content="index, fallow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="distribution" content="global" />
    <meta name="rating" content="general" />
    <meta name="Content-Language" content="spanish" />
    <meta name="COPYRIGHT" content="Musical Pianoforte">
	<meta name="Webmaster" content="I.S.C. Martin Alanis | I.S.C. Jaime Rodriguez">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/catalogo.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	<div id="top">
		<img src="images/logo2pianos-corto-blanco.svg" >
		<div id="header">			
			<div id="opciones">
				<span class="fa fa-arrow-left"></span>
				<button class="opc active_op" id="all">TODOS</button>
				<button class="opc" id="vert">VERTICAL</button>
				<button class="opc" id="cola">DE COLA</button>
			</div>
		</div>
		<div class="catalogo">
			<h1>CATÁLOGO</h1>
		</div>
	</div>
	<div id="container">
	<?php
		include ("php/conexion.php");
		$res = mysqli_query($con, "select id, tipo, ruta, costo, descripcion, nombre, contacto from catalogo where status = 1");
		while($aux=mysqli_fetch_array($res)){
			echo "<div class='img ".$aux['tipo']." pretty'>
                    <div class='parche'>
                        <a href='".$aux['ruta']."' rel='prettyPhoto[gallery2]'>
                            <img src='".$aux['ruta']."' alt='".$aux['id']."'>
                        </a>
                    </div>
                    <div class='datitos'>
                        <!-- <p><b>ID: ".$aux['id']."</b></p> -->
                        <p><i class='fa fa-usd'></i> Costo: $ ".number_format($aux['costo'], 2, '.', ',')." M.N.</p>
                        <p><i class='fa fa-phone'></i> Cel. y WhatsApp (443) 145-83-51 </p>
                        <p><i class='fa fa-envelope'></i><a href='mailto:musicalpianoforte@hotmail.com' title='Enviar correo a musicalpianoforte@hotmail.com'> ".$aux['contacto']."</a></p>
		            </div>
                    <p class='descripcion'>".str_replace("rn", "", utf8_encode(stripslashes($aux['descripcion'])))."</p> <!--
					<br><p class='mas' id='".$aux['id']."'>Ver más</p> -->
				</div>";
		}
	 ?>
	</div>
	<div class="lineBlack">
		<div class="container">
			<div class="row downLine">

				<div class="col-md-6 text-left copy text-center">
					<p>Musical PianoForte © Todos los derechos reservados. <br>
						Sitio web desarrolado por: <a href="https://www.martinalanis.com">I.S.C Mart&iacute;n Alanis</a> e <a href="https://www.facebook.com/jimmy.HRS"> I.S.C. Jaime Rodr&iacute;guez</a></p>
				</div>
				<div class="col-md-6 text-right dm">
					<ul id="downMenu">
						<li class="active"><a href="index.php#home">Inicio</a></li>
						<li><a href="index.php#about">Nosotros</a></li>
						<li><a href="index.php#reconocimientos">Trabajos</a></li>
						<li><a href="#">Cat&aacute;logo</a></li>
						<li class="last"><a href="index.php#contact">Contacto</a></li>
						<!--li><a href="#features">Features</a></li-->
					</ul>
				</div>
			</div>
		</div>
	</div>
    <!--
		<div class="modal fade" id="modal-img" >
			<div class="modal-dialog modal-lg" >
				<div id="img_modal">
					
				</div>
			</div>
		</div>
    -->
    
    <script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>

	<script type="text/javascript" charset="utf-8">
		jQuery(document).ready(function(){
			jQuery(" a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:5000, autoplay_slideshow: true, social_tools: ''});
		});
	</script>
    
	<script>
	$(document).ready(function(){
		var id = 0;
		$("#cola").click(function(){
			$("#opciones").find(".active_op").removeClass('active_op');
			$(this).addClass("active_op");
			if($(".vertical").is(":visible") && $(".cola").is(":visible")){
				$(".vertical, .cola").fadeOut("fast",function(){
					$(".cola").fadeIn("fast");
				});
			}else{
				$(".vertical").fadeOut("fast", function(){
					$(".cola").fadeIn("fast");
				});				
			}
		});
		$("#vert").click(function(){
			$("#opciones").find(".active_op").removeClass('active_op');
			$(this).addClass("active_op");
			if($(".vertical").is(":visible") && $(".cola").is(":visible")){
				$(".vertical, .cola").fadeOut("fast",function(){
					$(".vertical").fadeIn("fast");
				});
			}else{
				$(".cola").fadeOut("fast", function(){
					$(".vertical").fadeIn("fast");				
				});
			}
		});
		$("#all").click(function(){
			$("#opciones").find(".active_op").removeClass('active_op');
			$(this).addClass("active_op");
			if($(".vertical").is(":visible") && !($(".cola").is(":visible"))){
				$(".vertical").fadeOut("fast", function(){
					$(".vertical, .cola").fadeIn("fast");
				});
			}else if($(".cola").is(":visible") && !($(".vertical").is(":visible"))){
				$(".cola").fadeOut("fast", function(){
					$(".vertical, .cola").fadeIn("fast");
				});
			}
			// $(".vertical, .cola").fadeIn("slow");
		});
		// $(".info").hide();
		/*$(".img img, .mas").click(function(){
			id = $(this).attr("id");
			$("#modal-img").modal("show");
			$("#img_modal").html("<center><img src='images/camera-loader.GIF'></center>");
			$.ajax({
				url: "php/ajax_procesos.php?caso=3",
				type: "POST",
				data: "id=" + id,
				success: function(data){
					$("#img_modal").html(data);
				},
				error: function(data){
					$("#img_modal").html(data);
				}
			});
		});*/
		$(".fa-arrow-left").click(function(){
			window.location.href ="index.php#catalogo";
		});
		$("#img_modal").on("click", ".opc", function(){
			window.location.href ="index.php?pianoId="+id+"#contact";
		});
	});
	</script>
</body>
</html>