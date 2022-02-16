<?php
	if(!empty($_POST['q4']))
	{
		function stripAccents($str) {
			return strtr(utf8_decode($str), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
		}


		$search = strtolower(stripAccents($_POST['q4']));

		$users = ['Marion','Philippe','Romain','Matisse','Léo'];

		foreach ($users as $user) {
			if ($search === strtolower(stripAccents($user))){
				echo "$user<br>";
			}
		}
	
	}
?>