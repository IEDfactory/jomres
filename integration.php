<?php
/**
 * This script is mainly used for bootstrapping Jomres. It's old code, but it checks out.
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

/**
*
* TRANSACTION_ID is used by the logger class to allow us to track single calls through the system
*
*/
if (!defined('TRANSACTION_ID')) {
	define('TRANSACTION_ID', time());
}


/**
*
* jomres root directory name
*
* Wordpress determined for some reason that the Jomres root directory should be configurable as a condition of listing Jomres on the Wordpress plugin directory. CMS root directories are sometimes not writable by the web server and jomres_root.php cannot be created, in which case we will assume that the Jomres root directory is called "jomres"
*
*/
if (!defined('JOMRES_ROOT_DIRECTORY')) {
	if (file_exists(dirname(__FILE__).'/../jomres_root.php')) {
		require_once dirname(__FILE__).'/../jomres_root.php';
	} else {
		define('JOMRES_ROOT_DIRECTORY', 'jomres');
	}
}


/**
*
* find jomres root path
*
*/
if (!defined('JOMRESPATH_BASE')) {
	if (!defined('JRDS')) {
		$apacheSig = false;

		$detect_os = strtoupper($_SERVER[ 'SERVER_SOFTWARE' ]); // converted to uppercase
		$isWin32 = strpos($detect_os, 'WIN32');
		$IIS = strpos($detect_os, 'IIS');

		if (isset($_SERVER[ 'SERVER_SIGNATURE' ])) {
			$signature = strtoupper($_SERVER[ 'SERVER_SIGNATURE' ]);
			$apacheSig = strpos($signature, 'APACHE');
		}

		$dir = dirname(realpath(__FILE__));

		if (strpos($dir, ':\\')) {
			define('JRDS', '\\');
		} else {
			if ($isWin32 === false || $apacheSig == true) {
				define('JRDS', '/');
			} else {
				define('JRDS', '\\');
			}
		}
	}

	if (isset($_SERVER[ 'SCRIPT_FILENAME' ])) {
		$dir_path = str_replace($_SERVER[ 'SCRIPT_FILENAME' ], '', dirname(realpath(__FILE__)));
	} else {
		$dir_path = str_replace($_SERVER[ 'SCRIPT_NAME' ], '', dirname(realpath(__FILE__)));
	}

	define('JOMRESPATH_BASE', $dir_path.JRDS);
}

/**
*
* check if this is an ajax call or not
*
*/
if (!defined('AJAXCALL')) {
	if (isset($_REQUEST[ 'jrajax' ])) {
		if ((int) $_REQUEST[ 'jrajax' ] == 1) {
			define('AJAXCALL', true);
		} else {
			define('AJAXCALL', false);
		}
	} else {
		$contentType = isset($_SERVER["HTTP_ACCEPT"]) ? trim($_SERVER["HTTP_ACCEPT"]) : '';
		if( stristr($contentType, 'application/json') === TRUE ){
			define('AJAXCALL', true);
		}
		else {
			define('AJAXCALL', false);
		}
	}
}


/**
*
* define jomres paths
*
*/
define('JOMRESCONFIG_ABSOLUTE_PATH', substr(JOMRESPATH_BASE, 0, strlen(JOMRESPATH_BASE) - strlen(JOMRES_ROOT_DIRECTORY.JRDS)));

//app
define('JOMRES_APP_ABSPATH', JOMRESPATH_BASE.'core-minicomponents'.JRDS);
define('JOMRES_COREPLUGINS_ABSPATH', JOMRESPATH_BASE.'core-plugins'.JRDS);
define('JOMRES_REMOTEPLUGINS_ABSPATH', JOMRESPATH_BASE.'remote_plugins'.JRDS);
define('JOMRES_LIBRARIES_ABSPATH', JOMRESPATH_BASE.'libraries'.JRDS);
define('JOMRES_CLASSES_ABSPATH', JOMRESPATH_BASE.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS);
define('JOMRES_FUNCTIONS_ABSPATH', JOMRESPATH_BASE.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS);
define('JOMRES_CMSSPECIFIC_ABSPATH', JOMRESPATH_BASE.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS);
define('JOMRES_API_ABSPATH', JOMRESPATH_BASE.'api'.JRDS);

//assets
define('JOMRES_ASSETS_ABSPATH', JOMRESPATH_BASE.'assets'.JRDS);
define('JOMRES_CSS_RELPATH', JOMRES_ROOT_DIRECTORY.'/assets/css/');
define('JOMRES_CSS_ABSPATH', JOMRES_ASSETS_ABSPATH.'css'.JRDS);
define('JOMRES_JS_RELPATH', JOMRES_ROOT_DIRECTORY.'/assets/js/');
define('JOMRES_JS_ABSPATH', JOMRES_ASSETS_ABSPATH.'js'.JRDS);

//storage
define('JOMRES_SESSIONS_ABSPATH', JOMRESPATH_BASE.'sessions'.JRDS);
define('JOMRES_TEMP_ABSPATH', JOMRESPATH_BASE.'temp'.JRDS);
define('JOMRES_CACHE_ABSPATH', JOMRESPATH_BASE.'cache'.JRDS);
define('JOMRES_UPDATES_ABSPATH', JOMRESPATH_BASE.'updates'.JRDS);

//mPDF
define('JOMRES_MPDF_ABSPATH', JOMRES_TEMP_ABSPATH.'pdfs'.JRDS);

