<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablet-new article</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class='new-article'>
        <form name="post" action="post.php" method="POST" class='article-content' enctype="multipart/form-data">
            <!-- <ul>
                <li>
                    <label for="title">Title</label>
                    <input type="text" name='title' >
                      
                </li>

                <li>
                    <label for="">content</label>
                    <input type="text" name='content' >      
                </li>
                <li>
                    <button>Save to draft</button>
                </li>
                <li>
                    <button>Publish</button>
                </li>
                
            </ul>   -->
        <label for="title" id='title-id'>
            Title
            <input type="text" name="title" placeholder="Enter your title here">
        </label>
        <label for="content" id='content-id'>
            Content
            <textarea name="content" id="input-content" cols="30" rows="10"></textarea>
        </label>
        <button type='submit' id='draft'>Save to Drafts</button>
        <button type="submit" id='publish'>Publish article</button>
        </form>
   </div>
</body>
</html>