import numpy as np
import matplotlib.pyplot as plt
from matplotlib.backends.backend_agg import FigureCanvasAgg as FigureCanvas
from matplotlib.figure import Figure


xs = np.linspace(0,10,100)
ys = np.sin(xs)
plt.plot(xs,ys)
plt.show()