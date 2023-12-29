<?php
    require('db.inc.php');

    $sql = "SELECT * FROM articles ORDER BY id DESC;";
    $result = $pdo->query($sql);
    $blogs = [];

    if($result->rowCount() > 0){
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $blogs[] = $row;
        }

        $json_encoded_blogs = json_encode($blogs);
        echo $json_encoded_blogs;
    }