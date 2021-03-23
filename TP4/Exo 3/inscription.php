
        <!-- <h1>Bases de données MySQL</h1>   -->
        <?php
            $servname = "localhost"; $dbname = "idaw"; $user = "root"; $pass = "";

            echo "<center> <form id=\"login_form\" action=\"inscription.php\" method=\"POST\">
                    <table>
                    <tr>
                        <th>Login :</th>
                        <td><input type=\"text\" name=\"login\"></td>
                    </tr>
                    <tr>
                        <th>Mot de passe :</th>
                        <td><input type=\"password\" name=\"password\"></td>
                    </tr>
                    <tr>
                        <th>Pseudo :</th>
                        <td><input type=\"text\" name=\"pseudo\"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type=\"submit\" value=\"S'inscrire...\" /></td>
                    </tr>
                    </table>
                </form></center>";

            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                $sth = $dbco->prepare("
                INSERT INTO utilisateur(login, password, pseudo)
                VALUES (:login, :password, :pseudo)
              ");

                $sth->bindParam(':login', $login);
                $sth->bindParam(':password', $password);
                $sth->bindParam(':pseudo', $pseudo);
                
                if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['pseudo'])){
                    $login = $_POST['login']; 
                    $password = $_POST['password']; 
                    $pseudo = $_POST['pseudo'];
                    $sth->execute();
                    header("Location: index.php");
                }

            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>