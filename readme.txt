+-----------------------------------------------------+
|  SCRIPT Entierement Ecrit par Jean Charles MAMMANA  |
|            http://jcjcjcjc.free.fr                  |
+-----------------------------------------------------+



Installation :
Il suffit de placer tout les fichiers contenu dans l'archive ZIP a la racine de votre site!
Puis vous placez vos r�pertoires et fichiers dans le site.
IMPORTANT : Lisez ce fichier texte et le fichier de configuration avant de venir me poser des questions...


Configuration :
Vous pouvez modifier les param�tres dans le fichier'config.inc.php'
En cas de doutes vous pouvez laisser les param�tres par d�faut!
Chaque module ralenti l'ex�cution du script, veuillez voir avec votre h�bergeur (test� sur free sans aucun probl�mes, �a rame un peu beaucoup aux heures de pointe).
Vous pouvez rajouter des types de fichiers dans la base de donn�e de l'explorer, il faut �diter le fichier 'filelibrary.inc.php' (penser a rajouter les ic�nes dans le r�pertoire '.dirsys')




Historique :
Version 1.00 :
Explorateur de fichiers avec arbre d'arborescence, descripteur de fichier, reconnaissance de type.

Version 1.50 :
Insertion d'un module d�brayable permettant la visualisation des images de type jpg, bmp et gif avec prechargement automatis� de l'image suivante.

Version 2.05 : 
Module de gestion et cr�ation de vignettes uniquement avec le format jpg (restriction PHP).
Possibilit� de configurer la taille des vignettes ainsi que leur qualit� (affichage en 256couleur : restriction PHP)

Version 2.20 :
Module de lecture des Exif pour les JPG qui en contienne.
Correction de bug (encore).

Version 2.50 :
Cr�ation dans le module browser, de nouvelles options tel que l�adaptation de limage � la taille de l'�cran (comme sur winXP)
creation d'un slideshow en fullscreen :)
Apparition de nouveaux bug (et oui, sinon c�est pas dr�le)

Version 2.90 :
All�gement du code Html
Ajout du support multi langue partiel : support actuel : fran�ais, anglais, allemand
(Cherche traducteurs pour m'aider � ajouter de nouvelles langues)
Correction de bug.

Version 2.94 :
Passage du code html a la version 4
Gain d'adaptation en fonction de l'h�bergeur


Version 2.96
Apr�s une bonne 15aine de mails me demandant comment faire pour cacher le r�pertoire syst�me (z_system) de l�explorer, j�ai rajouter 4lignes de codes permettant de le cacher (voir fichier de configuration : config.inc.php)


Version 3.00
Vous me lavez tous demand� : je l'ai fait!!!
Possibilit� de skiner l�explorer : 3 jeux d'ic�nes : windowsXP, KDE aqua, KDE crystal.
Aller dans le fichier de configuration pour modifier le jeu des ic�nes.

Version 3.05
Ajout d'un 4em jeu ic�ne
Mode al�atoire des jeux d'ic�ne en fonction des jours de la semaine

Version 3.07
Il semblerai q'un probl�me de compatibilit� de charset (conversion ISO-8859-1 vers UTF-8) plante l�affichage des images (et du slideshow) avec certaine configuration de serveur (bug d�couvert sur apache 2).
Bref : bug corrig� :)

Version 3.08
Bah alors???
Il y a un �norme bug et personne ne me pr�vient???
Alalaa!! Bon, lorsque les registerglobal �taient � �on�, tout allait bien, mais lorsque elles �taient � �off�, plus rien marchait...
Bref, �a c'�tait avant ;)
selection (manuelle) de la fonction de creation des vignettes! (consulter config.inc.php pour plus dinformations)


Version 3.10
Correction de bug : compatibilit� sur certains hebergeurs
creation d'un systeme antipub pour certain hebergeur comme multimaninia, mais le resultat n'est pas garentis a 100%


Version 3.11
Correction de bug : compatibilit� sur certains hebergeurs
tiscali offrant une version de php dirons nous prehistorique, il a fallu adapter le code :)
maintenant ca marche meme chez les hebergeur dinosores :)

Version 4.00
Correction de bug de gestions des images et des vignettes
portabilit� du programme sur Mozilla!

Version 4.10
Correction dun bug apparut suite a la modification de la configuration de PHP!
des messages de WARNING informant quil y a des probleme apparraissaient sans pour autant modifier le comportement du programme.
les messages ne devraient desormais plus apparaitre!

Version 4.20
Correction de 2 bugs :
impossibilit� de nommer un repertoir avec le nom "0"
warning affich� quand on place le script a la racine d'un site!
ajout :
possibilit� de cacher les fichiers/repertoirs de la meme maniere que sur linux, en les faisant commencer par un point (.)

version 5.00
correction de lordre d'affichage (repertoir puis fichiers)
classement par ordre alphabetique.
affichage de la date de modification.
netoyage du code!
refonte de la structure phisique du programme.
module de verification de mise a jours.

version 5.00b
amelioration du gestionnaire de mise a jour!

