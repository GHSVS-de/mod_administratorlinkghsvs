<?php
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
