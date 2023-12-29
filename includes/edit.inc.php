<?php 
    require('db.inc.php');
    session_start();
    $title_url = $_SESSION['title'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];

    $sql = "UPDATE articles SET title=:title, description=:description, content=:content WHERE title=:title_url ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":title", $title, PDO::PARAM_STR);
    $stmt->bindParam(":description", $description, PDO::PARAM_STR);
    $stmt->bindParam(":content", $content, PDO::PARAM_STR);
    $stmt->bindParam(":title_url", $title_url, PDO::PARAM_STR);
    if($stmt->execute()){
        header("Location: ../index.php?success='Edited Successfully'");
        exit();
    } else{
        header("Location: ../edit.php?error=EditError");
    }