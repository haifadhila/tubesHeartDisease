import json
if __name__ == '__main__':
	test = 3
	with open('cobaaaa.json', 'w') as outfile:
		json.dump(test, outfile)