//vendors
define('JOMRES_VENDOR_ABSPATH', JOMRESPATH_BASE.'vendor'.JRDS);
define('JOMRES_NODE_MODULES_ABSPATH', JOMRESPATH_BASE.'node_modules'.JRDS);
define('JOMRES_NODE_MODULES_RELPATH', JOMRES_ROOT_DIRECTORY.'/node_modules/');

//includes
require_once JOMRES_VENDOR_ABSPATH.'autoload.php';
require_once JOMRESPATH_BASE.'detect_cms.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'database.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'input_filtering.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'output_filters.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'functions.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'multibye_functions.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'jr_gettext.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'countries.php';
require_once JOMRES_CLASSES_ABSPATH.'jomres_empty_class.class.php';
require_once JOMRES_CLASSES_ABSPATH.'jomres_singleton_abstract.class.php';
require_once JOMRES_CLASSES_ABSPATH.'jomres_gdpr_optin_consent.class.php';


/**
*
* include the classes registry file and make $classes a global variable to be easily accessible, so we`ll avoid calling include() more times
*
*/
global $classes;

if (file_exists(JOMRES_TEMP_ABSPATH.'registry_classes.php')) {
	include_once JOMRES_TEMP_ABSPATH.'registry_classes.php';
} else {
	$classes = search_core_and_remote_dirs_for_classfiles();
}

//includes
require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'init_config_vars.php';
require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_functions.php';

//patTemplate
if (!class_exists('patTemplate')) {
	require_once JOMRES_LIBRARIES_ABSPATH.'phptools'.JRDS.'patTemplate.php';
}

if (!class_exists('patErrorManager')) {
	require_once JOMRES_LIBRARIES_ABSPATH.'phptools'.JRDS.'patErrorManager.php';
}

/**
*
* The API includes the logger class. As the API doesn't always include the framework ( for performance ) to use the logger within Jomres itself, we'll need to make the distinction here
*
*/
if (!defined('JOMRES_API_CMS_ROOT')) {
	require_once JOMRES_API_ABSPATH.'classes'.JRDS.'logging.class.php';
}

//site config
$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig = $siteConfig->get();

//define jomres logs path
if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '') {
	$jrConfig['log_path'] = JOMRESPATH_BASE.'logs'.JRDS;
}

define('JOMRES_SYSTEMLOG_PATH', fix_path($jrConfig['log_path']));

/**
*
* define core images paths
*
*/
$uri = parse_url(get_showtime('live_site'));
$path = '';

if (isset($uri['path'])) {
	$path = $uri['path'];
}

define('JOMRES_IMAGES_ABSPATH', JOMRES_ASSETS_ABSPATH.'images'.JRDS);
define('JOMRES_IMAGES_RELPATH', $path.'/'.JOMRES_ROOT_DIRECTORY.'/assets/images/');

/**
*
* define uploaded images paths
*
*/
if (!defined('JOMRES_IMAGELOCATION_ABSPATH')) {
	define('JOMRES_IMAGELOCATION_ABSPATH', JOMRESPATH_BASE.'uploadedimages'.JRDS);
	
	if ($jrConfig['amazon_s3_active'] != '1' || $jrConfig['amazon_s3_bucket'] == '') {
		if (!defined('JOMRES_API_CMS_ROOT')) {
			define('JOMRES_IMAGELOCATION_RELPATH', $path.'/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/');
		} else {
			define('JOMRES_IMAGELOCATION_RELPATH', get_showtime('livesite').'/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/');
		}
	} else {
		if ($jrConfig['amazon_cloudfront_domain'] != '') {
			$amazon_url = 'https://'.$jrConfig['amazon_cloudfront_domain'];
		} else {
			$amazon_url = 'https://'.$jrConfig['amazon_s3_bucket'].'.s3.amazonaws.com';
		}
		
		define('JOMRES_IMAGELOCATION_RELPATH', $amazon_url.'/uploadedimages/');
	}
}


/**
*
* fullscreen view setup
*
*/
set_showtime('tmplcomponent', 'jomres');
set_showtime('tmplcomponent_source', JOMRES_LIBRARIES_ABSPATH.'fullscreen_view'.JRDS.'jomres.php');


/**
*
* copy fullscreen_view/jomres.php to the joomla template dir to help with fullscreen mode
*
*/
if (!defined('AUTO_UPGRADE')) {
	jomres_cmsspecific_patchJoomlaTemplate();
}

//cms specific urls
require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_urls.php';

//jomres parse request
jomres_parseRequest();

//error reporting
if ($jrConfig[ 'development_production' ] == 'production') {
	set_error_handler('errorHandler');
} else {
	error_reporting(-1);
	ini_set('display_errors', 'On');
}

//TODO find a better place, maybe jomres.php and framework.php
$jomresHTML = jomres_singleton_abstract::getInstance('jomresHTML');


// CSRF handling
require_once JOMRES_LIBRARIES_ABSPATH.JRDS.'crsfhandler'.JRDS.'csrfhandler.lib.php';

// Currently disabled. Gateways POST payment information, and because gateways use different sessions (i.e. different sessions than the guest or manager's browser session) there's no reliable way to validate CSRF tokens yet
// 

/* if (!empty($_POST)) {
	$token = isset($_POST['jomres_csrf_token']) ? $_POST['jomres_csrf_token'] : '';
	$valid = !empty($token) && $isValid = csrf::checkToken($token);
	if (!$valid) {
		// log then die 
		logging::log_message('CSRF token failed to validate ', 'Core', 'WARNING');
		die("Could not validate token");
	}
	csrf::flushKeys();
} */

// Stops here

