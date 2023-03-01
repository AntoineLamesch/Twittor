-----------------------------------------------------------Projet Symfony 2023-----------------------------------------------

Membres du groupe : 

Medi Lupini
Guillaume Duquesne
Antoine Lamesch


Ce projet consiste à reproduire une application reproduisant le fonctionnement de Twitter : Flux, où des utilisateurs peuvent déposer des messages avec si possible un image
upload.

#Nom
le nom du projet ou de l'application s'appelle TWITTOR ,

# DESCRIPTION 
# ENVIRONNEMENT 

c'est application est faite avec le framework symfony du php 
Symfony est un ensemble de composants PHP ainsi qu'un framework MVC libre écrit en PHP. Il fournit des fonctionnalités modulables et adaptables qui permettent de faciliter et d’accélérer le développement d'un site web pour plus de details : https://fr.wikipedia.org/wiki/Symfony

elle utilise aussi wampServer pour gérer les scripts php et la base de données https://fr.wikipedia.org/wiki/WampServer 

elle utilise aussi Boostrap qui est une collection d'outils utiles à la création du design (graphisme, animation et interactions avec la page dans le navigateur, etc.) de sites et d'applications web. C'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, outils de navigation et autres éléments interactifs, ainsi que des extensions JavaScript en option. C'est l'un des projets les plus populaires sur la plate-forme de gestion de développement GitHub https://getbootstrap.com/

# INSTALLATION 

Donc vous devez au préalable avoir installer symfony dans votre ordinateur , lien pour suivre la documentation https://symfony.com/doc/current/index.html

Avoir installer aussi WampServer ou Xampp une plateforme de développement Web de type  permettant de faire fonctionner localement (sans avoir à se connecter à un serveur externe) des scripts PHP. pour plus de details https://fr.wikipedia.org/wiki/WampServer ou 
documentation pour l'installer https://www.wampserver.com/en/download-wampserver-64bits/ ou xampp https://www.apachefriends.org/download.html

il faut donc aussi installer bootstrap (webpack) pour pouvoir utiliser les fonctionnalités de bootstrap, voir les la doc https://getbootstrap.com/docs/5.3/getting-started/webpack/

# Fonctionnalités 

cette application a presque les mêmes fonctionnalités que twitter  https://twitter.com/
vous pouvez vous s'authentifier, envoyer et poster des messages (twitte)
avec un model MvC:
Un modèle (Model) contient les données à afficher ;
Une vue (View) contient la présentation de l'interface graphique ;
Un contrôleur (Controller) contient la logique concernant les actions effectuées par l'utilisateur et dans ce project il ya Deux controller 

# LANCEMENT DU PROJECT 

Vous devez d'abord lancez votre serveur Apache(xampp) pour ceux qu'utilise xampp et WampServer pour les autres , enfin de bien géré la base des donnees et les scripts php
utilisez un terminal pour vous y connecter. Executez composer self-update (mise à jour de Composer) et procéder à l'installation du projet (git clone https://github.com/AntoineLamesch/Twittor.git .) et à la mise à jour de ses dépendances (toujours avec Composer, composer update, à la racine du projet).

N'oubliez pas d'initialiser la base de données et son contenu. Pour ce faire, executer les commandes suivantes :

php bin/console make:migration : prépare la migration des données
php bin/console doctrine:migrations:migrate : rend effectifs les modifications en base de données
php bin/console doctrine:fixtures:load : injecte les "fixtures", c'est à dire les données par défaut, en base de données

Puis enfin, accédez au projet Symfony par l'intermédiaire de votre navigateur, dans la racine de votre project faites symfony server:start
puis récupérer l'URL en et saisisez le sur votre navigateur 


# Consigne de réalisation
En vous basant sur le code proposé, vous proposerez l'enrichissement d'interface de l'outil. Il vous faudra donc :

ajouter Bootstrap au projet, de la manière la plus adaptée
personnaliser en CSS et en Javascript (parte JS optionnelle) la totalité des pages du site internet
gérer aux mieux vos assets (fichiers CSS, JS, images, ....)

