<?php

require_once APP_DIR . 'classes/CurlRequest.php';

class HelloController extends AppController
{
    public function index()
    {
        $message = Hello::getMessage();
        $langs = array('ruby', 'python', 'go', 'hack');

//        $curl_request = new CurlRequest();
//        $json_result = $curl_request->request('GET', 'http://example.com/test.json');
//
//        $result = json_decode($json_result);
//        $result = $result->data;

        $this->set(get_defined_vars());
    }
}
