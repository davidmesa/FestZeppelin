<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <?php include"includes/head.php"; ?>
  </head>
  <body>
    <!-- Head !-->
    <div id="indexHead">
      <img class="indexLogo" src="assets/images/LogoFZ.png" alt="FestZeppelin"/>
      <div class="indexLogoText">Fest Zeppelin</div>
      <p>Paquetes de viaje a los mejores festivales y conciertos</p>
      <div id="indexCall4Action" class="ui button">Ver Conciertos y Festivales</div>
    	<img id="indexHeaderBG" src="assets/images/BGIndex.jpg" alt="Publico"/>
    </div>
    <!-- end Head !-->

    <!-- Como funciona !-->
    <div id="indexComoFuncionaSec">
      <p class="indexTituloComoFunciona">¿Cómo funciona?</p>
      <div id="indexFuncionesSec" class="ui three column grid stackable">
        <div class="column">
          <img class="ui small circular image indexIconFuncion" src="assets/images/buscar.png"/>
          <p class="indexFuncionDescripcion">Encuentra el concierto o<br>el festival de tus sueños</p>
        </div>

        <div class="column">
          <img class="ui small circular image indexIconFuncion" src="assets/images/paquete.png"/>
          <p class="indexFuncionDescripcion">Escoge el paquete de<br>viaje que más te guste</p>
        </div>

        <div class="column">
          <img class="ui small circular image indexIconFuncion" src="assets/images/roquear.png"/>
          <p class="indexFuncionDescripcion">Vive la mejor experiencia<br>de música en vivo</p>
        </div>
      </div>
    </div>
    <!-- end Como funciona !-->

    <!-- Festivales y conciertos !-->
    <div id="indexProximosEventos">
      <p class="indexTituloProximosEventos">Próximos festivales y conciertos</p>
      <div id="indexEventosSec" class="ui three column grid stackable">
        <div class="column">
        	<div class="ui card indexCenteredEvents">
    			<a class="image" href="KISS.php">
      				<img src="assets/images/kiss.jpg">
    			</a>
    			<div class="content indexConcertImg">
     				<a class="header" href="KISS.php">Conoce la experiencia</a>
    			</div>
  			</div>
        </div>

        <div class="column">
        	<div class="ui card indexCenteredEvents">
    			<a class="image" href="ed.php">
      				<img src="assets/images/ed.jpg">
    			</a>
    			<div class="content indexConcertImg">
     				<a class="header" href="ed.php">Conoce la experiencia</a>
    			</div>
  			</div>
        </div>

        <div class="column">
        	<div class="ui card indexCenteredEvents">
    			<a class="image" href="estereo.php">
      				<img src="assets/images/ep.jpg">
    			</a>
    			<div class="content indexFestImg">
     				<a class="header" href="estereo.php">Conoce la experiencia</a>
    			</div>
  			</div>
        </div>
      </div>
    </div>
    <!-- end Festivales y conciertos !-->

    <?php include"includes/footer.php"; ?>
    <script>
      $("#indexCall4Action").click(function() {
          var offset = 20; //Offset of 20px

          $('html, body').animate({
              scrollTop: $("#indexProximosEventos").offset().top + offset
          }, 1000);
      });
	  mixpanel.track("Index");
    </script>
  </body>
</html
