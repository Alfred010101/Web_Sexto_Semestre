<?php
    include_once "header.html"
?>
<div id="tarjeta">
    <div class="card" style="width: 18rem;">
    <img src="img/HackerRank.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Empecemos con el registro</h5>
            <p class="card-text">Solo te llevara un momento</p>
            <a href="#" onclick="paso_1()" class="btn btn-primary">Empecemos</a>
        </div>
    </div>
</div>

<div id="formulario">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="txt" class="form-control" id="exampleFormControlInput1" placeholder="Tu Nombre">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Carrera</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tu Carrera">
    </div>

    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">Eres Profesor</label>
    </div>
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">Eres estudiante</label>
    </div>
    <button type="button" class="btn btn-primary" onclick="paso_2()">Enviar</button>
</div>

<div id="datos">
    <label class="form-control" type="text" placeholder="Disable">Nombre</label>
    <label class="form-control" type="text" placeholder="Disable">Carrera</label>
    <label class="form-control" type="text" placeholder="Disable">Estudiante</label>
</div>

<script src="js/formulario.js"></script>

<?php
    include_once "footer.html"
?>