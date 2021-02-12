<?php
try {
    $sql = mysqli_connect("localhost", 'root', '', 'cadastros');
} catch (Exception $e) {
    echo $e->getMessage();
}
