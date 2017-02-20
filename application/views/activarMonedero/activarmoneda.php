<html>
<head>
	<link href="http://127.0.0.1:8080/Demos/css/applicationn.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="Servicios">
	<div class = "encabezado">
		<img src="../img/poderjudicial1.png">
	</div>
	<div class="Caja_Servicios">
			<!--<a href="www.google.com.mx">ir a google</a>-->
		<!--<a href="<?php echo base_url()?>predial" onclick="window.external.reproducirAudio('1')">
			<div class="Logos logoPredial"></div>
		</a>-->
		<!--<a href="<?php echo base_url()?>licencias"><!-- onclick="window.external.reproducirAudio('1')" -->
			<!--<div class="Logos logoLicencias"></div>
		</a>
		<a href="<?php echo base_url()?>otrospagos" onclick="window.external.reproducirAudio('1')">
			<div class="Logos logoOPagos"></div>
		</a>
		<a href="<?php echo base_url()?>agua" onclick="window.external.reproducirAudio('1')">
				<div class="Logos logoAgua"></div>
			</a>
		<a href="<?php echo base_url()?>servicios/Trabajando"><!-- onclick="window.external.reproducirAudio('1')" -->
			<!--<div class="Logos logoCurp centerlogo"></div>
		</a>-->

		<div class="inside_Caja_Servicios">
		
			<img src="../img/fond_transparente.png">
				<div class ="contenedor_iconos">
					<img src="../img/paso1.png">
					<h5>Por favor desliza la tarjeta por el lector o captura el numero de tarjeta</h5>
					<form>
						<input type="text" name="numeroTarjeta" value="5240761505063503">
					
					<h5>Capture su Nip</h5> <img src="../img/asteriscolicencias.png">
					<input type="password" name="numeroNip" value="1234">
					</form>
				</div>
		
		</div>
	</div>
	<a href="<?php echo base_url();?>" id="regresar" class="btn-regresar"></a>
	<a href="<?php echo base_url();?>activarMonedero/paso2" id="continuar" class="btn-continuar"></a>
	<div class="pie"></div>
</div>
	</body>
</html>
<!-- <a onclick="window.external.regresarInicio()" id="regresar" class="btn-regresar"/> -->