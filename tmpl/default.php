<?php
/**
 * @package administrator.module mod_administratorlinkghsvs for Joomla!
 * @version See mod_administratorlinkghsvs.xml
 * @author G@HService Berlin Neukölln, Volkmar Volli Schlothauer (ghsvs.de)
 * @copyright Copyright (C) 2011 - 2020, G@HService Berlin Neukölln, Volkmar Volli Schlothauer. All rights reserved.
 * @license See mod_administratorlinkghsvs.xml
 * @authorUrl http://www.ghsvs.de
 */
?>
<?php

\defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

if (!empty($link))
{ ?>
<div class="btn-group ">
	<span class="mod_administratorlinkghsvs">
		<a href="<?php echo $link; ?>" target="_blank">
			<span class="icon-link" aria-hidden="true"></span>
			<?php echo Text::_('MOD_ADMINISTRATORLINKGHSVS_NEW_TAB'); ?>
		</a>
 </span>
</div>
<?php
}
