<?php
	if(!empty($_POST['q1']))
	{

		$nb = $_POST['q1'];

		function printTable($nb){
			echo '<div class="card col-2"><div class="card-body">';
			echo '<p class="col-12">';
			for($i = 1; $i <= 10; $i++)
			{
				echo "$nb x $i = ".($nb*$i).'<br>';
			}
			echo '</p>';
			echo '</div></div>';
		}

		echo '<div class="row justify-content-center">';
		printTable($nb);
		echo '</div><br>';

		echo '<div class="row justify-content-center">';
		for($i = 1; $i<=10; $i++){
			printTable($i);
		}
		echo '</div>';
		
	}

?>