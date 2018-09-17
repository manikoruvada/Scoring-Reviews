import nltk
import string
from nltk.corpus import stopwords
with open('data.txt','r') as inFile, open('stopwords_removal_for_new.txt','w') as outFile:
	for line in inFile.readlines():
	    print(" ".join([word for word in line.lower().translate(str.maketrans('', '', string.punctuation)).split() 
        	if len(word) >=4 and word not in stopwords.words('english')]), file=outFile)
