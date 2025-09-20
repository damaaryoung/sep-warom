<?php

/**
 * connection to BSS SERVICE
 *
 * @package           App
 * @subpackage        Libraries
 * @author            Team BRILink
 * @copyright         2021, PT. Bank Rakyat Indonesia (Persero) Tbk.
 * @return            json
 */

namespace App\Libraries;

use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Jenssegers\Agent\Agent;
use Libraries\GenerateRequesttId;

class SEPServiceLibraries{

    protected Agent $agent;
    protected string $sepUrl;
    protected GenerateRequestId $generate_request_id; 

    public function __construct()
    {
        $this->agent = new Agent();
        $this->sep_url = env('SEP_SERVICE');
        $this->generate_request_id = new GenerateRequestId();
        $this->id_request = $this->generate_request_id->get_request_id();
        $this->method = "";
    }

    public function getData($url, $params){
        $action = "Get Data From Service";
        $header = array(
            'Content-Type: application/json',
            'X-Username: '. 'admin'
        ); 
        return $this->execute($url, $params, $header, $action);
    }

    /**
     * Base for call service
     * @param string $url               destination url serice
     * @param string $data              data send to service
     * @return object $server_output    json decoded of response from service BAM
     */
    public function execute($url, $data, $header, $action)
    {
        $agent = new Agent();
        $browser = $agent->browser();
        $version_browser = $agent->version($browser);
        $timeout = env('BSS_SERVICE_TIMEOUT',300);

        $platform = $agent->platform();
        $version_platform = $agent->version($platform);
        $browser_type = 'Browser: '.$browser.' '.$version_browser.' '.$platform.' '.$version_platform;
        array_push($header, $browser_type);

        Log::info("<<<<<<<<<< Start Call BRILink Support System API Service >>>>>>>>>>");
        Log::info('['.$this->id_request.'][ROUTE-BSS-SERVICE] : ' . $url);
        Log::info('['.$this->id_request.'][HEADER-BSS-SERVICE] : ' . json_encode($header));
        $log_request = json_decode($data, TRUE);
        if(array_key_exists('pernr',$log_request['request_data']) && array_key_exists('password',$log_request['request_data'])){
            unset($log_request['request_data']['pernr']);
            unset($log_request['request_data']['password']);
            Log::info('['.$this->id_request.'][REQUEST-BSS-SERVICE] : ' . json_encode($log_request,JSON_FORCE_OBJECT));
        }else{
            Log::info('['.$this->id_request.'][REQUEST-BSS-SERVICE] : ' . $data);
        }
        $start = microtime(true);
        $curl = curl_init();
        curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            $header
        );
        if ($this->method == "GET") {
            curl_setopt($curl, CURLOPT_HTTPGET, 1);
        } else {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $server_output = curl_exec($curl);
        $end = microtime(true);
        $this->response_time = $end - $start;
        $this->http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        //cek tidak ada balasan
        if (empty($server_output)) {
            curl_close($curl);
            $response = [
                "response_code" => '99',
                "response_desc" => 'Gagal Connect ke SEP API Service',
            ];
            Log::info('['.$this->id_request.'][RESPONSE-BSS-SERVICE] : ' . json_encode($response));
            return json_encode($response);
        }

        //check http code response
        if (curl_getinfo($curl, CURLINFO_HTTP_CODE) != 200) {
            $response = [
                "response_code" => '99',
                "response_desc" => curl_getinfo($curl, CURLINFO_HTTP_CODE) . " - Terjadi kesalahan pada sistem BRILink Support System API Service.",
            ];
            Log::info('['.$this->id_request.'][RESPONSE-BSS-SERVICE] : ' . json_encode($response));
            curl_close($curl);
            return json_encode($response);
        }

        //return jika http 200
        if (curl_getinfo($curl, CURLINFO_HTTP_CODE) == 200) {
            curl_close($curl);
            if ($action == "bss_get_image_by_username") {
                if (isset(json_decode($server_output)->response_data->mime_type)) {
                    $server_output_log = json_encode([
                        "response_code" => json_decode($server_output)->response_code,
                        "response_desc" => json_decode($server_output)->response_desc,
                        "action" => json_decode($server_output)->action,
                        "response_data" => [
                            "file_name" => json_decode($server_output)->response_data->file_name,
                            "mime_type" => json_decode($server_output)->response_data->mime_type,
                            "base64" => ""
                        ]
                    ]);
                }else{
                    $server_output_log = $server_output;
                }
            }else{
                $server_output_log = $server_output;
            }
            Log::info('['.$this->id_request.'][RESPONSE-BSS-SERVICE] : ' . $server_output_log);
            return $server_output;
        }
    }
}