<?php
/**
 * @package administrator.module mod_administratorlinkghsvs for Joomla!
 * @version See mod_administratorlinkghsvs.xml
 * @author G@HService Berlin Neukölln, Volkmar Volli Schlothauer (ghsvs.de)
 * @copyright Copyright (C) 2011, G@HService Berlin Neukölln, Volkmar Volli Schlothauer. All rights reserved.
 * @license See mod_administratorlinkghsvs.xml
 * @authorUrl http://www.ghsvs.de
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

if (!empty($link))
{ ?>
<a href="<?php echo $link; ?>"
	class="header-item-content mod_administratorlinkghsvs"
	title="<?php echo Text::_('MOD_ADMINISTRATORLINKGHSVS_NEW_TAB'); ?>"
	target="_blank">
	<div class="header-item-icon">
		<span class="icon-home" aria-hidden="true"></span>
	</div>
	<div class="header-item-text">
		<?php echo Text::_('MOD_ADMINISTRATORLINKGHSVS_ADMINISTRATION'); ?>
	</div>
</a>
<?php
}
