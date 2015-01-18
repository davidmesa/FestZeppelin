<div class="ui page grid"><div id="concertTitulo" class="sixteen wide column">Transporte</div></div>
<div id="eventsTransporteSec" class="ui page grid">
  <div class="six wide column">
    <div class="ui grid">
      <div class="two wide column"><i  class="big plane icon"></i></div>
      <div class="fourteen wide column"><h3 class="ui header">Vuelos</h3>
        <p>
          <b>Fecha de llegada:</b> <?php echo $llegada; ?><br>
          <b>Fecha de partida:</b> <?php echo $salida; ?><br>
          <i>Operados por Lan Colombia</i>
        </p>
      </div>
    </div>
  </div>
  <div class="five wide column">
    <div class="ui grid">
      <div class="two wide column"><i class="big building icon"></i></div>
      <div class="fourteen wide column"><h3 class="ui header">Hotel</h3>
        <p>
          Transporte<br>
          <b>Aeropuerto - Hotel - Aeropuerto</b><br>
          <i>Operado por Fest Zeppelin</i>
        </p>
      </div>
    </div>
  </div>
  <div class="five wide column">
    <div class="ui grid">
      <div class="two wide column"><i  class="big car icon"></i></div>
      <div class="fourteen wide column"><h3 class="ui header"><?php echo $type ?></h3>
         <p>
          Transporte<br>
          <b>Hotel - <?php echo $type ?> - Hotel</b><br>
          <i>Operado por Fest Zeppelin</i>
        </p>
      </div>
    </div>
  </div>
</div>