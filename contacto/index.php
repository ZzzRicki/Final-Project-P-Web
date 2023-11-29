<?php include("../includes/header.php") ?>

<div class="container-sm pt-5">
<h1 class='mb-4 text-center'>Contáctanos</h1>    
<br>
<br>
    <form class="shadow-lg" action="submit-form.php" method="POST">
        <div>
            <label class="mb-1 fw-bold" for="nombre">Nombre</label>
            <br>
            <input required class="form-control w-100" type="text" id="nombre" name="nombre">
        </div>
        <br>
        <div>
            <label class="mb-1 fw-bold" for="correo">Correo</label>
            <br>
            <input required class="form-control w-100" type="email" id="correo" name="correo">
        </div>
        <br>
        <div>
            <label class="mb-1 fw-bold" for="asunto">Asunto</label>
            <br>
            <input required class="form-control w-100" type="text" id="asunto" name="asunto">
        </div>
        <br>
        <div>
            <label class="mb-1 fw-bold" for="comentario">Comentario</label>
            <br>
            <textarea required class="form-control w-100" type="text" id="comentario" name="comentario"></textarea>
        </div>
        <br>
        <br>
        <input class="btn btn-primary fw-bold w-100" type="submit" value="Enviar">
    </form>
</div>

<?php include("../includes/footer.php") ?>