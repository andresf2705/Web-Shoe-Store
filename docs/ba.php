<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Si se presiona el botón 'Ver más', redirige a otra_pagina.html
    header('Location: tart.html');
    exit;
}
?>
