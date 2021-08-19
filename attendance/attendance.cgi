#! /usr/bin/env python3

print('Content-type: text/html\n')

import MySQLdb, cgi

string = ''
password = ''

db_con = MySQLdb.connect(host='',port = 3306, user = string, passwd = password, db = string)

cursor = db_con.cursor()

form = cgi.FieldStorage()
name = form.getfirst('name','formerror')
ao = form.getfirst('ao','0000')
validation = form.getfirst('validation','formerror')

### CHANGE VALIDATION CODE here ###
if validation == 'steep':

    try:
        SQL = "INSERT INTO attendance (Name, AO, ChapterID) values("
        SQL += "'"+name+"',"
        SQL += "'"+ao+"',"

        ### CHANGE ChapterID here ###
        SQL += "'ID-Chapter02'"
        
        SQL += ");"
        cursor.execute(SQL)
        db_con.commit()
    except Exception as e:
        print('<p>Something went wrong with the SQL!</p>')
        print(SQL, 'Error:', e)
    else:
        print("Your attendance has been recorded.<br><br><p><a href='index.php'>Go Back</a></p>")
	

else:
    print("Incorrect validation code. Please try again.")
    print("<br><br><p><a href='attendance.php'>Go Back</a></p>")




