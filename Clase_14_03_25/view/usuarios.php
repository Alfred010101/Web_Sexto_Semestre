<?php
    include_once "header.html"
?>
<div id="tarjeta">
    <div class="card" style="width: 18rem;">
    <img src="img/HackerRank.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Empecemos con el registro</h5>
            <p class="card-text">Solo te llevara un momento</p>
            <a href="#" onclick="mostrar_formulario()" class="btn btn-primary">Empecemos</a>
        </div>
    </div>
</div>

<div>
    <table class="table table-striped table-hover" name="tabla_usuarios" id="tabla_usuarios">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Carrera</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>

<div id="formulario">
    <div class="mb-3">
        <label for="txt_nombre" class="form-label">Nombre</label>
        <input type="txt" class="form-control" id="txt_nombre" placeholder="Tu Nombre">
    </div>
    <div class="mb-3">
        <label for="txt_carrera" class="form-label">Carrera</label>
        <input type="text" class="form-control" id="txt_carrera" placeholder="Tu Carrera">
    </div>
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="tipo_usuario">
        <label class="form-check-label" for="tipo_usuario">Eres estudiante</label>
    </div>
    <button type="button" class="btn btn-primary" onclick="guardar_datos()">Guardar</button>
</div>

<div id="datos">
    <label class="form-control" type="text" placeholder="Disable">Nombre</label>
    <label class="form-control" type="text" placeholder="Disable">Carrera</label>
    <label class="form-control" type="text" placeholder="Disable">Estudiante</label>
</div>



<?php
    include_once "footer.html"
?>
<script src="js/usuarios.js"></script>