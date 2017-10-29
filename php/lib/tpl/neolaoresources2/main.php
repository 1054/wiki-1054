<?php
if(auth_quickaclcheck($ID) >= 2){
	$userOK = true;
}
/**
 * Thème
 * @author neolao <neo@neolao.com>
 * @link   http://resources.neolao.com/php/dokuwiki/templates
 */
include("header.php");
?>
		<div id="body">
			<?php if($userOK){ ?>
			<div id="sidebar">
				<div class="panel">
					<h2>Administration</h2>
					<ul>
						<li><?php tpl_actionlink("login"); ?></li>
						<li><?php tpl_actionlink("edit"); ?></li>
						<li><?php tpl_actionlink("history"); ?></li>
						<li><?php tpl_actionlink("recent"); ?></li>
						<li><?php tpl_actionlink("admin"); ?></li>
						<li><?php tpl_actionlink("profile"); ?></li>
					</ul>
				</div>
			</div>
			<?php } ?>
			<div id="content">
				<p><?php tpl_youarehere(); ?></p>
				<?php flush(); ?>
				<?php tpl_content(); ?>
				<?php flush(); ?>
			</div>
		</div>
<?php include("footer.php"); ?>
