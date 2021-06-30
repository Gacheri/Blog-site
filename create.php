
<?php
if (!empty($_POST)){
     require 'connect.php';
     $message='';

     if(isset ($_POST['title']) && isset ($_POST['content'])){
        try{
            $title = $_POST['title'];
            $content = $_POST['content'];
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
            $sql = "INSERT INTO tablet.article (title,content) VALUES (:title, :content)";
            $statement = $conn->prepare($sql);  
         
         if($statement->execute([':title' => $title, ':content' => $content ])){
             echo 'Your majesty. Data has been successfully entered';
          }
        } catch(PDOException $e){
            echo"Data not entered to database: " . $e->getMessage();
        }
 
         
     } 
}
   

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablet-new article</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='message-alert'>
        <?php
        if(!empty($message)):
        ?>
        <h1 class='message-alert-body'>
            <?= $message; ?>
        </h1>
    </div>
    <?php endif; ?>
   <div class='new-article'>
        <form method="post" class='article-content' enctype="multipart/form-data">       
        <label for="title" id='title-id' >
            Title
            <input type="text" name="title" placeholder="Enter your title here">
        </label>
        <label for="content" id='content-id'>
            Content
            <textarea name="content" id="input-content" cols="30" rows="10"></textarea>
        </label>
        <button type='submit' id='draft'>Save to Drafts</button>
        <!-- <button type="submit" id='publish'>Publish article</button> -->
        </form>
   </div>
</body>
</html>
