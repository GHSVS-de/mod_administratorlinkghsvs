<?php
/**
 * @package administrator.module mod_administratorlinkghsvs for Joomla!
 * @version See mod_administratorlinkghsvs.xml
 * @author G@HService Berlin Neukölln, Volkmar Volli Schlothauer
 * @copyright Copyright (C) 2011, G@HService Berlin Neukölln, Volkmar Volli Schlothauer. All rights reserved.
 * @license GNU GPLv3 http://www.gnu.org/licenses/gpl-3.0.html; See LICENSE.txt
 * @authorUrl http://ghsvs.de
 */

namespace Joomla\Module\AdministratorLinkGhsvs\Administrator\Dispatcher;

\defined('_JEXEC') or die;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;

class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
	use HelperFactoryAwareTrait;

	protected function getLayoutData()
	{
		/*
		parent returns:
		'module'   => $this->module,
		'app'      => $this->app,
		'input'    => $this->input,
		'params'   => new Registry($this->module->params),
		'template' => $this->app->getTemplate()
		*/
		$data = parent::getLayoutData();
		$params = $data['params'];
		$displayData = $this->getHelperFactory()->getHelper(
			'AdministratorLinkGhsvsHelper', $data)->getDisplayData($params);

		return array_merge($data, $displayData);
	}
}
