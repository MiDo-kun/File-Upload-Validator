<?php 
    include "./file_upload/upload.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./file_upload/style.css">
        <title>File Upload Validator</title>
    </head>
  
    <body>
  
      <form action="index.php" method="POST" enctype="multipart/form-data">
        Select image to upload: <br>
        <div class="filetoUpload">
            <input type="file" name="file"> <br>
        </div>
        <div class="submit">
            <input type="submit" value="Upload" name="submit">
        </div>
    </form>
    
      <script>
      alert("Allowed files are 'jpg', 'jpeg', 'png', 'pdf' and should not be more than 40mb.")
    </script>
    </body>
</html>