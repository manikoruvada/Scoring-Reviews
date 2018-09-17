import nltk
import string
from nltk.corpus import stopwords
with open('data.txt','r') as inFile, open('new_token.txt','w') as outFile:
	for line in inFile.readlines():
	    print(" ".join([word for word in line.lower().translate(str.maketrans('', '', string.punctuation)).split()]), file=outFile)
