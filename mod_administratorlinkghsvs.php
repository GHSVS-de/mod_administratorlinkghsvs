<?php
/**
 * @package administrator.module mod_administratorlinkghsvs for Joomla!
 * @version See mod_administratorlinkghsvs.xml
 * @author G@HService Berlin Neukölln, Volkmar Volli Schlothauer
 * @copyright Copyright (C) 2011 - 2020, G@HService Berlin Neukölln, Volkmar Volli Schlothauer. All rights reserved.
 * @license See mod_administratorlinkghsvs.xml
 * @authorUrl http://www.ghsvs.de
 */
?>
<?php
\defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\AdministratorLinkGhsvs\Administrator\Helper\AdministratorLinkGhsvsHelper;

$link = AdministratorLinkGhsvsHelper::getLink();

require ModuleHelper::getLayoutPath('mod_administratorlinkghsvs', $params->get('layout', 'default'));