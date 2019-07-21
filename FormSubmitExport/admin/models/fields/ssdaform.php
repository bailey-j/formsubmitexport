<?php
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');

class JFormFieldSsdaFormextends JFormFieldList
{
	protected $type = 'SsdaForm';
	
	protected function getOptions()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		
		$query->select('#__ssdaform_form.id as id, name, #__categories.title as category, catid');
		$query->from('#__ssdaform_form');
			
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options = array();
		if ($messages)
		{
			foreach($messages as $message)
			{
				$options[] = JHtml::_('select.option', $message->id, $message->name );
			}
		}
		$options = array_merge(parent::getOptions(), $options);
			
			return $options;
		}
}

?>	


