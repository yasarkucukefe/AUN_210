from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)


liste = []

class HelloWorld(Resource):
    def get(self):
        return {'hello': 'world'}

class TodoListesi(Resource):
    def get(self):
        return {'liste': liste}

api.add_resource(HelloWorld, '/merhaba','/')
api.add_resource(TodoListesi, '/liste')



if __name__ == '__main__':
    app.run(debug=True)