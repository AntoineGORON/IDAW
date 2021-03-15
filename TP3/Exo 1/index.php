<header class="bandeau_haut">
    <center> <h1 class="titre">Bienvenue sur la page pro d'Antoine Goron</h1> </center>
</header>

<center>
<form id="style_form" action="index.php" method="GET">
    <select name="habillage.css">
        <option value="style1">Bleu Gris sympa</option>
        <option value="style2">Le prochain est à voir</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>
</center>

<?php

    require_once("teamplate_header.php");
    require_once("teamplate_menu.php");
    $currentPageId = 'accueil';
    $currentLangId = 'fr';
    $currentStyle = "style1";
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) {
        $currentLangId = $_GET['lang'];
    }
    if(isset($_GET['habillage.css'])) {
        $currentLangId = $_GET['habillage.css'];
    }
    renderMenuToHTML($currentPageId, $currentLangId);
    
    setcookie("style", $currentStyle, time()+3600);

?>
<section class="corps">

<?php
    $pageToInclude = "$currentLangId/$currentPageId.php";
    if(is_readable($pageToInclude)){
        require_once($pageToInclude);
    }
    else{
        require_once("error.php");
    }
?>

</section>
<?php
    require_once("teamplate_footer.php");
?>
