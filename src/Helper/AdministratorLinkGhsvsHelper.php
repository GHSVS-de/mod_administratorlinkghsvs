<?php
/**
 * @package administrator.module mod_administratorlinkghsvs for Joomla!
 * @version See mod_administratorlinkghsvs.xml
 * @author G@HService Berlin Neukölln, Volkmar Volli Schlothauer (ghsvs.de)
 * @copyright Copyright (C) 2011, G@HService Berlin Neukölln, Volkmar Volli Schlothauer. All rights reserved.
 * @license GNU GPLv3 http://www.gnu.org/licenses/gpl-3.0.html; See LICENSE.txt
 * @authorUrl http://www.ghsvs.de
 */
?>
<?php

namespace Joomla\Module\AdministratorLinkGhsvs\Administrator\Helper;

\defined('_JEXEC') or die;

use Joomla\CMS\Uri\Uri;

abstract class AdministratorLinkGhsvsHelper
{
	public static function getLink(): string
	{
		return Uri::root() . 'administrator/index.php';
	}
}
