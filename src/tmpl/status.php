<?php
/**
 * @package administrator.module mod_administratorlinkghsvs for Joomla!
 * @version See mod_administratorlinkghsvs.xml
 * @author G@HService Berlin Neukölln, Volkmar Volli Schlothauer (ghsvs.de)
 * @copyright Copyright (C) 2011, G@HService Berlin Neukölln, Volkmar Volli Schlothauer. All rights reserved.
 * @license GNU GPLv3 http://www.gnu.org/licenses/gpl-3.0.html; See LICENSE.txt
 * @authorUrl http://www.ghsvs.de
 */

defined('_JEXEC') or die;

/*
Available variables from helper:
- String $link
- String $iconClass
- String $labelling
- String $titleAttr
*/
?>
<a href="<?php echo $link; ?>"
	class="header-item-content mod_administratorlinkghsvs" target="_blank"
	<?php	echo $titleAttr ? 'title="' . $titleAttr . '"': ''; ?>>
	<?php	if ($iconClass) { ?>
	<div class="header-item-icon">
		<span class="<?php echo $iconClass; ?>" aria-hidden="true"></span>
	</div>
	<?php	} ?>
	<?php	if ($labelling) { ?>
	<div class="header-item-text">
		<?php echo $labelling; ?>
	</div>
	<?php	} ?>
</a>
