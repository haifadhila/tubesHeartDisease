<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"><link rel="stylesheet" type="text/css" href="static/style.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />

		<h1 class="title"> Heart Disease Classification </h1>
	</head>

	<body class = a>
	<div align='center'>
		<form action="result.php" method="post" id="form_input" onsubmit='return validateForm()'>
			<table>
				<tr>
					<td> <label> Age </label></td>
					<td> <input name='age' class="short_input" id='age'> </td>
				</tr>
				<tr>
					<td> <label> Gender </label></td>
					<td> <label> <input type="radio" class = "radio_button" name="gender" value="1" checked>  Male </label> <label> <input type="radio" class = "radio_button" name="gender" value="0"> Female  </label> </td>
				</tr>
				<tr>
					<td> <label> Chest Pain Type </label></td>
					<td>
						<label><input type="radio" class = "radio_button" name="chest_pain" value="1" checked> Typical Angina</label> <br>
						<label><input type="radio" class = "radio_button" name="chest_pain" value="2"> Atypical Angina</label> <br>
						<label><input type="radio" class = "radio_button" name="chest_pain" value="3"> Non-Anginal Pain </label> <br>
						<label><input type="radio" class = "radio_button" name="chest_pain" value="4"> Asymptotic</label>
					</td>
				</tr>
				<tr>
					<td> <label> Resting Blood Pressure </label> </td>
					<td> <label> <input name='blood_pressure' class="short_input" id= 'blood_pressure'>  mmHg</label></td>
				</tr>
				<tr>
					<td> <label> Serum Colestrol </label> </td>
					<td> <label> <input name='colestrol' class="short_input" id= 'colestrol'>  mg/dl</label></td>
				</tr>
				<tr>
					<td> <label> Fasting Blood Sugar <br> Level > 120 mg/dl</label></td>
					<td>
						<label> <input type="radio" class = "radio_button" name="blood_sugar" value="0" checked>  False </label> <br>
						<label> <input type="radio" class = "radio_button" name="blood_sugar" value="1"> True  </label>
					</td>
				</tr>
				<tr>
					<td> <label> Resting ECG </label></td>
					<td>
						<label><input type="radio" class = "radio_button" name="resting_ecg" value="0" checked> Normal </label> <br>
						<label><input type="radio" class = "radio_button" name="resting_ecg" value="1"> Having ST-T Wave Abnormality </label> <br>
						<label><input type="radio" class = "radio_button" name="resting_ecg" value="2"> Left Ventricular Hyperthrophy </label> <br>
					</td>
				</tr>
				<tr>
					<td> <label> Maximum Heart Rate Achieved </label></td>
					<td> <input name='heart_rate' class="short_input" id='heart_rate'> </td>
				</tr>
				<tr>
					<td> <label> Exercise Induced Angina</label></td>
					<td>
						<label> <input type="radio" class = "radio_button" name="angina" value="0" checked>  No </label> <br>
						<label> <input type="radio" class = "radio_button" name="angina" value="1"> Yes  </label>
					</td>
				</tr>
				<tr>
					<td> <label> ST Depression Induced by <br> Exercise Relative to Rest </label></td>
					<td> <input name='st_depression' class="short_input" id='st_depression'> </td>
				</tr>
				<tr>
					<td> <label> Peak Exercise ST Segment </label></td>
					<td>
						<label><input type="radio" class = "radio_button" name="st_segment" value="1" checked> Upsloping </label> <br>
						<label><input type="radio" class = "radio_button" name="st_segment" value="2"> Flat </label> <br>
						<label><input type="radio" class = "radio_button" name="st_segment" value="3"> Downsloping </label>
					</td>
				</tr>
				<tr>
					<td> <label> Number of Major Vessels <br> Colored by Flourosopy </label></td>
					<td>
						<label><input type="radio" class = "radio_button" name="vessels_number" value="0" checked> 0 </label> <br>
						<label><input type="radio" class = "radio_button" name="vessels_number" value="1"> 1 </label> <br>
						<label><input type="radio" class = "radio_button" name="vessels_number" value="2"> 2 </label> <br>
						<label><input type="radio" class = "radio_button" name="vessels_number" value="3"> 3 </label>
					</td>
				</tr>
				<tr>
					<td> <label> Thal </label></td>
					<td>
						<label><input type="radio" class = "radio_button" name="thal" value="3" checked> Normal </label> <br>
						<label><input type="radio" class = "radio_button" name="thal" value="6"> Fixed Defect </label> <br>
						<label><input type="radio" class = "radio_button" name="thal" value="7"> Reversable Defect </label>
					</td>
				</tr>
			</table>

			<br>
    		<input type='submit' class='submit_button' >
		</form>
	</div>

	<script type="text/javascript">
		function validateForm() {
			val_age = document.getElementById('age').value;
			val_blood = document.getElementById('blood_pressure').value;
			val_colestrol = document.getElementById('colestrol').value;
			val_heart = document.getElementById('heart_rate').value;
			val_st = document.getElementById('st_depression').value;

			if (val_st == '' || val_heart == '' || val_colestrol == '' || val_blood == '' || val_age == '') {
				alert("Please fill all the fields.");
				return false;
			} else {
				return true;
			}
		}		
	</script>

	</body>


</html>
