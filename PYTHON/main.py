from src.selenium_script import recup_URL
from src.scraper_script import scrap_URL
from src.scikit_script import VHector
import time
import sys

# text=sys.argv[1]
text="tarte à la fraise"


t0=time.time()

#print("\"La liste d'ingredients minimale pour : "+text+"</br></br>")

# test pour savoir si un tableau a été retourné par PHP. Si erreur IndexError alors aucune case n'a été cochée
# try:
#     if len(sys.argv[2])>0:
#         link = recup_URL(text,resultats_checkbox=sys.argv[2])
# except IndexError:
#     link = recup_URL(text)

link = recup_URL(text)

t1=time.time()
#print("</br>la recup des url a pris :",t1-t0,"sec</br>")

ingr = scrap_URL(link)

t2= time.time()
#print("</br>la recup des recettes a pris :",t2-t1,"sec<br/>")

VHector(ingr)


t3=time.time()
# print("</br>vecteurs :",t3-t2,"sec <br/>")
# print("</br>temps du traitement total de la requete :", t3-t0,"sec\"</br>")

#TODO : voir ce qu'on fait du site de l'atelier des chefs
#TODO : lemmatiser l'entrée du vecteur pour une meilleure précision (exp. polylexicales...)
