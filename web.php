<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"><link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />

		<h1 class="title"> Heart Disease Classification </h1>
	</head>

	<body>
	<div align='center'>
		<form action='result.php' method='post' id="form_input">
			<table>
				<tr>
					<td> <label> Age </label></td>
					<td> <input name='age' class="short_input"> </td>
				</tr>
				<tr>
					<td> <label> Sex </label></td>
					<td> <label> <input type="radio" class = "radio_button" name="gender" value="1">  Male </label> <label> <input type="radio" class = "radio_button" name="gender" value="2"> Female  </label> </td>
				</tr>
				<tr>
					<td> <label> Chest Pain Type </label></td>
					<td> 
						<label><input type="radio" class = "radio_button" name="chest_pain" value="1"> Typical Angina</label> <br>
						<label><input type="radio" class = "radio_button" name="chest_pain" value="2"> Atypical Angina</label> <br>
						<label><input type="radio" class = "radio_button" name="chest_pain" value="3"> Non-Anginal Pain </label> <br>
						<label><input type="radio" class = "radio_button" name="chest_pain" value="4"> Asymptotic</label>
					</td>
				</tr>
				<tr>
					<td> <label> Resting Blood Pressure </label> </td>
					<td> <label> <input name='blood_pressure' class="short_input">  mmHg</label></td>
				</tr>
				<tr>
					<td> <label> Serum Colestrol </label> </td>
					<td> <label> <input name='colestrol' class="short_input">  mg/dl</label></td>
				</tr>
				<tr>
					<td> <label> Fasting Blood Sugar <br> Level > 120 mg/dl</label></td>
					<td> 
						<label> <input type="radio" class = "radio_button" name="blood_sugar" value="0">  False </label> <br>
						<label> <input type="radio" class = "radio_button" name="blood_sugar" value="1"> True  </label>
					</td>
				</tr>
				<tr>
					<td> <label> Resting ECG </label></td>
					<td> 
						<label><input type="radio" class = "radio_button" name="chest_pain" value="0"> Normal </label> <br>
						<label><input type="radio" class = "radio_button" name="chest_pain" value="1"> Having ST-T Wave Abnormality </label> <br>
						<label><input type="radio" class = "radio_button" name="chest_pain" value="2"> Left Ventricular Hyperthrophy </label> <br>
					</td>
				</tr>
				<tr>
					<td> <label> Maximum Heart Rate Achieved </label></td>
					<td> <input name='heart_rate' class="short_input"> </td>
				</tr>
				<tr>
					<td> <label> Exercise Induced Angina</label></td>
					<td> 
						<label> <input type="radio" class = "radio_button" name="angina" value="0">  No </label> <br>
						<label> <input type="radio" class = "radio_button" name="angina" value="1"> Yes  </label>
					</td>
				</tr>
				<tr>
					<td> <label> ST Depression Induced by <br> Exercise Relative to Rest </label></td>
					<td> <input name='st_depression' class="short_input"> </td>
				</tr>
				<tr>
					<td> <label> Peak Exercise ST Segment </label></td>
					<td> 
						<label><input type="radio" class = "radio_button" name="st_segment" value="1"> Upsloping </label> <br>
						<label><input type="radio" class = "radio_button" name="st_segment" value="2"> Flat </label> <br>
						<label><input type="radio" class = "radio_button" name="st_segment" value="3"> Downsloping </label>
					</td>
				</tr>
				<tr>
					<td> <label> Number of Major Vessels <br> Colored by Flourosopy </label></td>
					<td> 
						<label><input type="radio" class = "radio_button" name="vessels_number" value="0"> 0 </label> <br>
						<label><input type="radio" class = "radio_button" name="vessels_number" value="1"> 1 </label> <br>
						<label><input type="radio" class = "radio_button" name="vessels_number" value="2"> 2 </label> <br>
						<label><input type="radio" class = "radio_button" name="vessels_number" value="3"> 3 </label>
					</td>
				</tr>
				<tr>
					<td> <label> Thal </label></td>
					<td> 
						<label><input type="radio" class = "radio_button" name="thal" value="3"> Normal </label> <br>
						<label><input type="radio" class = "radio_button" name="thal" value="6"> Fixed Defect </label> <br>
						<label><input type="radio" class = "radio_button" name="thal" value="7"> Reversable Defect </label>
					</td>
				</tr>
			</table>

			<br>
    		<input type='submit' class='submit_button'>
		</form>
	</div>

	</body>


</html>