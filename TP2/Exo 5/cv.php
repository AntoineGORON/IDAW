
        <?php
            require_once('teamplate_header.php');
        ?>
            <div class="conteneur-flexible">
                <div class="element-flexible bleu-fonce"> 
                    <?php
                        require_once('teamplate_menu.php');
                        renderMenuToHTML('cv');
                    ?>
                </div> 
                <div class="element-flexible bleu-clair">  
                    <h1>Mon CV</h1>
                    <p>Je suis à la recherche d'un stage, s'il vous plaît prenez-moi</p>
                    <img src = "images/CV GORON.jpg">
                </div>
            </div>
            <?php
            require_once('teamplate_footer.php');
            ?>  
