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

use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Registry\Registry;

class AdministratorLinkGhsvsHelper
{
	public function getDisplayData(Registry $moduleParams): array
	{
		return [
			'link' => static::getLink(),
			'iconClass' => static::getIconClass($moduleParams),
			'labelling' => static::getLabelling ($moduleParams),
			'titleAttr' => static::getTitleAttr ($moduleParams),
		];
	}

	protected static function getLink(): string
	{
		return (string) new Uri(Route::_('index.php?'));
	}

	/**
	 * Get the icon class of the button.
	 *
	 * @param   Registry  $params  The module parameters.
	 *
	 * @return  string    The icon class of the button or empty string.
	 */
	protected static function getIconClass(Registry $moduleParams) : string
	{
		$iconClass = trim($moduleParams->get('iconClass', 'icon-home'));

		return static::clean($iconClass);
	}

	/**
	 * Get the labelling of the button. Also language strings are allowed.
	 *
	 * @param   Registry  $params  The module parameters.
	 *
	 * @return  string    The translated label of the button or empty string.
	 */
	protected static function getLabelling(Registry $moduleParams) : string
	{
		$labelling = trim($moduleParams->get(
			'labelling',
			'MOD_ADMINISTRATORLINKGHSVS_ADMINISTRATION'
		));

		return static::clean($labelling);
	}

	/**
	 * Get the text of title attribute of the button link. Also language strings are allowed.
	 *
	 * @param   Registry  $params  The module parameters.
	 *
	 * @return  string    The translated text of title attribute of the button link or empty string.
	 */
	protected static function getTitleAttr(Registry $moduleParams) : string
	{
		$titleAttr = trim($moduleParams->get(
			'titleAttr',
			'MOD_ADMINISTRATORLINKGHSVS_NEW_TAB'
		));

		return static::clean($titleAttr);
	}

	protected static function clean(String $string) : string
	{
		return empty($string) ? '' : htmlspecialchars( Text::_($string), ENT_QUOTES,
			'UTF-8');
	}
}
