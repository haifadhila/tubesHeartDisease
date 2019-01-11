<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8"><link rel="stylesheet" type="text/css" href="static/style.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
</head>


<?php
	$datatest = array();
	$datatest = array('age' => $_POST['age'],
						'gender' => $_POST['gender'],
						'chest_pain' => $_POST['chest_pain'],
						'blood_pressure' => $_POST['blood_pressure'],
						'colestrol' => $_POST['colestrol'],
						'blood_sugar' => $_POST['blood_sugar'],
						'resting_ecg' => $_POST['resting_ecg'],
						'heart_rate' => $_POST['heart_rate'],
						'angina' => $_POST['angina'],
						'st_depression' => $_POST['st_depression'],
						'st_segment' => $_POST['st_segment'],
						'vessels_number' => $_POST['vessels_number'],
						'thal' => $_POST['thal']
					);
	var_dump(datatest);
	$response['datatest'] = $datatest;
	$fp = fopen('datatest.json', 'w');
	fwrite($fp, json_encode($response));
	fclose($fp);	
?>
	
	<h1 class='resultno' id='resultno'></h1>
	<h1 class='resultyes' id='resultyes'></h1>



<script>
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
                  var predict = JSON.load("result.json");
                  var out;
                  if (predict=== 0) {
                  	out = "You're not diagnosed with heart disease.";
                  	document.getElementById("resultno").innerHTML = out;
                  } else {
                  	out = "Sorry, you're diagnosed with heart disease level " + predict;
                  	document.getElementById("resultyes").innerHTML = out;
                  }
			}
	xmlhttp.send();
</script>

