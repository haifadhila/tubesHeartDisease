import csv
import json
import sklearn.externals
from sklearn.externals import joblib
import pandas as pd

if __name__ == "__main__":
	open_datatest = json.load(open('datatest.json'))
	datatest = open_datatest["datatest"]

	add_csv = [datatest["age"], datatest["gender"], datatest["chest_pain"], datatest["blood_pressure"], datatest["colestrol"], datatest["blood_sugar"], datatest["resting_ecg"], datatest["heart_rate"], datatest["angina"], datatest["st_depression"], datatest["st_segment"], datatest["vessels_number"], datatest["thal"]]
	with open ('tubes2_HeartDisease_test.csv', 'a') as f:
		writer = csv.writer(f)
		writer.writerow(add_csv)

	model = joblib.load("model.joblib")
	test_data = pd.read_csv(r'tubes2_HeartDisease_test.csv')
	test_data.replace({'?' : None, 'None' : None}, inplace=True)
	test_data['Column4'].fillna(value = test_data['Column4'].median(),inplace=True)
	test_data['Column5'].fillna(value = test_data['Column5'].median(),inplace=True)
	test_data['Column6'].fillna(value = test_data['Column6'].mode()[0],inplace=True)
	test_data['Column7'].fillna(value = test_data['Column7'].mode()[0],inplace=True)
	test_data['Column8'].fillna(value = test_data['Column8'].median(),inplace=True)
	test_data['Column9'].fillna(value = test_data['Column9'].mode()[0],inplace=True)
	test_data['Column10'].fillna(value = test_data['Column10'].median(),inplace=True)
	test_data['Column11'].fillna(value = test_data['Column11'].mode()[0],inplace=True)
	test_data_X = test_data.drop(["Column12","Column13"], axis=1)

	prediction = model.predict(test_data_X)
	count=0;
	for pre in prediction:
		count+=1
	print(prediction[count-1])
