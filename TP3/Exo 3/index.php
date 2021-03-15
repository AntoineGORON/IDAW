<header class="bandeau_haut">
    <center> <h1 class="titre">Bienvenue sur la page pro d'Antoine Goron</h1> </center>
</header>

<form id="style_form" action="index.php" method="POST">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>


<?php
    require_once("teamplate_header.php");
    require_once("teamplate_menu.php");
    $currentPageId = 'accueil';
    $currentLangId = 'fr';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) {
        $currentLangId = $_GET['lang'];
    }
    renderMenuToHTML($currentPageId, $currentLangId);
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
