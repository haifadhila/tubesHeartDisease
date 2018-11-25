import csv
import json

if __name__ == "__main__":
	open_datatest = json.load(open('datatest.json'))
	datatest = open_datatest["datatest"]
	print(datatest["age"])

	add_csv = [datatest["age"], datatest["gender"], datatest["chest_pain"], datatest["blood_pressure"], datatest["colestrol"], datatest["blood_sugar"], datatest["resting_ecg"], datatest["heart_rate"], datatest["angina"], datatest["st_depression"], datatest["st_segment"], datatest["vessels_number"], datatest["thal"]]
	with open (r'tubes2_HeartDisease_test.csv', 'a') as f:
		writer = csv.writer(f)
		writer.writerow(add_csv)
