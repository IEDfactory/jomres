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

class j10527reviews
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$lists = $componentArgs[ 'lists' ];

		$configurationPanel->insertHeading(jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false));

		$configurationPanel->setleft(jr_gettext('_JOMRES_REVIEWS_ADMIN_CONTROL', '_JOMRES_REVIEWS_ADMIN_CONTROL', false));
		$configurationPanel->setmiddle($lists[ 'use_reviews' ]);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();


		$configurationPanel->setleft(jr_gettext('REVIEW_NAG', 'REVIEW_NAG', false));
		$configurationPanel->setmiddle($lists['review_nag']);
		$configurationPanel->setright(jr_gettext('REVIEW_NAG_DESC', 'REVIEW_NAG_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', false));
		$configurationPanel->setmiddle($lists['autopublish_reviews']);
		$configurationPanel->setright(jr_gettext('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_REVIEWS_ADMIN_TESTMODE', '_JOMRES_REVIEWS_ADMIN_TESTMODE', false));
		$configurationPanel->setmiddle($lists[ 'reviews_test_mode' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', false));
		$configurationPanel->setmiddle($lists['only_guests_can_review']);
		$configurationPanel->setright(jr_gettext('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', false));
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('PORTAL_REVIEWS_LIMIT', 'PORTAL_REVIEWS_LIMIT', false));
		$configurationPanel->setmiddle('<input type="number" class="input-large" name="cfg_reviews_limit" value="'.$jrConfig[ 'reviews_limit' ].'" />');
		$configurationPanel->setright(jr_gettext('PORTAL_REVIEWS_LIMIT_DESC', 'PORTAL_REVIEWS_LIMIT_DESC', false));
		$configurationPanel->insertSetting();
		
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
