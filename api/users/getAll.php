<?php
// Récupérer les données de la base
$users = R::getAll( 'SELECT * FROM users' );
echo json_encode($users);
?>
