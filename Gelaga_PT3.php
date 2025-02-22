<?php
	
	$HR = 100;
	$WH = 8;
	$days = 26;


		$GI = $HR * $days * $WH;
		$AT = ($GI - 15000) * 0.05;
		$BT = (15000 * 0.05) + (($GI - 30000) * 0.10);

			echo "the Hourly Rate is $$HR";
			
		echo "<br>";
     
	 		if ($GI <= 15000) {
	 			echo "Tax = 0";
	 		}elseif ($GI <= 30000) {
	   			echo "Tax = $$AT";
	 		}else{
	 			echo "Tax = $$BT";
			}

	 echo "<br>";

	 	$T = 8150;

	 	$NI = $GI - $T;

	 		echo "Gross Income is $$GI";
	 			echo "<br>";
	 		echo "Net Income is $$NI";
?>
