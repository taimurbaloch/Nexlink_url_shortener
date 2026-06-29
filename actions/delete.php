<?php 
$url_id= $_GET['id'];

$conn=new mysqli('localhost','root','','url_shortener');
$q='delete from url where id='.$url_id;
$conn->query($q);
header('location:../admin1/urls.php');
?>