version 5.10
correction de bug
ajout du support png

version 5.20
correction de bug : filtre de type de fichier par extensions
debut d'adaptation du code html en xhtml
suppression du module "antipub lycos" ;)
ajout d'un module d'information de lespace occup�/libre
correction d'un bug : affichage au demarrage en vignette
ajout d'un module de recherche de fichier

version 5.25
correction de bug : slideshow ok sur mozilla
correction de bug : retour a la 1ere image en fin de slideshow
correction de bug : possibilit� de modifier le root de lexploreur /!\ voir config.inc.php pour plus d'info

version 5.30
correction de bug : bug erreur 404 sur certains serveurs

version 5.35
correction de bug : bug erreur 404 sur certains serveurs (encore)

version 5.35b
correction de bug : encore le meme bug (il commence a m'enerver cuil�)

version 5.4
correction de bug : affichage centr� des vignettes sur IE
ajout : possibilit� de swapper entre les vignettes et la liste
ajout : 3 styles css configurable dans le fichier de config
ajout : zone html en dessous de l'arbre pour y mettre ce que vous voulez (voir fichier de config)
-- Je remercie blc29 (http://www.bbc-grc.com/) pour son travail sur les styles du script!--

version 5.50
ajout : gestionnaire de modules a acces libre/securis�!
/!\ : pour toutes les info, regardez les fichiers situ� dans le repertoir 'module'


version 5.50b
ajout : possibilit� d'activer ou non un module (editer le fichier correspondant au module)
bug : probleme d'affichage avec IE corrig�
bug : fautes d'orthographeuh

version 5.80
ajout : nouveaux modules
correction de bug : en tous genre!!!

version 5.85
ajout de 2 nouvelles options : 
- fleche retour
- autoresize pour laffichage des images!
correction dun petit probleme sur le module authentification

version 6.0
correction de l'affichage de notice
correction d'un bug de selection vignettes/liste
modification de la gestion des chemins ( a mort les chmod() )
/!\ il est maintenant impossible de definir un root inferieur a l'emplacement du script ( ../ )
insertion de l'atribut 'title' dans les tag <img>
mise en cache des vignettes!
correction dun bug d'affichage des vignettes
nouveaux modules
gestionnaire de camouflages de fichiers/repertoirs
/!\ voir fichier hide.php pour la liste des fichiers/dossiers cach�!
reecriture complete de l'arbre (pfiou)

version 6.00b
correction de warning
ajout d'un module : compteur de visites (merci XaV pour ce module)

version 6.10
Correction de bug :
- le module find ne cachait pas les fichiers cach� par le module hide!
- le module 'info et aide' disparaissait si le root etait different de '/'
mise a jours du compteur de visites (merci XaV pour ce module)
les modules admin n'apparaissent que lorsque on est logg�!
(dailleur merci a Xav pour toutes les mises a jours de cette version!)

version 6.20
- ajout de nouvelles icones 32*32px pour certains themes!
- insertion du module d'upload (merci a sanid pour son module)

version 6.20b
- correction d'une faille de securit� minime dans le module upload
- correction de bugs mineurs


version 6.21
- ouverture d'un site dedi� a l'explorer : http://jcjcjcjc.free.fr/
- suppression des modules non indispensable de l'archive
- correction d'un bug li� a la mise en cache des vignettes
- info : si un point noir apparait en bas a droite de chaque vignette 
	cest que la mise en cache n'est pas possible. veuillez soit la
	desactiver, soit verifier d'ou vien le probleme (consulter la faq)
- un nouveau theme


version 7.00 Alpha
Cette version est actuellement en phase de test! veuillez utiliser le forum pour signaler tout problemes ou bug!

- modification de l'algorithme de recherche de vignettes cache (accelleration fois 10)
- reecriture de la fonction de reecriture de chemin canonique (on peut maintenant definir un root n'importe o� (a condition qu'il soit visible par le serveur))
- possibilit� de demarrer l'explorer ailleur qu'a la racine en passant le chemin par url : http://monsite.com/explorer/index.php?0=mondossier&1=sousdossier
- gestion des frames amelior�
- verification du support des sessions au demarrage du script
- remplacement des include par include_once
- reecriture complete de la gestion des images
- reecriture du code javascript
- fonctions renomm� et modifi�
- liste des modules affich� par ordre alphabetique
- ajout de 2 nouvelles variables de configuration : $CONFIG['ROOT'] et $CONFIG['DIRSYS']
- le module de config recherche automatiquement les themes css dans le dossier 'styles'

version 7.01
- correction d'un bug du prechargement des images
- transparence de la bulle des informations exif

version 7.05
- correction du probleme d'affichage d'erreur sur la 1ere page sur certains hebergeurs (OVH)
- il etait impossible de nommer un dossier avec le caractere "+" : corrig� :) 
- les fichiers modifi� pour cette release sont : list.inc.php, showpict.inc.php



Pour toute question ou rapport de bug, vous pouvez consulter le site du script : http://jcjcjcjc.free.fr/
