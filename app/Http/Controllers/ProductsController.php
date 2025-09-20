<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\SEPServiceLibraries;
use Jenssegers\Agent\Agent;

class ProductsController extends Controller
{
    
    protected SEPServiceLibraries $sep;
    public $viewDir = "products";

    public function __construct()
    {
        $this->sep = new SEPServiceLibraries();
        // Cache::flush();
    }

    public function index()
    {
        return view($this->viewDir . "." . 'products');
    }

    protected function view($view, $data = [])
    {
        return view($this->viewDir . "." . $view, $data);
    }

    public function getCategories(Request $request){
        $params = array(
            "request_data" => array(
                "search_data" => "",
            )
        );

        $url = $this->sep->sep_url . "/categories/showAll";

        $data = $this->sep->getData($url, json_encode($params));
        $data = json_decode($data);

        $response_code =  $data->response_code;
        $msg = $data->response_desc;
        $data_table = $data->response_data->data;

        $data_render['response_code'] = json_encode($response_code);
        $data_render['msg'] =  json_encode($msg);
        $data_render['data_table'] = json_encode($data_table);

        return response()->json($data_render);
    }

    public function getSubCategories(Request $request){

        $id_categories = $request->input('id_categories', null);
        
        $params = array(
            "request_data" => array(
                "id_categories" => $id_categories,
            )
        );

        $url = $this->sep->sep_url . "/sub-category/showByIdCategory";

        $data = $this->sep->getData($url, json_encode($params));
        $data = json_decode($data);

        $response_code =  $data->response_code;
        $msg = $data->response_desc;
        $data_table = $data->response_data->data;

        $data_render['response_code'] = json_encode($response_code);
        $data_render['msg'] =  json_encode($msg);
        $data_render['data_table'] = json_encode($data_table);

        return response()->json($data_render);
    }

    public function getAllProducts(Request $request){

        $search_data = $request->input('search_data', null);
        $page = $request->input('page', null);
        
        $params = array(
            "request_data" => array(
                "search_data" => $search_data,
            )
        );

        $pagination = ($page !== null) ? "?page=" . $page : "";

        $url = $this->sep->sep_url . "/products/show" . $pagination;

        $data = $this->sep->getData($url, json_encode($params));
        $data = json_decode($data);

        $response_code =  $data->response_code;
        $msg = $data->response_desc;
        $data_table = $data->response_data->data;
        $pagination = $data->response_data->pagination;

        $data_render['response_code'] = json_encode($response_code);
        $data_render['msg'] =  json_encode($msg);
        $data_render['data_table'] = json_encode($data_table);
        $data_render['pagination'] = json_encode($pagination);

        return response()->json($data_render);
    }

}