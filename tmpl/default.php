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

use Joomla\CMS\Language\Text;

/*
Available variables from helper:
- String $link
- String $iconClass
- String $labelling
- String $titleAttr
*/
?>
<div class="mod_administratorlinkghsvs">
	<a href="<?php echo $link; ?>" class="btn btn-primary btn-md" target="_blank"
		<?php	echo $titleAttr ? 'title="' . $titleAttr . '"': '';?>>
			<?php echo $labelling; ?>
	</a>
</div>
