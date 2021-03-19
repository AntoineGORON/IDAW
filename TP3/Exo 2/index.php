<?php
    session_start();
    $currentPageId = 'accueil';
    $currentLangId = 'fr';
    $currentStyle = 'habillage';

    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    
    if(isset($_GET['lang'])) {
        $currentLangId = $_GET['lang'];
    }

    if(isset($_COOKIE['cstyle'])){
        $currentStyle = $_COOKIE['cstyle'];
    }

    if(isset($_GET['css'])) {
        $currentStyle = $_GET['css'];
        setcookie("cstyle", $currentStyle, time()+3600);
    }
    require_once("connected.php");
    require_once("teamplate_header.php");

    if ($_SESSION == array()){
        require_once("login.php");
    }
    else{
        $currentLogin = $_SESSION['login'];
        echo "<center> Vous êtes connecté en tant que $currentLogin <br>";
        echo "<a href=\"deconnexion.php\"><button type=\"button\">Déconnexion</button></a></center> <br><br>";
    }

    require_once("teamplate_menu.php");

    renderMenuToHTML($currentPageId, $currentLangId);

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
