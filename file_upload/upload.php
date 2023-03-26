<?php 
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        // print_r($file);
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

            if (in_array($fileActualExt, $allowed)){
                if ($fileError === 0){
                    if ($fileSize < 4000000){
                        $fileNameNew = uniqid('', true) .".". $fileActualExt;
                        $fileDestination = './file_upload/uploads/'. $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                      echo "File uploaded successfully!";
                      // header("Location: index.php?uploadsuccess");  
                    } else {
                        echo "Your file is too big, limit is 40MB";
                    }
                }
                else {
                    echo "There was an error please try again!";
                }
            } else {
                echo "You connot upload files of this type!";
            }

    }
?>