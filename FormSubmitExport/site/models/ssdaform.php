<?php
defined('_JEXEC') or die('Restricted access');

class SsdaFormModelSsdaForm extends JModelAdmin
{
	public function getTable($type = 'SsdaForm', $prefix = 'SsdaFormTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
	public function getForm($data = array(), $loadData = true)
	{
		$app = JFactory::getApplication('site');
		
		// Get the form.
		$form = $this->loadForm(
			'com_ssdaform.ssdaform', 'ssdaform',
			array(
				'control' => 'jform',
				'load_data' => true//$loadData 
			)	
		);
		if (empty($form))
		{
			return false;
		}
		return $form;
	}
		
	
	protected function loadFormData()
	{
		$data = $this->getItem();

		return $data;
	}
}