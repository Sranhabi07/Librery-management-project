# !C:\Users\LENOVO\Anaconda3
print("Content-Type:text/html")
print()
import cgi
print("<body bgcolor='red'>")

form=cgi.FieldStorage()
email=form.getvalue("email")
password=form.getvalue("password")

import mysql.connector
con=mysql.connector.connect(user='root',password='',host='localhost',database='login data')
cur=con.corsor()

cur.execute("insert into 1 value(%s,%s),(email,password")
con.commit()

cur.close()
cor.close()
print("<h3>record inserted successfully</h3>")
