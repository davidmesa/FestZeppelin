<!DOCTYPE html>
<?php
  $type = "Festival";
  $boleta = "entrada a los 3 días";
  $precios = array("2.400.000", "2.220.000", "1.950.000", "1.790.000");
  $llegada ="11 de Marzo de 2015";
  $salida ="15 de Marzo de 2015";
?>
<html>
  <head>
    <title>Estéreo Picnic-Fest Zeppelin</title>
    <?php include"includes/head.php"; ?>
    <script type="text/javascript">
        window.addEventListener('resize', organizar);
        setTimeout(function() {
          organizar();
          ocultarDim('loadingDimmer');
        }, 3000);
    </script>
  </head>
  <body onload="organizar();ocultarDim('loadingDimmer');">

    <div class="fest">

      <!-- Loading div !-->
      <div id="loadingDimmer" class="ui page dimmer">
        <div class="content">
          <div class="center">
            <h2 class="ui inverted icon header">
              <i class="sun loading icon"></i>
              Cargando
              <div class="sub header">Creando la experiencia!</div>
            </h2>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        mostrarDim('loadingDimmer');
      </script>
      <!-- end Loading div !-->

      <!-- Head !-->
      <?php include"includes/header.php"; ?>
      <img id="eventHeadBG" src="assets/images/estereo.jpg" alt="FestZeppelin"/>
      <div id="eventBtnTarifas" class="ui animated button green large" onclick="scrollTo('eventsTarifasSec');">
        <div class="visible content">VER TARIFAS</div>
        <div class="hidden content">
          <i class="down arrow icon"></i>
        </div>
      </div>            
      <!-- end Head !-->

      <!-- Basica !-->
      <div class="ui page grid">
        <div class="twelve wide column">
          <div class="concertTitulo">Descripción</div>
          <div class="eventsIconosDescription"><i class="big calendar icon"></i>12, 13 y 14 de Marzo de 2015</div>
          <div class="eventsIconosDescription"><i class="big marker icon"></i>Zona Festival 222, Bogotá</div>
          <p>En marzo del 2015 regresa la sexta edición del festival de música alternativa más importante del país. Para esta ocasión el Festival Estéreo Picnic promete un mundo distinto en el que los asistentes podrán olvidarse de la rutina y la cotidianidad por 3 días y disfrutar de la mejor experiencia musical.<br><br>
  		       Desde ya la Sabana de Bogotá prepara más de 65.000 metros cuadrados para recibir artistas y asistentes de todos los continentes. Para este año el Festival contará por primera vez con 3 escenarios y más de 60 artistas, unas cifras sin precedentes. Serán tres días de nuevas experiencias. Tres días de sensaciones. Tres días de buena música.<br><br>
   		       Fest Zeppelin se une a este importante festival que nos hará vivir emociones únicas y nos transportará a un universo diferente. Más que un paquete ofrecemos un pasaje para entrar a un mundo distinto. No te lo pierdas!
  		    </p>
        </div>
        <div class="four wide column">
          <div class="eventsPlayer"><iframe src="https://embed.spotify.com/?uri=spotify:user:festzeppelin:playlist:2TeR54UBjxSAQtzx5v0W9u" width="300" height="380" frameborder="0" allowtransparency="true"></iframe></div>
        </div>
      </div>
      <!-- end Basica !-->

      <!-- Hotel !-->
      <?php include"includes/hotel.php"; ?>
      <!-- end Hotel !-->

      <!-- Transporte !-->
      <?php include"includes/transporte.php"; ?>
      <!-- end Transporte !-->
      
      <!-- Tarifas !-->
      <?php include"includes/tarifas.php"; ?>
      <!-- end Tarifas !-->
    
      <?php include"includes/footer.php"; ?>
	  <script type="text/javascript">
		mixpanel.track("Evento", {
			"Tipo": "Festival",
			"Nombre": "Estéreo Picnic"
		});
	  </script>
    </div>
  </body>
</html
