# Sujet : Téléversement de fichier vers un dossier
## Consigne
La consigne pour ce projet est de mettre en place un formulaire basique permettant de conserver des fichiers dans un dossier et les afficher à travers une base de données, en réemployant le concept de pagination du premier tp : https://github.com/Marie-P/tp1_techno_web

## Langages
J'ai implémenter le code en utilisant PHP, HTML et CSC.

## Base de données
J'ai utilisé comme système de gestion de base de données mysql.

## Utilisation
#### Attention pour éviter des erreurs :
* Utilier mysql comme base de données !
* Pour lancer le programme par le biais de docker, vérifier que les ports 3306 et 8899 sont bien libre !

#### Mise en place du server mysql et phpmyadmin avec docker
* Installer docker en lançant ./installDocker.sh
* lancer mysql et phpmyadmin avec la commande ./setDocketEnv.sh

#### Mise en place de la base de donnée avec phpmyadmin
* (avec docker) ouvrir dans le navigateur http://localhost:8899/ (sinon) ouvir le phpmyadmin de la machine
* Dans la partie serveur, entrer l'adresse ip (par exemple avec la commande ifconfig docker0 ou ifconfig en0). Exemple ici avec adresse = 111.11.0.1.
   * Serveur : 111.11.0.1:3306
   * Utilisateur : root
   * Mot de passe : my-secret-pw
   * Créer une nouvelle base de données "imagesData"
<img src="utils/pourReadMe/creation.png" />


   * Importer la base de données imageData.sql dans phpmyadmin.
<img src="utils/pourReadMe/importer.png" />
   * exécuter le programme : php -S localhost:8000

## Exemple d'utilisation
<img src="utils/pourReadMe/capturesEcran/capture1.png" />
<img src="utils/pourReadMe/capturesEcran/capture2.png" />
<img src="utils/pourReadMe/capturesEcran/capture3.png" />
<img src="utils/pourReadMe/capturesEcran/capture4.png" />
