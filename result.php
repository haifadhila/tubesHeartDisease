<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8"><link rel="stylesheet" type="text/css" href="style.css">
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
	$response['datatest'] = $datatest;
	$fp = fopen('datatest.json', 'w');
	fwrite($fp, json_encode($response));
	fclose($fp);

	$command = escapeshellcmd('main.py');
	$output = shell_exec($command);
	if ($output == 0) {
		$statement1 = "You're not diagnosed with heart disease.";
		echo "<h1 class='resultno'>" . $statement1 . "</h1>";
	} else {
		$statement2 = "Sorry, you're diagnosed with heart disease level " . $output . ".";
		echo "<h1 class='resultyes'>" . $statement2 . "</h1>";
	}
	
?>

