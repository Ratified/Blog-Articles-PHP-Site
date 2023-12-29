<?php 
    require("db.inc.php");
    $id = $_GET['id'];

    // Make sure the ID is valid (e.g., a positive integer) before proceeding
    if (!ctype_digit($id) || $id <= 0) {
        header("Location: ../index.php?InvalidID");
        exit();
    }

    $sql = "DELETE FROM articles WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: ../index.php?DeletedSuccessfully");
        exit();
    } else {
        header("Location: ../index.php?ErrorDeleting");
        exit();
    }
