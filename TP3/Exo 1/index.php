

<?php

    $currentPageId = 'accueil';
    $currentLangId = 'fr';
    $currentStyle = "habillage";
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) {
        $currentLangId = $_GET['lang'];
    }
    if(isset($_GET['css'])) {
        $currentStyle = $_GET['css'];
    }

    $cookiestyle = setcookie("style", $currentStyle, time()+3600);
    echo "setcookie(\"style\", $currentStyle, time()+3600)";
?>

<header class="bandeau_haut">
    <center> <h1 class="titre">Bienvenue sur la page pro d'Antoine Goron</h1> </center>
</header>

<?php

    require_once("teamplate_header.php");
    require_once("teamplate_menu.php");
    renderMenuToHTML($currentPageId, $currentLangId, $currentStyle);

?>

<center>
<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="habillage">Bleu Gris sympa</option>
        <option value="habillage2">Le prochain est à voir</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>
</center>

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
