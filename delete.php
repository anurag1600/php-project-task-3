<?php
include 'pndb.php';

$id=$_GET['id'];

$q="DELETE FROM internship2020 WHERE id=$id";


mysqli_query($col,$q);

header('location:pndisplay.php');

?>