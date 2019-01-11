import json
import sklearn.externals
from sklearn.externals import joblib
import pandas as pd

class Result(object):
	def __init__(self):
		open_datatest = json.load(open('datatest.json'))
		datatest = open_datatest["datatest"]
		datatest_csv = [datatest["age"], datatest["gender"], datatest["chest_pain"], datatest["blood_pressure"], datatest["colestrol"], datatest["blood_sugar"], datatest["resting_ecg"], datatest["heart_rate"], datatest["angina"], datatest["st_depression"], datatest["st_segment"], datatest["vessels_number"], datatest["thal"]]
		self.datatest_csv = self.datatest_csv.drop(["Column12","Column13"], axis=1)


	def getPrediction(self):
		model = joblib.load("model.joblib")
		prediction = model.predict([self.datatest_csv])
		return prediction
