<html>
<head>
	<title> The Human Brain </title>
</head>

<body>

<?php
	
	$lobe = $_POST["Lobe"];
	echo $lobe. " lobe";

	echo "<br/>";

	if ($lobe == "frontal") {

			echo "<center><img src= 'frontal.png' style = 'width:340px;height:228px;''></center>
				<br/>
				<br/>";

			echo "<p> - mainly responsible for higher mental thinking, decision making and planning <br/>
				- believed to be where our personality is formed <br/>
				- Frontal lobe is necessary to be able to speak fluently and meaningfully <br/>
				 </p>";
	}
	elseif ($lobe == "temporal") {
		echo "<center><img src= 'temporal.png' style = 'width:340px;height:228px;''></center>
				<br/>
				<br/>";

		echo "<p> - responsible for making us process auditory info from the ears <br/>
				- revolves around hearing and selective listening. Also is the key player for comprehension of meaningful speech <br/>
				- Responsble for making sens eof all the different sounds and pitches being transmitted from sensory receptors of the ears <br/>
				 </p>";

	}
	elseif ($lobe == "parietal") {
		echo "<center><img src= 'parietal.png' style = 'width:340px;height:228px;''></center>
				<br/>
				<br/>";

		echo "<p> - responsible for processing sensory info that has to do with taste, temperature, and touch <br/>
				- can process sensory info within seconds <br/>
				- information like taste, temperature and touch are integrated/processed. If damaged, we cannot feel touch <br/>
				 </p>";

	}
	elseif ($lobe == "occipital") {
		echo "<center><img src= 'occipital.png' style = 'width:340px;height:228px;''></center>
				<br/>
				<br/>";

		echo "<p> - responsible for processing visual information from the eyes <br/>
				- lobes are very fast and process info rapidly, similar to temporal lobes <br/>
				- if impaired or injured, we cannot process visual signals and would result in isual confusion <br/>
				 </p>";

	}
	else{
		echo "lobe not recognized";
	}

?>

</body>
</html>