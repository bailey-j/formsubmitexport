<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_ssdaform
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Submission Table class
 *
 * @since  0.0.1
 */
class SsdaFormTableSsdaForm extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__ssdaform_submission', 'id', $db);
	}
}