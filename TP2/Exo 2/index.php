
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
            Print ("Nous sommes le $date et il est $heure <br> <br>");
        ?>

        <h1>Tableau trop jolie</h1>
        <?php  
            $chiens = array();
            $chiens[0] = "boule"; 
            $chiens[1] = "milou"; 
            $chiens[2] = "snoopy";
            $chiens[3] = "pif";

            for ($i=0; $i<4; $i++) {
                echo "$chiens[$i] <br>"; // Avec insertion d'un espace entre 2 valeurs
            }

            print_r($chiens);
        ?>

        <h1>Petite fonction</h1>

        <?php
            function division_euclidienne($a,$b){
                return array(($a - $a % $b) / $b, $a % $b);
            }
            $a = 100;
            $b = 3;
            $resultat = division_euclidienne($a,$b);
            echo "Le quotient de $a par $b est $resultat[0] et le reste est $resultat[1] <br>"; // Avec insertion d'un espace entre 2 valeurs
    
        ?>

    </body>
</html>