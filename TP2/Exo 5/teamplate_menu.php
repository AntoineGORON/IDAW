<?php
    function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
    $mymenu = array(
        // idPage titre
        'index' => array('Accueil'),
        'cv' =>  array('Cv'),
        'hobbies' => array('Hobbies')
    );
    foreach($mymenu as $pageId => $pageParameters) {
        if ($currentPageId == $pageId){
            echo "<a id= 'currentpage' href= $pageId.php>";
            echo $pageParameters[0];
            echo "</a> <br>";
        }
        else{
            echo "<a href= $pageId.php>";
            echo $pageParameters[0];
            echo "</a> <br>";
        }
    }
 }
?>