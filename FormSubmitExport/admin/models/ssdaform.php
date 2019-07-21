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
		// Get the form.
		$form = $this->loadForm(
			'com_ssdaform.ssdaform', 'ssdaform',
			array(
				'control' => 'jform',
				'load_data' => $loadData )	);
		if (empty($form))
		{
			return false;
		}
		return $form;
		parent::__construct($config);
	}
	
	protected function loadFormData()
	{
		$data = $this->getItem();
		return $data;
	}
		
	public function getExportData($pks)
	{
		$pklist = implode(',', $pks);
		
		$db	= JFactory::getDBO();
		$query	= $db->getQuery(true);
		$query	-> select('lastname, firstname, midname, address, dob, applicantage, gender, nid, otherid, nis, homenum, mobilenum, email, mother, father, guardian, addressnok, 
		nokhomenum, nokmobnum, nokemail, educlevel, numccslc, numcsec, empstatus, unemptime, challenges, childyesno, childnum, childage, programchoice, skillsaccess, otherinstitute, 
		publicassist, otherprogramme, date')
			-> from('#__ssdaform_submission');
			//-> where($db->quoteName('id IN ('.$pklist.')'));
		$db	-> setQuery((string)$query);
		$rows	= $db->loadRowList();
		
		// $options  = array();	//header with column names //$options  = array();
		// $options  = array_merge( $options,  $rows);
		
		// return $options;
		
		return $rows;
	}
}

?>