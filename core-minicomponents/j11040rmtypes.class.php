<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j11040rmtypes
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$this->ret_vals = array();
		
		$resource_type = jomresGetParam($_REQUEST, 'resource_type', '');

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_site_images($resource_type);
		
		if (isset($jomres_media_centre_images->site_images [$resource_type])) {
			$this->ret_vals = $jomres_media_centre_images->site_images [$resource_type];
		} else {
			$this->ret_vals = array();
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return $this->ret_vals;
	}
}
