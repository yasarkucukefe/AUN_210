# https://flask.palletsprojects.com/en/3.0.x/quickstart
# pip install flask (eğer kurulu değilse)


from flask import Flask

app = Flask(__name__)

@app.route("/")
def hello_world():
    return "<p>Merhaba Flask</p>"

# flask --app api run