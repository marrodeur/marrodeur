<?php
#  +------------------ explorer ---------------------------+
#  |   SCRIPT Entierement Ecrit par Jean Charles MAMMANA   |
#  |   Url : http://jcjcjcjc.free.fr                       |
#  |   Contact : jc_mammana@hotmail.com                    |
#  |                                                       |
#  |   Tous les scripts utilisé dans ce projet             |
#  |   sont sont en libre utilisation.                     |
#  |   Tous droits de modifications sont autorisé          |
#  |   à condition de m'en informer comme précisé          |
#  |   dans les termes du contrat de la licence GPL        |
#  |                                                       |
#  +-------------------------------------------------------+

@session_start();
$_SESSION['test_sessions'] = 'ok';

// modifier cette ligne selon le nom du dossier systeme
include_once('./.dirsys/config.inc.php');

$query = '';
$path = $CONFIG['DOCUMENT_ROOT'];
if(!empty($_GET)){
        $query = "?".http_build_query($_GET,'');
        if(($pathT = makePath($_GET)) === false) die($LANGUE['ERR_Violation']);
        $path = resolvePath($CONFIG['DOCUMENT_ROOT'].$pathT['path']);
}

$showtn = SelectAffichType('',$path,$CONFIG);

if($showtn) $fileToOpen = 'showtn.php'.$query;
else $fileToOpen = 'list.php'.$query;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title><?php echo $CONFIG['MAIN_TITLE'] ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 month">
<meta name="author" content="psykokwak">
<meta name="reply-to" content="jc_mammana@hotmail.com">
<meta name="owner" content="jc_mammana@hotmail.com">
<meta name="copyright" content="psykokwak">
<meta name="nom" content="psykokwak">
<meta name="description" content="Explorateur de fichier web">
<meta name="keywords" content="explorateur, web, fichiers, explorer, icones, photos, images, photo, image, classement, classer, dossier, repertoir, systeme, GPL, licence, libre, EXIF, slideshow, psykokwak, jean charles mammana">
<!-- document root : <?php echo $CONFIG['DOCUMENT_ROOT']; ?> //-->
</head>

<frameset cols="<?php echo $CONFIG['WIDTH_TREE_FRAME'] ?>,*" frameborder="<?php echo $CONFIG['FRAME_BORDER'] ?>" border="<?php echo $CONFIG['WIDTH_FRAME_BORDER'] ?>" framespacing="<?php echo $CONFIG['WIDTH_FRAME_SPACING'] ?>">
  <frame src="<?php echo $CONFIG['DIRSYS']; ?>/arbre.php<?php echo $query ?>" name="tree" scrolling="<?php echo $CONFIG['SCROLING_TREE_FRAME'] ?>" <?php echo $CONFIG['RESIZE_FRAME'] ?> >
  <frame src="<?php echo $CONFIG['DIRSYS']; ?>/<?php echo $fileToOpen; ?>" name="main">
</frameset>
<noframes><body>

</body></noframes>
</html>
