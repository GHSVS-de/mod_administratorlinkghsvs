<?php
/**
 * @package administrator.module mod_administratorlinkghsvs for Joomla!
 * @version See mod_administratorlinkghsvs.xml
 * @author G@HService Berlin Neukölln, Volkmar Volli Schlothauer
 * @copyright Copyright (C) 2011, G@HService Berlin Neukölln, Volkmar Volli Schlothauer. All rights reserved.
 * @license GNU GPLv3 http://www.gnu.org/licenses/gpl-3.0.html; See LICENSE.txt
 * @authorUrl http://www.ghsvs.de
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\AdministratorLinkGhsvs\Administrator\Helper\AdministratorLinkGhsvsHelper;

$link = AdministratorLinkGhsvsHelper::getLink();

if (empty($link))
{
	return;
}

$iconClass = AdministratorLinkGhsvsHelper::getIconClass($params);
$labelling = AdministratorLinkGhsvsHelper::getLabelling($params);
$titleAttr = AdministratorLinkGhsvsHelper::getTitleAttr($params);
require ModuleHelper::getLayoutPath(
	'mod_administratorlinkghsvs',
	$params->get('layout', 'default')
);
