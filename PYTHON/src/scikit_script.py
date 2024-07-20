def VHector(text):

    from sklearn.feature_extraction.text import CountVectorizer
    import pandas as pd
    from random import randint
    vectorizer = CountVectorizer(input=[text],stop_words=["de","cl","en"], min_df=0.8) #stop_words = mots à ne pas prendre en compte

    matrix = vectorizer.fit_transform([text])
    counts = pd.DataFrame(matrix.toarray(),
                        columns=vectorizer.get_feature_names_out())
    Counts=counts.T.sort_values(by=0, ascending=False)

    ingr_min=""
    for i in range(10):
        ingr_min=ingr_min+"</br>"+Counts.index[i]
    #print("</br>la liste des ingrédients minimaux :</br>"+ingr_min+"</br>")
    print(ingr_min)

    ingr_optionnel=""
    for i in range(5):
        ingr_optionnel=ingr_optionnel+" "+Counts.index[randint(10,len(Counts))]
    #print("</br>la liste des ingrédients optionnels :</br>"+ingr_optionnel+"</br>")
    print(ingr_optionnel)

    return ingr_min #ingr_optionnel

    #TODO : pouvoir extraire les lemmes que je veux (ratio apparition d'ingrédients/nb de recettes)
