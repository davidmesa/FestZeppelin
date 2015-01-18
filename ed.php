<!DOCTYPE html>
<?php
  $type = "Concierto";
  $boleta = "boleta VIP";
  $precios = array("1.360.000", "1.330.000", "1.200.000", "1.130.000");
  $llegada ="19 de Abril de 2015";
  $salida ="20 de Abril de 2015";
?>
<html>
  <head>
    <title>Ed Sheeran-Fest Zeppelin</title>
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
    <img id="eventHeadBG" src="assets/images/edHead.jpg" alt="FestZeppelin"/>
    <div id="eventBtnTarifas" class="ui animated button green large tarifas" onclick="scrollTo('eventsTarifasSec');">
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
        <div class="eventsIconosDescription"><i class="big calendar icon"></i>19 de Abril de 2015</div>
        <div class="eventsIconosDescription"><i class="big marker icon"></i>Outlet Bima, Bogotá</div>
        <p>El domingo 19 de abril Bogotá recibirá por primera vez a la estrella del pop británico Ed Sheeran. Colombia será la primera parada suramericana de la gira mundial de su reciente álbum titulado "X".<br><br>
          Con tan sólo 23 años, Ed Sheeran es el nuevo fenómeno de la música POP en el mundo. Recientemente fue nombrado el artista más escuchado en Spotify, llegando a más de 860 millones de visitas en 2014. Millones de albumes vendidos, estadios llenos en Europa y Estados Unidos, y club de fans diseminados por todo el planeta, confirman su éxito a nivel mundial.<br><br>
		      Fest Zeppelin estará presente en este inolvidable concierto y te tiene preparado un paquete de viaje para poder disfrutar de la mejor experiencia con Ed Sheeran.
        </p>
      </div>
      <div class="four wide column">
        <div class="eventsPlayer"><iframe src="https://embed.spotify.com/?uri=spotify:user:festzeppelin:playlist:7tNKo4o5ahz27KyE6I7O0J" width="300" height="380" frameborder="0" allowtransparency="true"></iframe></div>
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
			"Tipo": "Concierto",
			"Nombre": "Ed Sheeran"
		});
	</script>
  </body>
</html
