<?php
/*
 * Die Klasse-Nav wurde Entwickelt, um die den HTML-Code zu vermindern auf mehreren Seiten.
 */
class Nav {
    /*
     * Konstrukter-Initzialisierung.
     */
    function __construct() {}    
    /*
     * Diese Methode wird verwendet um die Navigations-Leiste zu erzeugen. 
     */
    function getNavHTML(){
        echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
        <img src="/WebsiteDipl_V2/pictures/logo_v1.png" height="76" wight="174"  alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <a class="navbar-brand" href="index.php">HOME</a>
        <li class="nav-item">
        <a class="nav-link" href="#">&Uuml;BER UNS<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">KONTAKT</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DIENSTLEISTUNGEN</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">ERDBEWEGUNG</a>
          <a class="dropdown-item" href="#">PFLASTEREI</a>
          <a class="dropdown-item" href="#">WARENHANDEL</a>
        </div>
        </li>
        </li>
        </ul>
        </div>
        </nav>' ;
    }
}

?>