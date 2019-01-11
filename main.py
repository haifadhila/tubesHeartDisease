import csv
import json
import sklearn.externals
from sklearn.externals import joblib
import pandas as pd
from flask import Flask
from flask import render_template, url_for, request

app = Flask(__name__)

@app.route("/")
def web():
	return render_template('web.php')

@app.route("/result.php", methods=['GET', 'POST'])
def result():
	if request.method=='POST':
		age= request.form['age']
		gender = request.form['gender']
		chest_pain= request.form['chest_pain']
		blood_pressure= request.form['blood_pressure']
		colestrol= request.form['colestrol']
		blood_sugar= request.form['blood_sugar']
		resting_ecg= request.form['resting_ecg']
		heart_rate= request.form['heart_rate']
		angina= request.form['angina']
		st_depression= request.form['st_depression']
		st_segment= request.form['st_segment']
		vessels_number= request.form['vessels_number']
		thal= request.form['thal']
	open_datatest = json.load(open('datatest.json'))
	datatest = open_datatest["datatest"]
	datatest_csv = [age,gender,chest_pain,blood_pressure,colestrol,blood_sugar,resting_ecg,heart_rate,angina,st_depression]
	print(datatest_csv)
	# datatest_csv = datatest_csv.drop(["Column12","Column13"], axis=1)
	model = joblib.load("model.joblib")
	prediction = model.predict([datatest_csv])
	return render_template('result.php', value=prediction)

# @app.route("/predict")
# def predict():
# 	do_predict = Result()
# 	result = do_predict.getPrediction()
# 	return json.dumps(result)

if __name__ == "__main__":
	app.debug = True
	app.run()
	app.run(debug = True)