Projet Symfony 2023 (Twittor)

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

Cette application est faite avec le framework php, symfony
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

Ensuite rendez vous dans un terminal Powershell puis placer vous dans le dossier ou se trouve le projet, ensuite faites les commandes :

symfony server:start

Puis rendez vous dans l'adresse locale indiqué par votre navigateur.Ajouter l'extension /login à cette adresse puis connecter vous avec l'adresse mail test.test@gmail.com et le mot de passe:test123 (identifiants de test) pour pouvoir vous connecter.


# Fonctionnalitées Disponibles pour le moment :

-Connexion/Deconnexion
-Affichage des messages
-Affichages des infos de l'utilisateur

