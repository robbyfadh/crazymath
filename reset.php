	<?php
	//Mereset username dan foto
	setcookie("username","",time()-3600*24*30);
	setcookie("foto","",time()-3600*24*30);
	header('location:index.php');
	?>