<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/postExample.css">
    <title>Cookie Confirmation</title>
</head>
<body>
    <section>
        <?php
            if(isset($_COOKIE["name"])){
                echo "<h2>".$_COOKIE["name"]." your information has been submitted.</h2>";
            }else{
                echo "<h2>your information has been submitted.</h2>";
            }

            if(isset($_COOKIE["email"])){
                echo "<h2>Confirmation will be emailed to: ".$_COOKIE["email"]."</h2>";
            }else{
                echo "<h2>You will receive confirmation through your email</h2>";
            }

            if(isset($_COOKIE["interest"])){
                echo "<h2> You have selected ".$_COOKIE["interest"]." as your ski type.</h2>";
            }else{
                echo "<h2></h2>";
            }
        ?>
    </section>
</body>
</html>