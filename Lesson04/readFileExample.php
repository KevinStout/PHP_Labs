<html>
    <head>
        <title>Display contents of ultimate Ski Vacation</title>
    </head>
    <body>
        <?php
        $file = 'ultimateSkiVacation.txt';
        if(file_exists($file)){
            $handle = fopen($file, 'r');
            if($file == false){
                echo("<h1>Error in opening file</h1>");
                exit();
            }else{
                $data = fread($handle, filesize($file));
                echo("<h1>File size: ".filesize($file)." bytes");
                echo("<pre>$data</pre>");
                fclose($handle);
            }
        }else{
            echo("<h1>The file does not exist</h1>");
        }
        ?>
    </body>
</html>