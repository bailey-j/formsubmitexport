<?php

defined('_JEXEC') or die;

abstract class SsdaFormHelper extends JHelperContent
{
	public static function addSubmenu($submenu) 
	{
		// JHtmlSidebar::addEntry(
			// JText::_('Forms'),
			// 'index.php?option=com_ssdaform&view=ssdaforms',
			// $submenu == 'Forms'
		// );

		JHtmlSidebar::addEntry(
			JText::_('Submissions'),
			'index.php?option=com_ssdaform&view=ssdaforms',
			$submenu == 'Submissions'
		);

	}
}
	