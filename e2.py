from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import smtplib

fro='sazzad01794@gmail.com'
to='2019-1-60-063@std.ewubd.edu'
pas='tor pass des'

message= MIMEMultipart()
message["from"]= fro
message["to"]= to
message["subject"]="Garbage Detected"
message.attach(MIMEText("Body"))

with smtplib.SMTP(host="smtp.gmail.com",port=587) as smtp:
    smtp.ehlo()
    smtp.starttls()
    smtp.login(to,pas)
    smtp.send_message(message)
    print("sent...")