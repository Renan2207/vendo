<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vendo Machine</title>
</head>
<body>
	<h2>VENDO MACHINE</h2>
	<form method="post">
		<input type="checkbox" name="chkVendo[]" id="chkCoke" value="Coke"><label for="chkCoke">&nbsp;Coke - ₱ 15</label><br>
		<input type="checkbox" name="chkVendo[]" id="chkSprite" value="Sprite"><label for="chkSprite">&nbsp;Sprite - ₱ 20</label><br>
		<input type="checkbox" name="chkVendo[]" id="chkRoyal" value="Royal"><label for="chkRoyal">&nbsp;Royal - ₱ 20</label><br>
		<input type="checkbox" name="chkVendo[]" id="chkPepsi" value="Pepsi"><label for="chkPepsi">&nbsp;Pepsi - ₱ 15</label><br>
		<input type="checkbox" name="chkVendo[]" id="chkMountainDew" value="MountainDew"><label for="chkMountainDew">&nbsp;MountainDew - ₱ 20</label><br><br>
		<label>Size</label>
			<select name="cups" id="cup">
			  <option id="chkReg" value="Regular">Regular</option>
			  <option  id="chkUp" value="Up">Up-Size (add ₱ 5)</option>
			  <option  id="chkBo" value="Jumbo">Jumbo (add ₱ 10</option>
			</select>
		<label>Quantity</label>
		<input type="number" name="quantity" value="0">
		<input type="submit" name="btnprocess" value="process"/>
	</form>
</body>
<?php 
	if(isset($_POST['btnprocess']) && isset($_POST['chkVendo']))
	{
		$arrVendo = $_POST['chkVendo'];
		$cupsize = $_POST['cups'];
		$quan = $_POST['quantity'];

			echo "<hr>";
 			echo '<h3>Purchase Summarry:</h3>';
		
		 	$quancke= 0;
		 	$quanSprite= 0;
		 	$quanRoyal=0;
		 	$quanPepsi=0;
		 	$quanMountainDew=0;

		 	$totalcke= 0;
		 	$totalSprite= 0;
		 	$totalRoyal= 0;
		 	$totalPepsi = 0;
		 	$totalMountainDew= 0;

		   foreach ($arrVendo as $arrVendos=>$value) 
		   {

             switch ($value) 
             {
             	case 'Coke':
             		$cke= 15;
             		$quancke = $quan;

             		if ($cupsize =='Regular')
             		{
             			$totalcke= $cke * $quancke;
             			echo '&nbsp;&nbsp;',$quancke,'&nbsp;','piece of Regular Coke amounting to ₱ ',$totalcke,"<br>";
             		}
             		elseif ($cupsize =='Up') {
             			$totalcke= ($cke + 5) * $quancke;
             			echo '&nbsp;&nbsp;',$quancke, '&nbsp;', 'piece of Up-Size amounting to ₱ ',$totalcke,"<br>";
             		}
             		elseif ($cupsize =='Jumbo') {
             			$totalcke= ($cke +10) * $quancke;
             			echo '&nbsp;&nbsp;',$quancke,'&nbsp;','piece of Jumbo Coke amounting to ₱ ',$totalcke,"<br>";
             		}
             		
             		break;
             		case 'Sprite':
             		$Sprite= 20;
             		$quanSprite = $quan;

             		if ($cupsize =='Regular')
             		{
             			$totalSprite= $Sprite * $quanSprite;
             			echo '&nbsp;&nbsp;',$quanSprite,'&nbsp;','piece of Regular Sprite amounting to ₱ ',$totalSprite,"<br>";
             		}
             		elseif ($cupsize =='Up') {
             			$up= 5;
             			$totalSprite= ($Sprite + $up) * $quanSprite;
             			echo '&nbsp;&nbsp;',$quanSprite,'&nbsp;','piece of Up-Size Sprite amounting to ₱ ',$totalSprite,"<br>";
             		}
             		elseif ($cupsize =='Jumbo') {
             			$totalSprite= ($Sprite +10) * $quanSprite;
             			echo '&nbsp;&nbsp;',$quanSprite,'&nbsp;','piece of Jumbo Sprite amounting to ₱ ',$totalSprite,"<br>";
             		}
             		break;

             	case 'Royal':
             		$Royal= 20;
             		$quanRoyal = $quan;

             		if ($cupsize =='Regular')
             		{
             			$totalRoyal= $Royal * $quanRoyal;
             			echo '&nbsp;&nbsp;',$quanRoyal,'&nbsp;','piece of Regular Royal amounting to ₱ ',$totalRoyal,"<br>";
             		}
             		elseif ($cupsize =='Up') {
             			$up= 5;
             			$totalRoyal= ($Royal + $up) * $quanRoyal;
             			echo '&nbsp;&nbsp;',$quanRoyal,'&nbsp;','piece of Up-Size Royal amounting to ₱ ',$totalRoyal,"<br>";
             		}
             		elseif ($cupsize =='Jumbo') {
             			$totalRoyal= ($Royal +10) * $quanRoyal;
             			echo '&nbsp;&nbsp;',$quanRoyal,'&nbsp;','piece of Jumbo Royal amounting to ₱ ',$totalRoyal,"<br>";
             		}
             		break;

             	case 'Pepsi':
             		$Pepsi= 15;
             		$quanPepsi = $quan;

             		if ($cupsize =='Regular')
             		{
             			$totalPepsi= $Pepsi * $quanPepsi;
             			echo '&nbsp;&nbsp;',$quanPepsi,'&nbsp;','piece of Regular Pepsi amounting to ₱ ',$totalPepsi,"<br>";
             		}
             		elseif ($cupsize =='Up') {
             			$up= 5;
             			$totalPepsi= ($Pepsi + $up) * $quanPepsi;
             			echo '&nbsp;&nbsp;',$quanPepsi,'&nbsp;','piece of Up-Size Pepsi amounting to ₱ ',$totalPepsi,"<br>";
             		}
             		elseif ($cupsize =='Jumbo') {
             			$totalPepsi= ($Pepsi +10) * $quanPepsi;
             			echo '&nbsp;&nbsp;',$quanPepsi,'&nbsp;','piece of Regular Pepsi amounting to ₱ ',$totalPepsi,"<br>";
             		}
             		break;

             	case 'MountainDew':
             		$MountainDew= 20;
             		$quanMountainDew = $quan;

             		if ($cupsize =='Regular')
             		{
             			$totalMountainDew= $MountainDew * $quanMountainDew;
             			echo '&nbsp;&nbsp;',$quanMountainDew,'&nbsp;','piece of Regular MountainDew amounting to ₱ ',$totalMountainDew,"<br>";
             		}
             		elseif ($cupsize =='Up') {
             			$up= 5;
             			$totalPepsi= ($MountainDew + $up) * $quanMountainDew;
             			echo '&nbsp;&nbsp;',$quanMountainDew,'&nbsp;','piece of Up-Size MountainDew amounting to ₱ ',$totalMountainDew,"<br>";
             		}
             		elseif ($cupsize =='Jumbo') {
             			$totalMountainDew= ($MountainDew +10) * $quanMountainDew;
             			echo '&nbsp;&nbsp;',$quanMountainDew,'&nbsp;','piece of Jumbo MountainDew amounting to ₱ ',$totalMountainDew,"<br>";
             		}
             		break;
             	default:
             		break;
            }
        }
        echo '<br><b>Total Number Of Items: </b>',$quancke + $quanSprite + $quanRoyal + $quanPepsi + $quanMountainDew; 
       	echo '<br><b>Total Amount: </b>',$totalcke + $totalSprite + $totalRoyal + $totalPepsi + $totalMountainDew;
    }
?>
</html>