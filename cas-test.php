<?php
/*
Template Name: CAS test
*/

// force CAS authentication
phpCAS::forceAuthentication();

?>
<html>
  <head>
    <title>Exemple d'internationalisation de phpCAS</title>
  </head>
  <body>
    <h1>Authentification</h1>
    <p>getUser: <b><?php echo phpCAS::getUser(); ?></b>.</p>
    <p>getVersion: <b><?php echo phpCAS::getVersion(); ?></b>.</p>
  </body>
</html>