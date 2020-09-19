<?php

try{
    $bd = new PDO('mysql:host=loclahost;dbname=e-learning;charset=utf8','root','');
}
catch (Exception $e)
{
    die('Erreur :'.$e->getMessage());
}

?>