<!DOCTYPE html>
<html>
	<head>
		<title>Confirmación-Fest Zeppelin</title>
		<?php include"includes/head.php"; ?>
	</head>
	<body>
		<?php include"includes/header.php"; ?>
		<div class="ui page middle aligned grid sectorBlanco" style="padding-bottom:40px; padding-top:35px;">
			<div class="four wide column">
				<div class="ui vertical steps">
				  <div class="step">
					<i class="write icon"></i>
					<div class="content">
					  <div class="title">Formulario </div>
					  <div class="description">Información básica</div>
					</div>
				  </div>
				  <div class="active step">
					<i class="mail icon"></i>
					<div class="content">
					  <div class="title">Confirmación</div>
					  <div class="description">Precio definitivo y método de pago</div>
					</div>
				  </div>
				  <div class="step">
					<i class="payment icon"></i>
					<div class="content">
					  <div class="title">Pago inicial</div>
					  <div class="description">33% del total del paquete</div>
					</div>
				  </div>
				  <div class="step">
					<i class="info icon"></i>
					<div class="content">
					  <div class="title">Confirmación de compra</div>
					  <div class="description">Datos del vuelo, boleta y hotel</div>
					</div>
				  </div>
				  <div class="step">
					<i class="payment icon"></i>
					<div class="content">
					  <div class="title">Pago final</div>
					  <div class="description">67% hasta un mes antes del concierto</div>
					</div>
				  </div>
				  <div class="step">
					<i class="archive icon"></i>
					<div class="content">
					  <div class="title">Entrega del paquete</div>
					  <div class="description">Tiquete aéreo e itinerario</div>
					</div>
				  </div>
				</div>
			</div>
			<div class="twelve wide column">
				<div class="ui positive icon message">
				  <i class="thumbs outline up icon"></i>
				  <div class="content">
					<div class="header">
					  Todo Listo!
					</div>
					<p>Muy pronto un agente de ventas se contactara por medio del correo suministrado.</p>
				  </div>
				</div>
			</div>
		</div>
		 <?php include"includes/footer.php"; ?>
		 <script type="text/javascript">
			mixpanel.track("Envia Pago");
		 </script>
	</body>
</html>
