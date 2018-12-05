from sklearn.datasets import fetch_20newsgroups
from sklearn.metrics import confusion_matrix
from sklearn.metrics import classification_report
import numpy as np
categories = ['alt.atheism','soc.religion.christian','comp.graphics', 'sci.med']
twenty_train =fetch_20newsgroups(subset='train',categories=categories,shuffle=True)
#print("twenty_train",twenty_train)
twenty_test = fetch_20newsgroups(subset='test',categories=categories,shuffle=True)
print(len(twenty_train.data))
print("-------------------------------")
print(len(twenty_test.data))
print("----------------------------------")
#print("target names",twenty_train.target_names)
#print("---------------------------------------")
print("\n ".join(twenty_train.data[0].split("\n")))
print("------------------------------------------")
print("tt",twenty_train.target[0])
print("--------------------------------")
from sklearn.feature_extraction.text import CountVectorizer
count_vect = CountVectorizer()
#print("count_vect",count_vect)
#print("---------------------------------")
X_train_tf = count_vect.fit_transform(twenty_train.data)
#print("X_train_tf",X_train_tf)
from sklearn.feature_extraction.text import TfidfTransformer
tfidf_transformer = TfidfTransformer()
print("tfidf_transformer",tfidf_transformer)
#print("-------------------------------")
X_train_tfidf = tfidf_transformer.fit_transform(X_train_tf)
#print("X_train_tfidf",X_train_tfidf)
X_train_tfidf.shape
from sklearn.naive_bayes import MultinomialNB
from sklearn.metrics import accuracy_score
from sklearn import metrics
mod = MultinomialNB()
print("mod",mod)
mod.fit(X_train_tfidf, twenty_train.target)
X_test_tf = count_vect.transform(twenty_test.data)
X_test_tfidf = tfidf_transformer.transform(X_test_tf)
predicted = mod.predict(X_test_tfidf)
print("Accuracy:", accuracy_score(twenty_test.target, predicted))
print("accu--------------------------------------------")
print(classification_report(twenty_test.target,predicted,target_names=twenty_test.target_names))
print("class------------------------------------------------------------")

print("confusion matrix is \n",metrics.confusion_matrix(twenty_test.target, predicted))
