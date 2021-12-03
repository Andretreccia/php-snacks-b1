<?php
$name = $_GET['name'];

$invitati = [ 'Michele', 'Fabio', 'Andrea', 'Valentina'];

if (in_array($name, $invitati)) {
    $result = " riuscito";
} else {
    $result = " negato";
}
echo $result;
?>