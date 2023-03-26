<!DOCTYPE html>
<html>
<body>
    <?php
        $str = "Visit W3Schools";
        $pattern = "/w3schools/i";
        // echo preg_match($pattern, $str); 
    // preg_match theres two conditions or an input field the
    // first one must be requirement and the second one is the field. 
    // returns 1 if true if the pattern was found on the string.
    // else false.
        if (preg_match($pattern, $str)){
            echo "true";
        }
        else {
            echo "false";
        }
    ?>
</body>
</html>