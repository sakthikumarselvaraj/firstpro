print("Content-Type : text/html")

import cgi
print("<h1>Example Page</h1>")
form = cgi.FieldStorage()
firstName = form.getvalue("inputFirstname")
lastName = form.getvalue("inputLastname")
email = form.getvalue("inputEmail4")
password = form.getvalue("inputPassword4")
Address = form.getvalue("inputAddress")
Address2 = form.getvalue("inputAddress2")
City = form.getvalue("inputCity")
State = form.getvalue("inputState")
Zip = form.getvalue("inputZip")

import mysql.connector
con = mysql.connector.connect( host = "localhost" , user = "root" , password = "" , database = "applicant")
cur = con.cursor()
cur.execute("INSERT INTO applicant VALUES ( %s, %s, %s, %s, %s, %s, %s, %s, %s )" , (firstName , lastName , email , password , Address , Address2 , City , State , Zip))
con.commit()

cur.close()
con.close()
print("<h2>Successfully Recorded!</h2>")