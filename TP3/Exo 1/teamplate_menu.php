<?php
    function renderMenuToHTML($currentPageId, $currentLangId, $currentStyle) {
    // un tableau qui d\'efinit la structure du site

    $la = 0;
    $mymenu = array(
        // idPage titre
        'accueil' => array('Accueil', 'Welcome'),
        'cv' =>  array('CV', 'CV'),
        'hobbies' => array('Passions', 'Hobbies'),
        'infos_technique' => array('Infos Techniques', 'Technical Informations'),
        'contact' => array('Contact', 'Contact')
    );

    if ($currentLangId == 'en'){
        $la = 1;
        echo "<center> <button><a href= index.php?page=$currentPageId&lang=fr&css=$currentStyle> Francais </button> </center>";
    }
    else{
        $la = 0;
        echo "<center> <button><a href= index.php?page=$currentPageId&lang=en&css=$currentStyle> Anglais </button> </center>";
    }
    
    echo "<div class='conteneur-flexible ligne invisible'>";
    foreach($mymenu as $pageId => $pageParameters) {
        echo "<div class='element-flexible hw-menu'>";
        if ($currentPageId == $pageId){
            echo "<a id= 'currentpage' href= index.php?page=$pageId&lang=$currentLangId&css=$currentStyle>";
            echo $pageParameters[$la];
            echo "</a></div>";
        }
        else{
            echo "<a href= index.php?page=$pageId&lang=$currentLangId&css=$currentStyle>";
            echo $pageParameters[$la];
            echo "</a></div>";
        }            
    }
    echo "</div>";
 }
?>