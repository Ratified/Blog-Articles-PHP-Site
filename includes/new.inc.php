<?php 
    require('db.inc.php');

    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    
    if(isset($_POST['save']) || isset($_POST['cancel'])){
        if(isset($_POST['save'])){
            $sql = "INSERT INTO articles (title, description, content) VALUES (:title, :description, :content);";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':content', $content, PDO::PARAM_STR);
            $execution_status = $stmt->execute();
            if($execution_status){
                header('Location: ../index.php?success=InsertedSuccessfully');
                exit();
            } else{
                echo "An error occurred";
            }
        } else if(isset($_POST['cancel'])){
            header('Location: ../index.php');
        }
    } else{
        header("Location: ../new.php?error");
    }