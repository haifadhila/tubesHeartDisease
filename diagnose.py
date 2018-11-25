import pandas as pd
import numpy as np
import graphviz
import pickle
import matplotlib.pyplot as plt
from matplotlib.colors import ListedColormap
import itertools
import random
import sklearn.exceptions
import warnings
warnings.filterwarnings("ignore", category=sklearn.exceptions.UndefinedMetricWarning)

from sklearn.datasets import load_iris 
from sklearn.model_selection import train_test_split, KFold
from sklearn.naive_bayes import GaussianNB
from sklearn.tree import DecisionTreeClassifier, export_graphviz
from sklearn.neighbors import KNeighborsClassifier
from sklearn.neural_network import MLPClassifier 
from sklearn.metrics import accuracy_score, precision_score, recall_score, confusion_matrix
from sklearn import neighbors, datasets