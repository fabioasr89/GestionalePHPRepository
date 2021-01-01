<?php
$pathImg="";
if($param==0){
    $pathImg="web/images/";
}else if($param!=0){
    $pathImg="../images/";
}
?>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<nav class="navbar navbar-dark bg-primary">
			<a class="navbar-brand" href="#"> <img
				src="<?php echo $pathImg.'logo.PNG'?>" width="30" height="30"
				class="d-inline-block align-top" alt="" loading="lazy">
				Videoteca-App-PHP
			</a>
		</nav>
	</nav>
</header>