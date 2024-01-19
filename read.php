<?php 
    require('./includes/db.inc.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM articles WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title></title>
</head>
<body>
    <main>
        <a href="index.php" class="newArticle">Back</a>
        <div class="blog">
            <h2><?php echo htmlspecialchars($results->title) ?></h2>
            <p class="date"><?php echo htmlspecialchars($results->created_at) ?></p>
            <p class="description"><?php echo htmlspecialchars($results->description) ?></p>
            <p class="content"><?php $results->content ?></p>
        </div>
    </main>
</body>
</html>