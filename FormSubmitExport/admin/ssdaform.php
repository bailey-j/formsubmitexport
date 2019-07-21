<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// Require helper file
JLoader::register('SsdaFormHelper', JPATH_COMPONENT . '/helpers/ssdaform.php');
// Get an instance of the controller prefixed by ssdaform
$controller = JControllerLegacy::getInstance('SsdaForm');
// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));
// Redirect if set by the controller
$controller->redirect();