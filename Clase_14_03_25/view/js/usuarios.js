function init() {
  document.getElementById("tarjeta").style.display = "block";
  document.getElementById("formulario").style.display = "none";
  document.getElementById("datos").style.display = "none";
  listar_usuarios();
}

function mostrar_formulario() {
  document.getElementById("tarjeta").style.display = "none";
  document.getElementById("formulario").style.display = "block";
  document.getElementById("datos").style.display = "none";
}

function guardar_datos() {
  document.getElementById("tarjeta").style.display = "none";
  document.getElementById("formulario").style.display = "none";
  document.getElementById("datos").style.display = "block";
  datos = new FormData();
  datos.append("nombre", $("#txt_nombre").val());
  datos.append("carrera", $("#txt_carrera").val());
  datos.append("tipo", $("#tipo_usuario").prop("checked"));
  $.ajax({
    url: "../ajax/formulario.php?option=alta_usuario",
    type: "POST",
    data: datos,
    contentType: false,
    processData: false,
    success: function (response) {
      alert(response);
      init();
    },
  });
  $("#txt_nombre").val("");
  $("#txt_carrera").val("");
  $("#tipo_usuario").prop("checked", false);
}

function listar_usuarios() {
  $("#tabla_usuarios").DataTable({
    destroy: true,
    ajax: {
      type: "POST",
      url: "../ajax/formulario.php?option=listar_usuarios",
      dataSrc: "data",
    },
    columns: [{ data: "nombre" }, { data: "carrera" }, { data: "boton" }],
    iDisplayLength: 3,
    order: [2, "desc"],
  });
}

init();
