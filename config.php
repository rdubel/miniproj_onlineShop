<?php
define('MYSQL_SERVEUR', 'localhost');
define('MYSQL_UTILISATEUR', 'remy');
define('MYSQL_MOTDEPASSE', 'shadowstorm');
define('MYSQL_BASE', 'Shop');

$mysql = new MySQLi(MYSQL_SERVEUR,
MYSQL_UTILISATEUR,
MYSQL_MOTDEPASSE,
MYSQL_BASE);
if ($mysql->connect_error) {
    echo "Error connecting";
}
 ?>
