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
<div class="mod_administratorlinkghsvs">
	<a href="<?php echo $link; ?>" class="btn btn-primary btn-md"
		title="<?php echo Text::_('MOD_ADMINISTRATORLINKGHSVS_NEW_TAB'); ?>"
		target="_blank">
			<?php echo Text::_('MOD_ADMINISTRATORLINKGHSVS_ADMINISTRATION'); ?>
		</a>
</div>
<?php
}
