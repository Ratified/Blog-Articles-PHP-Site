<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    <link rel="stylesheet" href="styles.css">
    <title>New Article</title>
</head>
<body>
    <main class="new edit">
        <a href="index.php" class="newArticle">Back</a>
        <form action="./includes/new.inc.php" method="post">
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title">
            </div>
    
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" placeholder="Title">
            </div>
    
            <div>
                <label for="content">Content</label>
                <textarea id="mytextarea" name="content" cols="30" rows="10"></textarea>
            </div>

            <div class="hasCancelSave">
                <input type="submit" class="btn" name="cancel" value="Cancel">
                <input type="submit" name="save" class="btn" value="Save">
            </div>
        </form>
    </main>
    
</body>
</html>