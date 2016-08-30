<?php

defined('_JEXEC') or die;
JHtml::_('behavior.tabstate');

$controller = JControllerLegacy::getInstance('Agosmmapbuttonhelp');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
