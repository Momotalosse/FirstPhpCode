
<!DOCTYPE html>
<html>
    <head>
        <title>MA PAGE</title>
        <meta charset="UTF-8"/>
    </head>
    
    <body>

        <p>

            <?php
                $dt = time();

                echo "Bonjour, nous sommes le ";

                echo date("d", $dt), " "; 

                echo date("F", $dt), " ";

                echo date("Y", $dt);

                echo " et il est ";

                echo date("H", $dt);

                echo "heure ";

                echo date("i", $dt);

                echo "minutes et ";

                echo date("s", $dt);

                echo "secondes ";

            ?>
        </p>
    </body>
</html>