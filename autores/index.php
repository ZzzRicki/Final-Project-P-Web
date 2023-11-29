<?php
include("../db.php");
include("../includes/header.php");
?>

<div class="container-sm pt-5">
    <h1 class='mb-4 text-center'>Autores</h1>
    <h3 class="text-center">Desliza sobre el autor y descubre más!</h3>
    <br>
    <br>

    <div class="row">
        <?php
        try {
            foreach ($db->query("SELECT a.nombre, a.apellido, a.pais, a.estado, f.fotografia 
                 FROM autores a 
                 JOIN fotografias f ON a.id_autor = f.id_autor
                 ORDER BY a.nombre;") as $row) {
                echo "<div class='col-sm-12 col-md-4 col-lg-3 mb-3 p-4 d-flex justify-content-center'>
                    <div class='flip-card'>
                        <div class='flip-card-inner'>
                            <div class='flip-card-front shadow-lg'>
                                <img src=" . $row['fotografia'] . " alt='Avatar' style='border-radius: 100%; width: 100%'>
                            </div>
                            <div class='flip-card-back shadow-lg'>
                                <h5>" . $row['nombre'] . " " . $row['apellido'] . "</h5>
                                <p>" . $row['pais'] . ", " . $row['estado'] . "</p>
                            </div>
                        </div>
                    </div>
                </div>";
            }

            $db = null;

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        ?>
    </div>

</div>

<?php include("../includes/footer.php") ?>