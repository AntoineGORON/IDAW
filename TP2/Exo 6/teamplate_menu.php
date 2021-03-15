<?php
    function renderMenuToHTML($currentPageId, $currentLangId) {
    // un tableau qui d\'efinit la structure du site

    $la = 0;
    $mymenu = array(
        // idPage titre
        'accueil' => array('Accueil', 'Welcome'),
        'cv' =>  array('Cv', 'Cv'),
        'hobbies' => array('Hobbies', 'Hobbies'),
        'infos_technique' => array('Infos Techniques', 'Technical Informations'),
        'contact' => array('Contact', 'Contact')
    );

    if ($currentLangId == 'en'){
        $la = 1;
        echo "<button><a href= index.php?page=$currentPageId&lang=fr> Francais </button>";
    }
    else{
        $la = 0;
        echo "<button><a href= index.php?page=$currentPageId&lang=en> Anglais </button>";
    }
    
    echo "<div class='container-flexible ligne'>";
    foreach($mymenu as $pageId => $pageParameters) {
        echo "<div class='element-flexible ligne'>";
        if ($currentPageId == $pageId){
            echo "<a id= 'currentpage' href= index.php?page=$pageId&lang=$currentLangId>";
            echo $pageParameters[$la];
            echo "</a></div>";
        }
        else{
            echo "<a href= index.php?page=$pageId&lang=$currentLangId>";
            echo $pageParameters[$la];
            echo "</a></div>";
        }            
    }
    echo "</div>";
 }
?>