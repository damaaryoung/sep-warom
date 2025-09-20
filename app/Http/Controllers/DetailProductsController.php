<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\SEPServiceLibraries;
use Jenssegers\Agent\Agent;

class DetailProductsController extends Controller
{
    protected SEPServiceLibraries $sep;
    public $viewDir = "products";

    public function __construct()
    {
        $this->sep = new SEPServiceLibraries();
        // Cache::flush();
    }

    public function index($id)
    {
        return view($this->viewDir . "." . 'detail_products', compact('id'));
    }

    public function getDetailsProduct(Request $request){

        $id_data = $request->input('id_data', null);
        
        $params = array(
            "request_data" => array(
                "id_data" => $id_data
            )
        );

        $url = $this->sep->sep_url . "/products/detailProducts";

        $data = $this->sep->getData($url, json_encode($params));
        $data = json_decode($data);

        $response_code =  $data->response_code;
        $msg = $data->response_desc;
        if($response_code == "00"){
            $data_table = $data->response_data->data;
        } else {
            $data_table = null;
        }
        

        $data_render['response_code'] = json_encode($response_code);
        $data_render['msg'] =  json_encode($msg);
        $data_render['data_table'] = json_encode($data_table);

        return response()->json($data_render);
    }
}