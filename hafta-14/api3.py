# pip install -U Flask
from flask import Flask
import numpy as np
import random
import io
from flask import Response
from matplotlib.backends.backend_agg import FigureCanvasAgg as FigureCanvas
from matplotlib.figure import Figure

app = Flask(__name__)

@app.route('/plot.png')
def plot_png():
    fig = create_figure()
    output = io.BytesIO()
    FigureCanvas(fig).print_png(output)
    return Response(output.getvalue(), mimetype='image/png')

def create_figure():
    fig = Figure()
    axis = fig.add_subplot(1,1,1)
    xs = np.linspace(0,10,100)
    ys = np.sin(xs)
    axis.plot(xs, ys)
    return fig

@app.route("/")
def merhaba():
    return "<p>Merhaba Flask</p>"

@app.route("/dersler")
def hesaplar():
    return "<ul><li>Sunucu taraflı programlama</li><li>Veri tabanı uygulamaları</li></ul>"

@app.route("/dersler/<ders_kodu>")
def goster_ders_bilgileri(ders_kodu):
    return f'{ders_kodu} kodlu ders hakkında bilgiler: .....'

@app.route("/random")
def rasgele_rakam():
    rakam = random.random()
    return f'Rasgele bir rakam: {rakam}'

if __name__ == '__main__':
    app.run(debug=True)