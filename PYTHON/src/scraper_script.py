def scrap_URL(tableau_recettes):
    from recipe_scrapers import scrape_me

    str_recettes=""
    i=0
    #pour chaque sous-liste de recettes
    for elmt in tableau_recettes:
        #on parcourt les liens de la sous-liste pour récuprer les ingrédients
        for url in elmt:
            scraper=scrape_me(url)
            ingredients=scraper.ingredients()
            i=i+1
            #on écrit dans un document chaque ingrédient de la liste d'ingrédients récupérée
            for ingredient in ingredients:
                str_recettes=str_recettes+ingredient+"\n"
    #print("("+str(i),"listes d'ingrédients recuperées)</br>")
    return str_recettes
        # str_recettes=str_recettes+"\n\n"
    
    # with open("test.txt","w") as t:
    #     t.write(str_recettes)