<<<<<<< HEAD
<?php

try
{
$db = new PDO('mysql:host=localhost;dbname=taskit;charset=utf8', 'root', '');

}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

=======
<?php

try
{
$db = new PDO('mysql:host=localhost;dbname=taskit;charset=utf8', 'root', '');

}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

>>>>>>> fonctionnel
?>