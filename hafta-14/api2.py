from flask import Flask
from flask_cors import CORS
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)
CORS(app, origins="*")


liste = []

class TodoEkle(Resource):
    def get(self, todo):
        liste.append(todo)
        return {'sonuc': 'başarıyla eklendi'}

class TodoListesi(Resource):
    def get(self):
        return {'liste': liste}

api.add_resource(TodoEkle, '/ekle/<string:todo>')
api.add_resource(TodoListesi, '/liste','/')



if __name__ == '__main__':
    app.run(debug=True)