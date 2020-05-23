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
<div class="header-item-content mod_administratorlinkghsvs">
	<a class="d-flex" href="<?php echo $link; ?>"
		title="<?php echo Text::_('MOD_ADMINISTRATORLINKGHSVS_NEW_TAB'); ?>"
		target="_blank">
		<div class="d-flex align-items-end mx-auto">
			<span class="fas fa-home fa-fw" aria-hidden="true"></span>
		</div>
		<div class="align-items-center tiny">
			<?php echo Text::_('MOD_ADMINISTRATORLINKGHSVS_ADMINISTRATION'); ?>
		</div>
	</a>
</div>
<?php
}
