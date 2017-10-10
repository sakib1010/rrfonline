<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>my Frist php Website</title>
</head>
<body>

		<?php
			$roll = 1;
  
		?>
	<h1>My roll number is <?php echo $roll;?></h1>
	<?php
		$roll = 6;
		echo'<h2>My roll number is '.$roll.'</h2>'
	?>
	
		<?php 
		  $city ='Dhaka or rajshahi';
		?>
		<h1>Two most beautyfull city is <?php echo $city;?></h1>
		<?php 
		  $city = 'Dhaka or Rajshahi';
		  echo'<h2>Two most beautyfull city is '.$city.' </h2>'
		?>
		
		
<?php 
	$beautyfull = 'Rajshahi';
	$cities = array('Dhaka','Mymensingh','Rangpur','Barishal');
 
?>		
	<?php if($beautyfull == 'Dhaka'):?>
	<h1>Most beautyfull city is Dhaka</h1>
	<?php else :?>
	 <h1>We don't know</h1>	
	<?php endif;?>	
	
	
	<?php
		if($beautyfull== 'Rajshahi'){
			echo'<h2>Most beautyfull city is '.$beautyfull.'</h2>'; 
		} else{
			echo'<h2>We don\'t know</h2>';
		}
		
		echo '<h3> Second city is '.$cities[1].'</h3>';
		
		
		if($cities[1]== 'Dhaka'){
			echo '<h1>Frist ity is '.$cities[0].'</h1>';
		}else{
		 echo'<h1>Third city is '.$cities[2].'</h1>';	
		}
	
	?>	
		
		

   
		
		
		
		
		
		
		
		
		
		
		
		
	
</body>
</html>