<?php include('../db.php') ?>

<?php
  try {
    $stmt = $db->prepare("INSERT INTO contactos (nombre, correo, asunto, comentario) VALUES (:nombre, :correo, :asunto, :comentario)");

    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':correo', $_POST['correo']);
    $stmt->bindParam(':asunto', $_POST['asunto']);
    $stmt->bindParam(':comentario', $_POST['comentario']);
  
    $stmt->execute();

    $db = null;

    session_start();
    $_SESSION['form_submitted'] = true;
    header("Location: submit-success.php");
    exit();

  } catch (PDOException $e) {
    header("Location: submit-error.php");
    die();
  }
?>