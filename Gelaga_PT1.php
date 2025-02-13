<!DOCTYPE html>
<html>
<head>
	<title>Public Library Expansion Project</title>
</head>
<body>
<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  	<tr>
  		 <td><h1 align="center">&nbsp;</h1>
	<h1 align="center"> Public Library Expansion Project</h1>
      <h2 align="center"> Cost Estimates</h2>
  </tr>
	<table width="82%" border="0" align="center" cellpadding="5" cellspacing="1">
	<tr>
		<th bgcolor="#bcc3c1" scope="col">Expenditures</th>
          	<th align="center" bgcolor="#bcc3c1">Estimated Cost</th>
         	<th align="center" bgcolor="#bcc3c1">10% Increase</th>
          	<th align="center" bgcolor="#bcc3c1">15% Increase</th>
          	<th align="center" bgcolor="#bcc3c1">20% Increase</th>
    </tr>
	<?php
	

			$L = 150000;
			$AI = 0.10;
			$Ai = 0.15;
			$aI = 0.20;
			$total1 = ($L * $AI) + $L;
			$total2 = ($L * $Ai) + $L;
			$total3 = ($L * $aI) + $L;



	echo "<tr>";
    	echo "<th bgcolor='#98f9ff' scope='col'>Lumber</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$ 150,000.00</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$  $total1</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$  $total2</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$  $total3</th>";
	echo "</tr>";
	?>
	<?php
	

			$L = 78000;
			$AI = 0.10;
			$Ai = 0.15;
			$aI = 0.20;
			$total1 = ($L * $AI) + $L;
			$total2 = ($L * $Ai) + $L;
			$total3 = ($L * $aI) + $L;



	echo "<tr>";
    	echo "<th bgcolor='#ff9e98' scope='col'>Concrete</th>";
    	echo "<th align='center' bgcolor='#ff9e98'>$ 78,000.00</th>";
    	echo "<th align='center' bgcolor='#ff9e98'>$  $total1</th>";
    	echo "<th align='center' bgcolor='#ff9e98'>$  $total2</th>";
    	echo "<th align='center' bgcolor='#ff9e98'>$  $total3</th>";
	echo "</tr>";
	?>
	<?php
	

			$L = 69000;
			$AI = 0.10;
			$Ai = 0.15;
			$aI = 0.20;
			$total1 = ($L * $AI) + $L;
			$total2 = ($L * $Ai) + $L;
			$total3 = ($L * $aI) + $L;



	echo "<tr>";
    	echo "<th bgcolor='#98f9ff' scope='col'>Drywall</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$ 69,000.00</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$  $total1</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$  $total2</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$  $total3</th>";
	echo "</tr>";
	?>
	<?php
	

			$L = 12000;
			$AI = 0.10;
			$Ai = 0.15;
			$aI = 0.20;
			$total1 = ($L * $AI) + $L;
			$total2 = ($L * $Ai) + $L;
			$total3 = ($L * $aI) + $L;



	echo "<tr>";
    	echo "<th bgcolor='#ff9e98' scope='col'>Paint</th>";
    	echo "<th align='center' bgcolor='#ff9e98'>$ 12,000.00</th>";
    	echo "<th align='center' bgcolor='#ff9e98'>$  $total1</th>";
    	echo "<th align='center' bgcolor='#ff9e98'>$  $total2</th>";
    	echo "<th align='center' bgcolor='#ff9e98'>$  $total3</th>";
	echo "</tr>";
	?>
	<?php
	

			$L = 20000;
			$AI = 0.10;
			$Ai = 0.15;
			$aI = 0.20;
			$total1 = ($L * $AI) + $L;
			$total2 = ($L * $Ai) + $L;
			$total3 = ($L * $aI) + $L;



	echo "<tr>";
    	echo "<th bgcolor='#98f9ff' scope='col'>Miscellaneous</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$ 20,000.00</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$  $total1</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$  $total2</th>";
    	echo "<th align='center' bgcolor='#98f9ff'>$  $total3</th>";
	echo "</tr>";
    ?>


	<?php  


			$EC = 329000;
			$AI = 361900;
			$Ai = 378350;
			$aI = 394800;


	echo "<tr>";
	echo "<td align='center'><strong>Total Expenditures</strong></td>";
	echo "<td align='center'>$ $EC</td>";
	echo "<td align='center'>$ $AI</td>";
	echo "<td align='center'>$ $Ai</td>";
	echo "<td align='center'>$ $aI</td>";
	?>
	<?php

			$name = "Eimer Cedrix";

 echo "<tr>";
	echo "<td colspan='5' align='right'><h4>Created by:$name</h4></td>";
 echo "</tr>"
 ?>
     <td><h1 align="center">&nbsp;</h1>
 </table>
	</body>
</html>