        <?php
            require_once('teamplate_header.php');
        ?>  
        <div class="conteneur-flexible h-index">
            <div class="element-flexible bleu-fonce"> 
                <?php
                    require_once('teamplate_menu.php');
                    renderMenuToHTML('index');
                ?>  
            </div>
            <div class="element-flexible bleu">  <h1>Bienvenue sur ma page pro !</h1>  </div>
        </div>        
        <div class="conteneur-flexible h-index">
            <div class="element-flexible bleu-fonce">       </div>
            <div class="element-flexible bleu-clair "> <p>Ici, vous pourrez trouver toutes les informations relatives a moi (hihi je suis trop narcissique)</p>   </div>
        </div>        
        <div class="conteneur-flexible h-index">
            <div class="element-flexible bleu-fonce ">   </div>
            <div class="element-flexible bleu-pale "> Yo  </div>
        </div>
        <?php
            require_once('teamplate_footer.php');
        ?>  
