<?php
$TitrePage = 'exo de PHP';
$DescriptionPage = 'C\'est de la lolade !';
$KeywordsPage = 'ce,que,tu,veux';
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?php echo $TitrePage ?></title>
    <meta name="description" content="<?php echo $DescriptionPage ?>"/>
    <meta name="keywords" content="<?php echo $KeywordsPage ?>">

    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/menufullpage.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.cropit.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>

</head>

<body>
<a href="#menu" class="menu-link">
    <span>toggle menu</span>
</a>
<!-- Début menu à remplacer avec les tableaux de config.php -->
<nav id="menu" class="panel" role="navigation">
    <?php
    for ($NbreElementLigne == 1) {
            echo '<ul>';
            $keys = array($menu['Les helpers']['titre']);
            foreach ($keys as $valeur) {
                echo '<li><div> <a href="helpers/index.php"  >' . $valeur . '</a></div></li>';
            }
            $classe = array($menu['La classe']['titre']);
            foreach ($classe as $valeur) {
                echo '<li><div><a href="/classe/index.php">' . $valeur . '</a></div></li>';
            }
            $note = array($menu['La note']['titre']);
            foreach ($note as $valeur) {
                echo '<li><div><a href="/note/index.php">' . $valeur . '</a></div></li>';
            }
            $lemenu = array($menu['Le menu']['titre']);
            foreach ($lemenu as $valeur) {
                echo '<li><div><a href="/menu/index.php">' . $valeur . '</a></div></li>';
            }
            $ref = array($menu['Le référencement']['titre']);
            foreach ($ref as $valeur) {
                echo '<li><div><a href="/referencement/index.php">' . $valeur . '</a></div></li>';
            }
            $vignette = array($menu['Les vignettes']['titre']);
            foreach ($vignette as $valeur) {
                echo '<li><div><a href="/classe/index.php">' . $valeur . '</a></div></li>';
            }
            $morpion = array($menu['Le morpion']['titre']);
            foreach ($morpion as $valeur) {
                echo '<li><div><a href="/morpion/index.php">' . $valeur . '</a></div></li>';
            }
            $news = array($menu['news']['titre']);
            foreach ($news as $valeur) {
                echo '<li><div><a href="/news/index.php">' . $valeur . '</a></div></li>';
            }
            $csv = array($menu['fichierCSV']['titre']);
            foreach ($csv as $valeur) {
                echo '<li><div><a href="/fichier-csv/index.php">' . $valeur . '</a></div></li>';
            }
            echo '</ul>';
            }
        for ($NbreElementLigne == 2)
            echo '<ul>';
            echo '<li>';
            $keys = array($menu['Les helpers']['titre']);
            foreach ($keys as $valeur) {
                echo '<div> <a href="helpers/index.php"  >' . $valeur . '</a></div>';
            }
            $classe = array($menu['La classe']['titre']);
            foreach ($classe as $valeur) {
                echo '<div><a href="/classe/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>,<li>';
            $note = array($menu['La note']['titre']);
            foreach ($note as $valeur) {
                echo '<div><a href="/note/index.php">' . $valeur . '</a></div>';
            }
            $lemenu = array($menu['Le menu']['titre']);
            foreach ($lemenu as $valeur) {
                echo '<div><a href="/menu/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>,<li>';
            $ref = array($menu['Le référencement']['titre']);
            foreach ($ref as $valeur) {
                echo '<div><a href="/referencement/index.php">' . $valeur . '</a></div>';
            }
            $vignette = array($menu['Les vignettes']['titre']);
            foreach ($vignette as $valeur) {
                echo '<div><a href="/classe/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>,<li>';
            $morpion = array($menu['Le morpion']['titre']);
            foreach ($morpion as $valeur) {
                echo '<div><a href="/morpion/index.php">' . $valeur . '</a></div>';
            }
            $news = array($menu['news']['titre']);
            foreach ($news as $valeur) {
                echo '<div><a href="/news/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>,<li>';
            $csv = array($menu['fichierCSV']['titre']);
            foreach ($csv as $valeur) {
                echo '<div><a href="/fichier-csv/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>';
            echo '</ul>';
        case 3:
            echo '<ul>';
            echo '<li>';
            $keys = array($menu['Les helpers']['titre']);
            foreach ($keys as $valeur) {
                echo '<div> <a href="helpers/index.php"  >' . $valeur . '</a></div>';
            }
            $classe = array($menu['La classe']['titre']);
            foreach ($classe as $valeur) {
                echo '<div><a href="/classe/index.php">' . $valeur . '</a></div>';
            }
            $note = array($menu['La note']['titre']);
            foreach ($note as $valeur) {
                echo '<div><a href="/note/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>,<li>';
            $lemenu = array($menu['Le menu']['titre']);
            foreach ($lemenu as $valeur) {
                echo '<div><a href="/menu/index.php">' . $valeur . '</a></div>';
            }
            $ref = array($menu['Le référencement']['titre']);
            foreach ($ref as $valeur) {
                echo '<div><a href="/referencement/index.php">' . $valeur . '</a></div>';
            }
            $vignette = array($menu['Les vignettes']['titre']);
            foreach ($vignette as $valeur) {
                echo '<div><a href="/classe/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>,<li>';
            $morpion = array($menu['Le morpion']['titre']);
            foreach ($morpion as $valeur) {
                echo '<div><a href="/morpion/index.php">' . $valeur . '</a></div>';
            }
            $news = array($menu['news']['titre']);
            foreach ($news as $valeur) {
                echo '<div><a href="/news/index.php">' . $valeur . '</a></div>';
            }
            $csv = array($menu['fichierCSV']['titre']);
            foreach ($csv as $valeur) {
                echo '<div><a href="/fichier-csv/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>';
            echo '</ul>';
        case 4:
            echo '<ul>';
            echo '<li>';
            $keys = array($menu['Les helpers']['titre']);
            foreach ($keys as $valeur) {
                echo '<div> <a href="helpers/index.php"  >' . $valeur . '</a></div>';
            }
            $classe = array($menu['La classe']['titre']);
            foreach ($classe as $valeur) {
                echo '<div><a href="/classe/index.php">' . $valeur . '</a></div>';
            }
            $note = array($menu['La note']['titre']);
            foreach ($note as $valeur) {
                echo '<div><a href="/note/index.php">' . $valeur . '</a></div>';
            }
            $lemenu = array($menu['Le menu']['titre']);
            foreach ($lemenu as $valeur) {
                echo '<div><a href="/menu/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>,<li>';

            $ref = array($menu['Le référencement']['titre']);
            foreach ($ref as $valeur) {
                echo '<div><a href="/referencement/index.php">' . $valeur . '</a></div>';
            }
            $vignette = array($menu['Les vignettes']['titre']);
            foreach ($vignette as $valeur) {
                echo '<div><a href="/classe/index.php">' . $valeur . '</a></div>';
            }
            $morpion = array($menu['Le morpion']['titre']);
            foreach ($morpion as $valeur) {
                echo '<div><a href="/morpion/index.php">' . $valeur . '</a></div>';
            }
            $news = array($menu['news']['titre']);
            foreach ($news as $valeur) {
                echo '<div><a href="/news/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>,<li>';
            $csv = array($menu['fichierCSV']['titre']);
            foreach ($csv as $valeur) {
                echo '<div><a href="/fichier-csv/index.php">' . $valeur . '</a></div>';
            }
            echo '</li>';
            echo '</ul>';


    }
    ?>
</nav>


