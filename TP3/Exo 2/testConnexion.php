
        <!-- <h1>Bases de données MySQL</h1>   -->
        <?php
            $servname = "localhost"; $dbname = "idaw"; $user = "root"; $pass = "";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                $sth = $dbco->prepare("SELECT * FROM utilisateur");
                $sth->execute();

                $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>