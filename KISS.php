<!DOCTYPE html>
<?php
  $type = "Concierto";
  $boleta = "boleta Rock and Roll All Nite (VIP)";
  $precios = array("1.450.000", "1.400.000", "1.350.000", "1.300.000");
  $llegada ="10 de Abril de 2015";
  $salida ="11 de Abril de 2015";
?>
<html>
  <head>
    <title>KISS-Fest Zeppelin</title>
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
    <img id="eventHeadBG" src="assets/images/KissHead.jpg" alt="FestZeppelin"/>
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
        <div class="eventsIconosDescription"><i class="big calendar icon"></i>10 de Abril de 2015</div>
        <div class="eventsIconosDescription"><i class="big marker icon"></i>Parque Simón Bolívar, Bogotá</div>
        <p>Una de las bandas más influyentes en la historia del rock regresa en 2015 a Colombia para celebrar su aniversario número 40. KISS, que recientemente entró al Hall de la Fama del Rock and Roll, visitará Bogotá el 10 de Abril como parte del tour que inicia en febrero de 2015 en Japón. Este, como todos los shows de la banda, promete ser una experiencia inolvidable con un impresionante montaje de luces, sonido y pirotecnia.<br><br>
          Con 28 álbumes de oro y más de 100 millones ventas a nivel mundial, Gene Simmons y Paul Stanley, junto al guitarrista Tommy Thayer y al baterista Eric Singer siguen trabajando en su legado, año tras año. Cada día son más sus fans y la devoción del KISS Army se mantiene intacta a través de los años.<br><br>
          En esta ocasión Fest Zeppelin se une a esta gran banda para brindarte una experiencia única e inolvidable. Adquiere YA tu paquete de viaje y no te pierdas este histórico concierto.<br><br>
        </p>
      </div>
      <div class="four wide column">
        <div class="eventsPlayer"><iframe src="https://embed.spotify.com/?uri=spotify:user:festzeppelin:playlist:73lg7HG2WQ53AFtm0hF2Lo" width="300" height="380" frameborder="0" allowtransparency="true"></iframe></div>
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
    <div class="ui page grid sectorBlanco eventsTarifasSec"> 
      <div id="eventsTarifasSec" class="sixteen wide column" style="position: relative">
        <a id="btnComprar" href="pago.php" class="ui green button labeled icon" style="right:40px;">
          <i class="shop icon"></i>
          COMPRAR
        </a>
        <div class="concertTitulo">Tarifas</div>
        <div id ="estadoBoleta" class="ui toggle checkbox">
          <input type="checkbox" checked="checked">
        </div>
        <label id="labelInfoBoleta">Con <?php echo $boleta ?></label>

        <script type="text/javascript">
          $('#estadoBoleta').checkbox(
            {
              onChange: function() {
                cambiarPrecios();
              }
            });
        </script>

        <div style="position: relative">
          <div id="eventTarifaDescuento">
            <img class="ui image" src="assets/images/kissDescuento.png">
          </div>
          <table class="ui table">
            <tbody>
                <tr>
                  <td class="six wide">Paquete Individual (1 habitación con cama doble)</td>
                  <td id="precio1" class="five wide center aligned"> $ <?php echo $precios[0] ?>* </td>
                  <td class="five wide"></td>
                </tr>
                <tr>
                  <td class="six wide">Paquete para 2 personas (1 habitación con cama doble)</td>
                  <td id="precio2" class="five wide center aligned"> $ <?php echo $precios[1] ?> c/u*</td>
                  <td class="five wide"></td>
                </tr>
                <tr>
                  <td class="six wide">Paquete para 3 personas (2 habitaciones con cama doble)</td>
                  <td id="precio3" class="five wide center aligned"> $ <?php echo $precios[2] ?> c/u*</td>
                  <td class="five wide"></td>
                </tr>
                <tr>
                  <td class="six wide">Paquete para 4 personas (2 habitaciones con cama doble)</td>
                  <td id="precio4" class="five wide center aligned"> $ <?php echo $precios[3] ?> c/u*</td>
                  <td class="five wide"></td>
                </tr>
            </tbody>
          </table>
        </div>
        <i>* Sujeto a cambios dependiendo del lugar de origen.</i>
      </div>
    </div>
    <!-- end Tarifas !-->

    <!-- KISS ARMY !-->
    <div class="ui page grid sectorBlanco middle aligned">
      <div class="eight wide column">
        <img class="ui image" src="assets/images/KISSArmyWeb.png">
      </div>
      <div class="eight wide column">
        <h2 class="ui header center aligned">POR LA COMPRA DE TU PAQUETE<br>
          RECIBE <span class="eventTextVerde">2 FOTOS AUTOGRAFEADAS<br>
          POR GENE SIMMONS</span> Y UNA<br>
          <span class="eventTextVerde">MEMBRESÍA HONORARIA</span> DE KISS<br>
          ARMY COLOMBIA</h2>
      </div>
    </div>
    <div class="ui page grid sectorBlanco" style="padding-bottom:20px;">
      <div class="sixteen wide column center aligned">
        <i>Descuento sólo aplica para aquellos miembros inscritos antes del 31/12/14.<br>
          Membresía sólo aplica para personas que aun no sean miembros.</i>
      </div>
    </div>
    <!-- end KISS ARMY !-->    
    
    <?php include"includes/footer.php"; ?>
	
	<script type="text/javascript">
		mixpanel.track("Evento", {
			"Tipo": "Concierto",
			"Nombre": "KISS"
		});
	</script>
  </body>
</html
