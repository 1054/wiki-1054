<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']; ?>" lang="<?php echo $conf['lang']; ?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta name="author" content="neolao" />
		<?php tpl_metaheaders(); ?>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
		<title><?php echo hsc($conf['title']).wl($ID); ?></title>
	</head>
	<body>
		<div id="header">
			<div id="avoid">
		 		<ul>
					<li><a href="#content" accesskey="s">aller au contenu</a></li>
					<li><a href="http://portfolio.neolao.com/" accesskey="1">accueil</a></li>
					<li><a href="http://blog.neolao.com/" accesskey="2">actualit&eacute;</a></li>
					<li><a href="<?php echo wl($ID, "do=index"); ?>" accesskey="3">plan du site</a></li>
					<li><a href="http://portfolio.neolao.com/contact.php" accesskey="7">contact</a></li>
				</ul>
			</div>
			<div id="banner">&nbsp;</div>
			<h1><img src="<?php echo DOKU_TPL; ?>images/header_resources.png" alt="<?php echo hsc($conf['title']); ?>"/></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="http://portfolio.neolao.com/">PORTFOLIO</a></li>
				<li class="selected"><a href="http://resources.neolao.com/">RESSOURCES</a></li>
				<li><a href="http://blog.neolao.com/">BLOG</a></li>
			</ul>
		</div>
		<div id="submenu">
			<div id="search">
				<form method="post" action="<?php echo wl(); ?>" accept-charset="utf-8" id="dw__search">
					<p>
						<input type="hidden" name="do" value="search" />
						<label for="qsearch_in">recherche</label><input type="text" id="qsearch__in" name="id" value="<?php if($ACT == 'search') echo htmlspecialchars($_REQUEST['id']); ?>" onkeyup="ajax_qsearch.call('qsearch_in','qsearch_out')" <?php if(!$autocomplete) echo 'autocomplete="off" ';?>/>
						<input type="submit" value="rechercher" />
					</p>
					<?php if($ajax) echo '<div id="qsearch__out" onclick="this.style.display=\'none\'"></div>'; ?>
				</form>
			</div>
			<?php include("menu.php"); ?>
		</div>