<?php
	$file = '../datos/inscritos.txt';
    $ok = true;
	$contestada =isset($_POST['send']);
	if ($contestada) {
		$required = array('first-name', 'last-name', 'gender', 'pais', 'ciudad', 'email', 'phone', 'tipo', 'numerodoc', 'paisdoc', 'evento', 'paquete', 'boleta');
		foreach($required as $field) {
		  if (empty($_POST[$field])) {
		    $ok = false;
		  }
		}
		if($ok)
		{
		    $message = 'Nombres: ' . $_POST['first-name'] . "\n";
		    $message .= 'Apellidos: ' . $_POST['last-name'] . "\n";
		    $message .= 'Genero: ' . $_POST['gender'] . "\n";
		    $message .= 'Pais: ' . $_POST['pais'] . "\n";
		    $message .= 'Ciudad: ' . $_POST['ciudad'] . "\n";
		    $message .= 'Email: ' . $_POST['email'] . "\n";
		    $message .= 'Telefono: ' . $_POST['phone'] . "\n";
		    $message .= 'Tipo Doc: ' . $_POST['tipo'] . "\n";
		    $message .= 'Numero Doc: ' . $_POST['numerodoc'] . "\n";
		    $message .= 'Pais Doc: ' . $_POST['paisdoc'] . "\n";
		    $message .= 'Evento: ' . $_POST['evento'] . "\n";
		    $message .= 'Paquete: ' . $_POST['paquete'] . "\n";
		    $message .= 'Boleta: ' . $_POST['boleta'] . "\n";
		    $message .= "\n\n-------------------------------------------\n\n";
			
			#Mutex
			$usoArchivo = true;
			$path="/var/lock/inscritos.lock";
			while($usoArchivo){
				if(mkdir($path)){
				  $usoArchivo = false;
				}
			}
		    $success = file_put_contents($file, $message, FILE_APPEND);
			rmdir($path);
                    if($success)
                    {
                      header("location: confirmacion.php");
                    }
                }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pago-Fest Zeppelin</title>
		<?php include"includes/head.php"; ?>
	</head>
	<body>
		<!-- Loading div !-->
	    <div id="loadingDimmer" class="ui page dimmer">
	      <div class="content">
	        <div id="contenidoLoading" class="center">
	          <h2 class="ui inverted icon header">
	            <?php if (isset($success) == false){echo '<i class="sun loading icon"></i>';} ?>
	           	<?php if (isset($success) == false){echo 'Verificando Información';} ?>
	           	<?php if (isset($success) == false){echo '<div class="sub header">Puede tardar varios minutos</div>';} ?>
	           	<?php if (isset($success) && ($success == false)){echo '<i class="doctor icon"></i>';} ?>
	           	<?php if (isset($success) && ($success == false)){echo 'Surgio un error';} ?>
	           	<?php if (isset($success) && ($success == false)){echo '<div class="sub header">Envíanos la información del formulario a info@festzeppelin.com</div>';} ?>
	          </h2>
	        </div>
	      </div>
	    </div>
	    <?php
	    	if($contestada && $ok)
	    	{
	    		echo '<script type="text/javascript">mostrarDim("loadingDimmer");</script>';
	    	}
	    ?>
	    <!-- end Loading div !-->
		<?php include"includes/header.php"; ?>
		<!-- Seguramente alguna imagen !-->
		<div class="ui page grid">
			<div class="sixteen wide column">
				 <div class="concertTitulo">Aquí empieza la mejor experiencia de música en vivo! </div>
				<h3 class="ui header">Sigue estos simples pasos para comprar tu paquete:</h3>
				<div class="ui ordered list">
					<p class="item">Llena el formulario que se encuentra a continuación.</p>
					<p class="item">Una vez validemos tus datos recibirás un correo de confirmación con el precio definitivo del paquete y la información para realizar el pago.</p>
					<p class="item">Después de que recibas el correo tendrás 5 días hábiles para reservar el paquete. Para esto debes consignar en la cuenta de Fest Zeppelin el 33% del valor del paquete.<br> 
									Nota: la información de la cuenta se envía por correo electrónico.</p>
					<p class="item">Recibirás un correo confirmando la compra con la información de la boleta, la reserva del vuelo y la reserva del hotel en Bogotá.</p>
					<p class="item">El 67% restante del pago deberás consignarlo en la cuenta un mes antes del concierto.</p>
					<p class="item">Una vez recibido la totalidad del pago te enviaremos por correo el tiquete electrónico de Avianca y la información detallada sobre el itinerario del viaje.</p>
				</div>
			</div>
			<div class="ui divider"></div>
		</div>
		<div class="ui page grid sectorBlanco" style="padding-bottom:40px; padding-top:35px;">
			<div class="four wide column">
				<div class="ui vertical steps">
				  <div class="active step">
					<i class="write icon"></i>
					<div class="content">
					  <div class="title">Formulario </div>
					  <div class="description">Información básica</div>
					</div>
				  </div>
				  <div class="step">
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
				<?php 
					if($ok == false)
					{
						echo '<div class="ui icon attached message negative"><i class="doctor icon"></i><div class="content"><div class="header">Se requieren todos los datos</div></div></div>';
					}
				?>
				<form class="ui form attached fluid segment" method="post" action="pago.php" id="formularioIncripcion">
					<h4 class="ui dividing header">Información Personal</h4>
					<div class="two fields">
						<div class="required field">
						  <label>Nombre</label>
						  <div class="two fields">
							<div class="field">
							  <input type="text" name="first-name" placeholder="Nombres">
							</div>
							<div class="required field">
							  <input type="text" name="last-name" placeholder="Apellidos">
							</div>
						  </div>
						</div>
						<div class="required field">
							<label>Genero</label>
							<div id="selectGenero"class="ui selection dropdown">
						        <input type="hidden" name="gender">
						        <div class="default text">Genero</div>
						        <i class="dropdown icon"></i>
						        <div class="menu">
						        	<div class="item" data-value="f">Femenino</div>
						        	<div class="item" data-value="m">Masculino</div>
						        </div>
					     	</div>
						</div>
						<script>
							$('#selectGenero').dropdown();
						</script>
					</div>
					<div class="two fields">
						<div class="required field">
							<label>País</label>
							<input type="text" name="pais" placeholder="País">
						</div>
						<div class="required field">
							<label>Ciudad</label>
							<input type="text" name="ciudad" placeholder="Ciudad">
						</div>
					</div>
					<div class="fields">
						<div class="required ten wide field">
							<label>Email</label>
							<input type="text" name="email" placeholder="Correo">
						</div>
						<div class="required six wide field">
							<label>Teléfono</label>
							<input type="text" name="phone" placeholder="Teléfono">
						</div>
					</div>
					<h5 class="ui dividing header">Documento de identidad</h5>
					<div class="three fields">
						<div class="required field">
							<label>Tipo</label>
							<div id="selectTipoDoc" class="ui selection dropdown">
						        <input type="hidden" name="tipo">
						        <div class="default text">Tipo Documento</div>
						        <i class="dropdown icon"></i>
						        <div class="menu">
						        	<div class="item" data-value="Pass">Pasaporte</div>
						        	<div class="item" data-value="CC">Cédula</div>
						        </div>
					     	</div>
						</div>
						<script>
							$('#selectTipoDoc').dropdown();
						</script>
						
						<div class="required field">
							<label>Número</label>
							<input type="text" name="numerodoc" placeholder="Número">
						</div>
						
						<div class="required field">
							<label>País de emisión</label>
							<input type="text" name="paisdoc" placeholder="País">
						</div>
						
					</div>
					
					<h4 class="ui dividing header">Información del Paquete</h4>
					<div class="three fields">
						<div class="required field">
							<label>Evento</label>
							<div id="selectEvento" class="ui selection dropdown">
						        <input type="hidden" name="evento">
						        <div class="default text">Concierto/Fest</div>
						        <i class="dropdown icon"></i>
						        <div class="menu">
						        	<div class="item" data-value="Ed">Ed Sheeran</div>
						        	<div class="item" data-value="KISS">KISS</div>
						        	<div class="item" data-value="Estereo">Estéreo Picnic</div>
						        </div>
					     	</div>
						</div>
						<script>
							$('#selectEvento').dropdown();
						</script>
						
						<div class="required field">
							<label>Paquete</label>
							<div id="selectPaquete" class="ui selection dropdown">
						        <input type="hidden" name="paquete">
						        <div class="default text">Paquete</div>
						        <i class="dropdown icon"></i>
						        <div class="menu">
						        	<div class="item" data-value="1">Individual</div>
						        	<div class="item" data-value="2">2 Personas</div>
						        	<div class="item" data-value="3">3 Personas</div>
						        	<div class="item" data-value="4">4 Personas</div>
						        </div>
					     	</div>
						</div>
						<script>
							$('#selectPaquete').dropdown();
						</script>

						<div class="required field">
							<label>¿Con boleta?</label>
							<div id="selectBoleta" class="ui selection dropdown">
						        <input type="hidden" name="boleta">
						        <div class="default text">Boleta</div>
						        <i class="dropdown icon"></i>
						        <div class="menu">
						        	<div class="item" data-value="si">Si</div>
						        	<div class="item" data-value="no">No</div>
						        </div>
					     	</div>
						</div>
						<script>
							$('#selectBoleta').dropdown();
						</script>
						
					</div>
					<input type="hidden" name="send" value="ok" >
					<button name="send" class="ui fluid green submit button">Enviar</button>
					<script type="text/javascript">
						$('#formularioIncripcion').submit(function() {
						  mostrarDim("loadingDimmer");
						  true;
						});
					</script>
				</form>
			</div>
		</div>
		 <?php include"includes/footer.php"; ?>
		<script type="text/javascript">
			mixpanel.track("Pagina Pago");
		</script>
	</body>
</html>
