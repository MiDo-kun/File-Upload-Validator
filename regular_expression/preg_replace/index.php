<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // the logic here is that
    // first the string, using the pattern it forms a search around that string 
    // if it finds it then change the string by the string you want.
    // preg_replace($pattern or the regular expression itself, then what you should change, the string or the hardcoded ones);
        $str = "Visit Microsoft!";
        $pattern = "/microsoft/i";
        echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
    ?>
</body>
</html>