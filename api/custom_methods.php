<?php
/**
 * Custom Flight methods that format json responses
 *
 * Customised methods for the Flight framework that is used by the REST API functionality. These methods allow us to include logging through Monolog. Also formats the API response in an envelope
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 */

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

    Flight::map('json', function ($response_name, $data, $code = 200, $encode = true, $charset = 'utf-8') {
        logging::log_message(' Replied with code '.$code, 'API', 'INFO' , ' Replied with code '.$code.' and contents'.json_encode($data));
        $response = new stdClass();
        $response->data[$response_name] = $data;
        $response->meta['code'] = $code;
        $json = json_encode($response);
        Flight::response()
            ->status($code)
            ->header('Content-Type', 'application/json; charset='.$charset)
            ->write($json)
            ->send();
			exit;
    });

    Flight::map('halt', function ($code = 200, $message = '') {
        $log = ' Halted run '.$code.' with message '.$message;
        logging::log_message($log, 'API', 'INFO');
        $response = new stdClass();
        $response->meta['code'] = $code;
        $response->meta['error_message'] = $message;
        $json = json_encode($response);
        Flight::response()
            ->status($code)
            ->write($json)
            ->send();
			exit;
    });
