
<html>
    <head>
        <title>J'adore la date</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Site trop bien pour savoir la date et l'heure</h1>
        <?php
            $date = date("d-m-Y");
            $heure = date("H:i");
            Print ("Nous sommes le $date et il est $heure");
        ?>
    </body>
</html>