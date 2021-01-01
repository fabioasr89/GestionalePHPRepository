<html>
<?php
session_start();
if(!isset($_SESSION['auth'])){
   header("location:../notAuthorization.php"); 
}else{
    $param=2;
    include_once '../../layout/head.php';
}
?>

<body>
<?php include_once '../../layout/header.php';?>

<!-- DA IMPLEMENTARE -->
<p>Benvenuto <?php echo $_SESSION['username']?></p>
</body>
</html>