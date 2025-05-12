<?php
include "db.php";
$users = $conn->query("SELECT * from clients");

foreach( $users as $user ) {
    echo $user['name'] . "<br />";
}
?>