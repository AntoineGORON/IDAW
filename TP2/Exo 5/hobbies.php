        <?php
            require_once('teamplate_header.php');
        ?>
            <div class="conteneur-flexible h-hobbies">
                <div class="element-flexible bleu-fonce"> 
                    <?php
                        require_once('teamplate_menu.php');
                        renderMenuToHTML('hobbies');
                    ?>
                </div> 
                <div class="element-flexible bleu-clair">  
                    <h1>Mes Hobbies</h1>
                    <h2>Poker</h2>
                    <p>J'adore le poker voilà</p>
                    <img src = "images/cartes-poker.jpg">
                    <h2>Tennis</h2>
                    J'aime bien le tennis aussi voila
                </div>
            </div>
        <?php
            require_once('teamplate_footer.php');
        ?>  

