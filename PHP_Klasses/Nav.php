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
        <a class="navbar-brand" href="#">
        <img src="/WebsiteDipl_V1/pictures/testimage.png" width="200" height="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <a class="navbar-brand" href="index.php">Home</a>
        <li class="nav-item">
        <a class="nav-link" href="#">Text2<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Text3</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Text4</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Test5</a>
        </li>
        </ul>
        </div>
        </nav>' ;
    }
}

?>