def recup_URL(mots_cles,resultats_checkbox=[]):
    """
    Récupère les URL2 des 5 sites prévus pour l'application avec Selenium à partir des mots-clés du site
        > construit l'URL2 de recherche pour chaque site
        > va récupérer 10 URL2 sur chaque recherche
    
    Sortie : fichier (?) avec les 50 recettes
    """

    #appel de Selenium et mise en place des paramètres nécessaires pour le driver
    from selenium import webdriver
    from shutil import which                                    #permet d'appeler le module driver du browser
    from selenium.webdriver.firefox.options import Options      #permet d'activer ou désactiver headless
    from selenium.webdriver.common.keys import Keys             #import du module qui émule les touches de clavier
    from selenium.webdriver.common.by import By

    option=Options()
    option.add_argument("--headless")                                      #False = on voit le navigateur en action
    driver="C:\\xampp\\htdocs\\v1.0\\PYTHON\\src\\geckodriver.exe"                            #instanciation du navigateur

    #configuration rapide du navigateur (facilite des choses plus tard)
    browser=webdriver.Firefox(executable_path=driver, options=option)
    ublock="C:\\xampp\\htdocs\\v1.0\\PYTHON\\src\\ublock.xpi"
    i_dont_care_about_cookies="C:\\xampp\\htdocs\\v1.0\\PYTHON\\src\\idc.xpi"
    browser.install_addon(ublock)
    browser.install_addon(i_dont_care_about_cookies)

    
    URL_recherche=["https://www.750g.com/recherche/?q=",
                   "https://www.hellofresh.fr/recipes/search?q=",
                   "https://www.marmiton.org/recettes/recherche.aspx?aqt=",
                   "https://www.cuisineaz.com/recettes/recherche_terme.aspx?recherche=",
                   "https://www.atelierdeschefs.fr/fr/recherche?type_recherche=recettes&k%5B%5D="]

    CLASS_NAME_dic=[
        "card-link",
        "web-crigfp",
        "MRTN__sc-1gofnyi-2.gACiYG",
        "txtgrey",
        "recipe-name",
    ]

    url_custom=[]
    CLASS_NAME_custom=[]
    checkbox_flag=False
    if len(resultats_checkbox)>0:
        for i in range(0,5):
            if str(i) in resultats_checkbox:
                url_custom.append(URL_recherche[i])
                CLASS_NAME_custom.append(CLASS_NAME_dic[i])
                checkbox_flag=True

    recettes=[]

    #TODO voir si c'est pas plus pratique avec ".isalpha()"
    mots_cles_tok=""
    for lettre in mots_cles:
        if lettre != " ":
            mots_cles_tok=mots_cles_tok+lettre
        elif lettre==" ":
            mots_cles_tok=mots_cles_tok+"+"
    # print("\n\nmots clés tokenisés\n\n",mots_cles_tok)

    if not checkbox_flag:
        for i in range(len(URL_recherche)):
            """
            Construit chaque URL de recherche de chaque site à partir d'un morceau d'URL (URL_recherche)+ mots clés
            Accès à cette URL
            Récupère les éléments HTML qui contiennent les URLs des pages de recettes individuelles (via CLASS_NAME_dic[i])
            Récupère les href de chaque objet et les stocke dans un tableau de 10 elmts au sein d'un macro-tableau 

            Sortie :
            Recettes=[
                [URL recette 1, URL recette 2,..., URL recette 10], > 750g
                [URL recette 1, URL recette 2,..., URL recette 10], > HelloFresh
                [URL recette 1, URL recette 2,..., URL recette 10], > Marmiton
                [URL recette 1, URL recette 2,..., URL recette 10], > CuisineAZ
                [URL recette 1, URL recette 2,..., URL recette 10]  > AtelierDesChefs
            ]
            """
            URL2=URL_recherche[i]+mots_cles_tok

            browser.get(URL2)
            browser.implicitly_wait(10)
            URL=browser.find_elements(By.CLASS_NAME, CLASS_NAME_dic[i])
            recettes.append([elmt.get_attribute("href") for elmt in URL[:10]])
    else:
        for i in range(len(url_custom)):

            URL2=url_custom[i]+mots_cles_tok

            browser.get(URL2)
            browser.implicitly_wait(10)
            URL=browser.find_elements(By.CLASS_NAME, CLASS_NAME_custom[i])
            recettes.append([elmt.get_attribute("href") for elmt in URL[:10]])


      
    browser.close()

    #parcourir le tableau pour savoir cb d'URL on été scrapées (normalement 50)
    nbr_url=0
    for e in recettes:
        nbr_url=nbr_url+len(e)
    print(nbr_url,"url ont été scrap")

    return recettes #nbr_url

# print(recup_URL("crepe"))