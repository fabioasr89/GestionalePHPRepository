<?php
$path="";
if($param==0){
    $path="web/";
}else if($param==2){
    $path="../../";
}
?>

<head>
	<link href="<?php echo $path ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $path ?>css/myStyle.css" rel="stylesheet">
	<link href="<?php echo $path ?>js/bootstrap.min.js" rel="stylesheet">
	<script src="<?php echo $path ?>js/jQuery.js"></script>
	<script src="<?php echo $path ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $path ?>js/dataTable.min.js"></script>
</head>
