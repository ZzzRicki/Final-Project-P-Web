<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container-sm pt-5">
    <h1 class='mb-4 text-center'>Libros</h1>

    <div class="row">
        <?php
        try {
            foreach ($db->query("SELECT titulo, notas, tipo, precio, total_ventas FROM titulos") as $row) {
                echo "<div class='col-sm-12 col-md-6 col-lg-4 mb-3 p-4'>
                        <div class='card card-animation p-4 shadow'>
                            <div class='card-body d-flex flex-column justify-content-center'>
                                <h5 class='card-title text-center'>" . $row['titulo'] . "</h5>
                                <p class='card-text text-center'>" . $row['notas'] . "</p>
                               <div class='d-flex justify-content-center'>
                                <span class='badge text-bg-success'>" . $row['tipo'] . "</span>
                                <span>&nbsp</span>
                                <span class='badge text-bg-primary'>Ventas: " . $row['total_ventas'] . "</span>
                               </div>
                            </div>
                            <h4 class='fw-bold text-center'>" . $row['precio'] . "$" . "</h4>
                            <br>
                            <div class='d-flex flex-column'>
                                <button class='btn btn-warning fw-bold'>Comprar</button>
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

<?php include("includes/footer.php") ?>