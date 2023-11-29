<?php
    session_start();

    if (!isset($_SESSION['form_submitted']) && !$_SESSION['form_submitted']) {

        header("Location: /");
        exit();
    } 
    
    unset($_SESSION['form_submitted']);
?>

<?php include("../includes/header.php") ?>
    <div class='container-sm pt-5'>
        <h1 class='thanks-for-contacting'>¡Gracias por contactarnos!</h1>
    </div>
<?php include("../includes/footer.php") ?>