function organizar() {
  var img = document.getElementById('eventHeadBG');
  document.getElementById('eventBtnTarifas').setAttribute("style", "top:" + (img.clientHeight-76).toString() + "px");
  document.getElementById('menuSec').setAttribute("style", "margin-bottom:" + (img.clientHeight-56).toString() + "px");
}

function ocultarDim(id_dim) {
  $dimmer = $('#'+id_dim);
  $dimmer.dimmer('hide');
}

function mostrarDim(id_dim)
{
  $dimmer = $('#'+id_dim);
  $dimmer.dimmer('show');
}

function verImagen(id_modal) {
  $('#hotel_'+id_modal).modal('show');
}

function next(id_actual_modal){
  var next = id_actual_modal + 1;
  if(id_actual_modal == 5)
  { next = 1; }
  $('#hotel_'+id_actual_modal).modal('hide');
  verImagen(next);
}

function back(id_actual_modal){
  var back = id_actual_modal - 1;
  if(id_actual_modal == 1)
  { back = 5; }
  $('#hotel_'+id_actual_modal).modal('hide');
  verImagen(back);
}

function scrollTo(id_section){
  $('html, body').animate({scrollTop: $("#"+id_section).offset().top}, 1000);
}

function cambiarPrecios(){
  if($("#precio1").text() == " $ 1.450.000* "){
    $("#labelInfoBoleta").text($("#labelInfoBoleta").text().replace("Con", "Sin"));
    document.getElementById('labelInfoBoleta').style.color = "black";
    $("#precio1").text(" $ 1.114.000* ");
    $("#precio2").text(" $ 1.064.000 c/u* ");
    $("#precio3").text(" $ 1.014.000 c/u* ");
    $("#precio4").text(" $ 964.000 c/u* ");
  }
  else{
    $("#labelInfoBoleta").text($("#labelInfoBoleta").text().replace("Sin", "Con"));
    document.getElementById('labelInfoBoleta').style.color = "green";
    $("#precio1").text(" $ 1.450.000* ");
    $("#precio2").text(" $ 1.400.000 c/u* ");
    $("#precio3").text(" $ 1.350.000 c/u* ");
    $("#precio4").text(" $ 1.300.000 c/u* ");
  }
}
