<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class SsdaFormViewSsdaForms extends JViewLegacy
{
	
	function display($tpl = null)
	{
		
		$this->item = $this->get('Items');
		
		$this->pagination = $this->get('Pagination');
		
		$this->state = $this->get('State');
		
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		$this->addToolbar();
		
		// Set the submenu
		SsdaFormHelper::addSubmenu('ssdaforms');
		$this->sidebar = JHtmlSidebar::render(); //shows menu titles
		
		parent::display($tpl);
		
	}
	
	function addToolbar()
	{
		JToolbarHelper::title('Submissions Manager');
		JToolbarHelper::addNew('ssdaform.add');
		
		JToolbarHelper::editList('ssdaform.edit');
		
		JToolbarHelper::deleteList('Are you sure?', 'ssdaforms.delete');
		
		//Custom Button - Export CSV
		JToolBarHelper::custom('ssdaforms.exportcsv', 'download.png', 'download_f2.png', 'Export to CSV', false);
		
	}
}
