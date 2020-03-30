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
    switch ($NbreElementLigne) {
        case 1 :
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
    ?>
</nav>

<!--  <nav id="menu" class="panel" role="navigation">
    <ul>
                     <li>
<div><a href="/helpers/">Les helpers</a></div>
<div><a href="/classe/">La classe</a></div>
<div><a href="/note/">La note</a></div>
</li><li>
<div><a href="/menu/">Le menu</a></div>
<div><a href="/referencement/">Référencement</a></div>
<div><a href="/vignettes/">Les vignettes</a></div>
</li><li>
<div><a href="/morpion/">Le morpion</a></div>
<div><a href="/news/">Les news</a></div>
<div><a href="/fichier-csv/">Fichier CSV</a></div>
</li>

      </ul>
  </nav>-->
<!-- Fin menu à remplacer avec les tableaux de config.php -->
