<?php

/**
 * Fungsi untuk generate request id
 *
 * @package           App
 * @subpackage        Libraries
 * @author            Team BRILink
 * @copyright         2021, PT. Bank Rakyat Indonesia (Persero) Tbk.
 * @return            object
 */

namespace App\Libraries;

use Illuminate\Support\Facades\Log;

class GenerateRequestId {

	/**
	* @method get_request_id 
	* @return string $request_id
	*/
  	public function get_request_id(){
		$id = hash("sha256", date('Y-m-d H:i:s').random_int(100000, 999999));
		return substr($id, -32);
    }

	public static function new_get_request_id(){
		$id = hash("sha256", date('Y-m-d H:i:s').random_int(100000, 999999));
		return substr($id, -32);
    }

}