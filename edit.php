<?php 
    require('./includes/db.inc.php');
    $title = $_GET['title'];
    session_start();
    $_SESSION['title'] = $title;

    $sql = "SELECT * FROM articles WHERE title = :title";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    if($stmt->execute()){
        echo "Extracted Successfully";
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
    } else{
        echo "Error";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Article</title>
</head>
<body>
    <main class="new edit">
        <a href="index.html" class="newArticle">Back</a>
        <form action="./includes/edit.inc.php" method="post">
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title" value="<?php echo htmlspecialchars($results['title']); ?>">
            </div>
    
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" placeholder="Description" value="<?php echo htmlspecialchars($results['description']); ?>">
            </div>
    
            <div>
                <label for="content">Content</label>
                <textarea name="content"><?php echo htmlspecialchars($results['content']); ?></textarea>
            </div>

            <div class="hasCancelSave">
                <input type="submit" class="btn" name="cancel" value="Cancel">
                <input type="submit" name="save" class="btn" value="Save">
            </div>
        </form>
    </main>
    
</body>
</html>