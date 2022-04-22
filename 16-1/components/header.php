<?php
/** @var $adminVisability bool */
?>

<nav class="container-nav">
	<div class="item"><a href="index.php">main</a></div>
	<div class="item"><a href="index.php?page=aboutus">about us</a></div>
	<div class="item"><a href="index.php?page=services">services</a></div>
	<div class="item"><a href="index.php?page=products">products</a></div>
	<div class="item"><a href="index.php?page=partners">partners</a></div>
	<div class="item"><a href="index.php?page=contacts">contacts</a></div>
<?php if($adminVisability) {?>
	<!--<div class="item"><a href="index.php?page=regin">regin</a></div>-->
	<div class="item"><a href="index.php?page=login">login</a></div>
	<div class="item"><a href="index.php?page=logout">logout</a></div>
<?php } ?>

</nav>
<div class="container-logo"><img src="img/logo.png" alt="logo">
	<h2>THE BEST QUALITY PRODUCT</h2>
</div>
