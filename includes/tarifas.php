<div class="ui page grid sectorBlanco eventsTarifasSec"> 
  <div id="eventsTarifasSec" class="sixteen wide column" style="position: relative">
    <a id="btnComprar" href="pago.php" class="ui button labeled icon">
      <i class="shop icon"></i>
      COMPRAR
    </a>
		<div class="concertTitulo">Tarifas</div>
		<h4>Con <?php echo $boleta ?></h4>
		<table class="ui table">
  		<tbody>
    			<tr>
      			<td>Paquete Individual (1 habitación con cama doble)</td>
      			<td> $ <?php echo $precios[0] ?>* </td>
    			</tr>
    			<tr>
     				<td>Paquete para 2 personas (1 habitación con cama doble)</td>
      			<td> $ <?php echo $precios[1] ?> c/u*</td>
    			</tr>
    			<tr>
      			<td>Paquete para 3 personas (2 habitaciones con cama doble)</td>
      			<td> $ <?php echo $precios[2] ?> c/u*</td>
    			</tr>
    			<tr>
      			<td>Paquete para 4 personas (2 habitaciones con cama doble)</td>
      			<td> $ <?php echo $precios[3] ?> c/u*</td>
    			</tr>
  		</tbody>
	  </table>
	  <i>* Sujeto a cambios dependiendo del lugar de origen.</i>
  </div>
</div>