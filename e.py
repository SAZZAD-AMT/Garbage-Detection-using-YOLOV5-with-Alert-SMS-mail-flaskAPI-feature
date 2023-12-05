import os
from email.message import EmailMessage
import ssl
import smtplib

email_sender='2019-1-60-011@std.ewubd.edu'
email_password=os.environ.get("EMAIL_PASSWORD")
email_receiver= '2019-1-60-063@std.ewubd.edu'

subject = 'Garbage Detection'
body="""
HI i am sazzad
"""

em=EmailMessage()
em["From"]= email_sender
em["To"]=email_receiver
em["subject"]=subject
em.set_content(body)

context= ssl.create_default_context()
with smtplib.SMTP_SSL('smtp.gmail.com',465,context=context) as smtp:
    smtp.login(email_sender,email_password)
    smtp.sendmail(email_sender,email_receiver,em.as_string())